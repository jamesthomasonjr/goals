<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class GoalController extends Controller
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
     * Show the User's Goals.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('goals.index');
    }

    /**
     * Show the Create Goal form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goals.create');
    }

    /**
     * Create a new Goal.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAction(Request $request)
    {
        $body = $request->getContent();

        return redirect()->route('goals.index');
    }

    /**
     * Show the Update Goal form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        return view('goals.update');
    }

    /**
     * Update the given Goal.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction()
    {
        return redirect()->route('goals.index');
    }

    /**
     * Destroy the given Goal.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroyAction()
    {
        return redirect()->route('goals.index');
    }
}
