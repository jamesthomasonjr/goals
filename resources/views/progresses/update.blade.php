@extends('layouts.app')

@section('content')

<h1>Edit</h1>
{!! BootForm::open()->action(route('goals.update.action', ['goalId' => $goalId, 'progressId' => $progressId]))->put() !!}
{!! BootForm::text('Progress', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Update') !!}
{!! BootForm::close() !!}

<h1>Delete</h1>
{!! BootForm::open()->action(route('goals.destroy.action', ['goalId' => $goalId, 'progressId' => $progressId]))->delete() !!}
{!! BootForm::submit('Delete') !!}
{!! BootForm::close() !!}

@endsection
