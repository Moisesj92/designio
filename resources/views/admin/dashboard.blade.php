@extends('admin/layout')


@section('content')

    <h1>Dasboard</h1>
    <p>Usuario autenticado: {{ auth()->user()->name }}</p>
    
@endsection