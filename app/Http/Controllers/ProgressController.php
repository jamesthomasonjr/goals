<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Progress;

class ProgressController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the User's Progresses.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $goalId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);

        return view('progresses.index')->with('progresses', $goal->progresses);
    }

    /**
     *
     *
     *
     */
    public function read(Request $request, $goalId, $progressId)
    {
        return view('progresses.read')
            ->with('goalId', $goalId)
            ->with('progressId', $progressId);
    }

    /**
     * Show the Create Progress form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $goalId)
    {
        return view('progresses.create')->with('goalId', $goalId);
    }

    /**
     * Create a new Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAction(Request $request, $goalId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);

        $progressText = $request->input('text');

        $progress = new Progress([
            'text' => $progressText
        ]);

        $goal->progresses()->save($progress);

        return redirect()->route('goals.read', ['goalId' => $goalId]);
    }

    /**
     * Show the Update Progress form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $goalId, $progressId)
    {
        // Refactor out repeated code into private function
        $user = $request->user();
        $goal = $user->goals()->find($goalId);
        $progress = $goal->progresses()->find($progressId);

        return view('progresses.update')
            ->with('goalId', $goalId)
            ->with('progressId', $progressId)
            ->with('text', $progress->text);
    }

    /**
     * Update the given Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction(Request $request, $goalId, $progressId)
    {
        // Refactor out repeated code into private function
        $user = $request->user();
        $goal = $user->goals()->find($goalId);
        $progress = $goal->progresses()->find($progressId);

        $progress->text = $request->input('text');
        $progress->save();

        return redirect()->route('progresses.index', ['goalId', $goalId]);
    }

    /**
     * Destroy the given Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyAction(Request $request, $goalId, $progressId)
    {
        $request->user()->goals()->find($goalId)->progresses()->find($progressId)->delete();

        return redirect()->route('progresses.index');
    }
}
