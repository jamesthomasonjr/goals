@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('goals.create.action'))->post() !!}
{!! BootForm::text('Goal', 'text') !!}
{!! BootForm::submit('Create') !!}
{!! BootForm::close() !!}

@endsection
