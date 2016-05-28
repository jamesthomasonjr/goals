<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Milestone;

class MilestoneController extends Controller
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
     * Show the User's Milestones.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $goalId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);

        return view('milestones.index')->with('milestones', $goal->milestones);
    }

    /**
     * Show the Create Milestone form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $goalId)
    {
        return view('milestones.create')->with('goalId', $goalId);
    }

    /**
     * Create a new Milestone.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAction(Request $request, $goalId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);

        $milestoneText = $request->input('text');

        $milestone = new Milestone([
            'text' => $milestoneText
        ]);

        $goal->milestones()->save($milestone);

        return redirect()->route('milestones.index', ['goalId' => $goalId]);
    }

    /**
     * Show the Update Milestone form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $goalId, $milestoneId)
    {
        return view('milestones.update')
            ->with('goalId', $goalId)
            ->with('milestoneId', $milestoneId);
    }

    /**
     * Update the given Milestone.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction(Request $request, $goalId, $milestoneId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);
        $milestone = $goal->milestones()->find($milestoneId);

        $milestone->text = $request->input('text');
        $milestone->save();

        return redirect()->route('milestones.index', ['goalId' => $goalId]);
    }

    /**
     * Destroy the given Milestone.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyAction()
    {
        return redirect()->route('milestones.index');
    }
}
