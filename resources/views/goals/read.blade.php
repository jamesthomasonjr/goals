@extends('layouts.app')

@section('content')

<h1>Milestones</h1>
@if (count($goal->milestones))
    <ul>
        @foreach ($goal->milestones as $milestone)
            <li><a href="{!! URL::route('milestones.update', ['goalId' => $goal->id, 'milestoneId' => $milestone->id])  !!}">{!! $milestone->text !!}</a></li>
        @endforeach
    </ul>
@else
    <p>No Milestones!</p>
@endif

<a href="{!! URL::route('milestones.create', ['goalId' => $goal->id]) !!}">Log new milestone</a>


<h1>Progress</h1>
@if (count($goal->progresses))
    <ul>
        @foreach ($goal->progresses as $progress)
            <li><a href="{!! URL::route('progresses.update', ['goalId' => $goal->id, 'progressId' => $progress->id]) !!}">{!! $progress->text !!}</a></li>
        @endforeach
    </ul>
@else
    <p>No Progress!</p>
@endif

<a href="{!! URL::route('progresses.create', ['goalId' => $goal->id]) !!}">Log new progress</a>


<h1>Edit</h1>
<a href="{!! URL::route('goals.update', ['goalId' => $goal->id]) !!}">Edit Goal</a>
@endsection
