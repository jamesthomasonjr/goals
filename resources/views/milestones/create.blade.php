@extends('layouts.app')

@section('content')

{!! BootForm::open()->action(route('milestones.create.action', ['goalId' => $goalId]))->post() !!}
{!! BootForm::text('Goal', 'text') !!}
{!! BootForm::submit('Create') !!}
{!! BootForm::close() !!}

@endsection
