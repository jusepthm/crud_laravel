@extends('layouts.app')

@section('title', "Editar tarea")
    
@section('contenido')
    <h3>Editar tarea  <i>{{ $tarea->nombre }}</i> </h3>
    <form action="{{ route('tarea.store')}}" method="POST">
        <x-tarea-form-body :tarea="$tarea"/>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


@endsection