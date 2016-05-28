@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('goals.update.action', ['goalId' => $goalId]))->put() !!}
{!! BootForm::text('Goal', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Update') !!}
{!! BootForm::close() !!}

@endsection
