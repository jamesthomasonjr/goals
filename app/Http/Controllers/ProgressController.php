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

        return redirect()->route('progresses.index', ['goalId' => $goalId]);
    }

    /**
     * Show the Update Progress form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('progresses.update');
    }

    /**
     * Update the given Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction()
    {
        return redirect()->route('progresses.index');
    }

    /**
     * Destroy the given Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyAction()
    {
        return redirect()->route('progresses.index');
    }
}
