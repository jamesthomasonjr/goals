@extends('layouts.app')

@section('content')

<h1>Edit</h1>
{!! BootForm::open()->action(route('goals.update.action', ['goalId' => $goalId, 'milestoneId' => $milestoneId]))->put() !!}
{!! BootForm::text('Milestone', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Update') !!}
{!! BootForm::close() !!}

<h1>Delete</h1>
{!! BootForm::open()->action(route('goals.destroy.action', ['goalId' => $goalId, 'milestoneId' => $milestoneId]))->delete() !!}
{!! BootForm::submit('Delete') !!}
{!! BootForm::close() !!}

@endsection
