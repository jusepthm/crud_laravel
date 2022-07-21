@extends('layouts.app')

@section('title', "Tarea")
    
@section('contenido')
    <h3><i>{{ $tarea->nombre }}</i> </h3>
    <ul>
        <li>
            Finalizada: <strong> {{ $tarea->estadoFinalizada() }}</strong>
        </li>
        <li>
            Urgencia: <strong> {{ $tarea->urgencia }}</strong>
        </li>
        <li>
            Fecha limite: <strong> {{ $tarea->fecha_limite }}</strong>
        </li>
        <p>
            {{ $tarea->descripcion }}
        </p>
    </ul>
    

@endsection