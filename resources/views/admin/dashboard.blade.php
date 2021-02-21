@extends('adminlte::page')

@section('title', 'Darkkitchen Dashboard')

@section('content_header')
    <h1>Darkkitchen Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    @livewireStyles
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @livewireScripts
@stop
