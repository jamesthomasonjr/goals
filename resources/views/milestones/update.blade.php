@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('goals.update.action', ['goalId' => $goalId, 'milestoneId' => $milestoneId]))->put() !!}
{!! BootForm::text('Milestone', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Update') !!}
{!! BootForm::close() !!}

@endsection
