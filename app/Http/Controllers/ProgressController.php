<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $user = $request->user();
        return view('progresses.index')->with('progresses', $user->progresses);
    }

    /**
     * Show the Create Progress form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('progresses.create');
    }

    /**
     * Create a new Progress.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAction()
    {
        return redirect()->route('progresses.index');
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
