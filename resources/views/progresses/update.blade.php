@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('goals.update.action', ['goalId' => $goalId, 'progressId' => $progressId]))->put() !!}
{!! BootForm::text('Progress', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Update') !!}
{!! BootForm::close() !!}

@endsection
