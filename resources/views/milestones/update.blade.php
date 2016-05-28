@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('goals.update.action'))->post() !!}
{!! BootForm::text('Milestone', 'text')->defaultValue($text) !!}
{!! BootForm::submit('Create') !!}
{!! BootForm::close() !!}

@endsection
