@extends('templates.app')
@section('content')

@if ($willRain)
    <p>Se esperan precipitaciones en Cali, Colombia!</p>
@else
    <p>No se esperan precipitaciones en Cali, Colombia.</p>
@endif

@endsection
