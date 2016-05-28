<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
    public function index()
    {
        return view('milestones.index');
    }

    /**
     * Show the Create Milestone form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('milestones.create');
    }

    /**
     * Create a new Milestone.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAction()
    {
        return redirect()->route('milestones.index');
    }

    /**
     * Show the Update Milestone form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('milestones.update');
    }

    /**
     * Update the given Milestone.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction()
    {
        return redirect()->route('milestones.index');
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
