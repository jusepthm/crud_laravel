@extends('layouts.app')

@section('title', "Nueva tarea")
    
@section('contenido')
    <h3>Registrar tarea</h3>
    <form action="javascripts:void(0)">
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form-label">* Nombre de la tarea</label>
                <input type="text" name="nombre" id="InputNombre" class="form-control" placeholder="...">
                <div class="col-sm-4">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input">
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">* Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    <option value="0">Baja</option>
                    <option value="1">Normal</option>
                    <option value="2">Alta</option>
                </select>
            </div>
            <div class="col-sm-4">
                <label for="InputfechaLimite" class="form-label">* Fecha limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputfechaLimite" class="form-control">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control">

                </textarea>
            </div>
            <div class="col-sm-12 text-end">
                <button type="submit">
                    Guardar
                </button>
            </div>
        </div>
    </form>
@endsection