@extends('layouts.app')

@section('title', "Tarea")
    
@section('contenido')
    <h3><i>{{ $tarea->nombre }}</i> </h3>
    <ul>
        <li>
            Finalizada: <strong> {{ $tarea->estadoFinalizada() }}</strong>
        </li>
        <li>
            Urgencia: <strong> {{ $tarea->urgencia() }}</strong>
        </li>
        <li>
            Fecha limite: <strong> {{ $tarea->fecha_limite/* ->format('H:i d / m / Y') */ }}</strong>
        </li>
        <p>
            {{ $tarea->descripcion }}
        </p>
    </ul>
    <hr>
    <div class="row">
        <div class="col-sm-12 mb-2">
            <form action="{{ route('tarea.destroy', $tarea) }}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger btm-sm" type="submit">
                Borrar
            </button>
        </form>
        </div>
    </div>
    

@endsection