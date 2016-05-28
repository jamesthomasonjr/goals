<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Goal;

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
    public function index(Request $request)
    {
        $user = $request->user();

        return view('goals.index')->with('goals', $user->goals);
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
        $user = $request->user();
        $goalText = $request->input('text');

        $goal = new Goal([
            'text' => $goalText
        ]);

        $user->goals()->save($goal);

        return redirect()->route('goals.index');
    }

    /**
     * Show the Update Goal form.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $goalId)
    {
        return view('goals.update')->with('goalId', $goalId);
    }

    /**
     * Update the given Goal.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAction(Request $request, $goalId)
    {
        $user = $request->user();
        $goal = $user->goals()->find($goalId);

        $goal->text = $request->input('text');
        $goal->save();

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
