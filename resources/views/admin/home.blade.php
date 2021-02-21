@extends('adminlte::page')

@section('title', 'Darkkitchen Dashboard')

@section('content_header')
    <h1>Configuraciones del Home</h1>
@stop

@section('content')
    <livewire:home-config />
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
