@extends('layout')

@section('content')
	
<h1 class="center">Edit: {{ $org->name }}</h1>

<div class="row">
	{!! Form::model($org, ['method' => 'PATCH', 'action' => ['OrgsController@update', $org->id], 'files' => true, 'class' => 'col s12 m8 l6 offset-m2 offset-l3']) !!}
	    @include('forms.org', ['type' => 'edit', 'submitText' => 'Update Organisation'])
	{!! Form::close() !!}
</div>

@stop