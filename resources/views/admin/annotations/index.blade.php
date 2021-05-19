@extends('adminlte::page')

@section('title', 'LISTA DE INDICADORES')

@section('content_header')

@stop

@section('content')
    <p> Lista de indicadores registrados</p>
    @livewire('admin.annotations-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop