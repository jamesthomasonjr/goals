@extends('layouts.app')

@section('content')

@if (count($goals))
    <ul>
        @foreach ($goals as $goal)
            <li><a href="{!! URL::route('goals.read', ['goalId' => $goal->id])  !!}">{!! $goal->text !!}</a></li>
        @endforeach
    </ul>
@else
    <h1>No goals!</h1>
@endif

<a href="{!! URL::route('goals.create') !!}">Create new goal</a>

@endsection
