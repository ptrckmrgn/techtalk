@extends('layout')

@section('content')

<h1>Domain: {{ $domain->alias }}</h1>

@include('snippets.org-grid')

@stop