@extends('layouts.app')

@section('content')
<div style="background-color: #e4e6e4; padding: 20px;">
<h1>Courses</h1>
</div>


<div style="background-color: #dfe0cf; padding: 20px;">
<form action="{{route('Courses.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero del curso:
    <br>
    <input type="number" name="numero_de_curso">
</label>
<br>
<label>
    Day:
    <br>
    <input type="text" name="day">
</label>
<br>
<br>
<label for="area_id">Área</label>
<br>
    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione un área</option>

        @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>
<br>

<label for="training_center_id">Centro de Formación</label>
<br>
    <select name="training_center_id" id="training_center_id" class="form-control">
        <option value="">Seleccione un centro de formación</option>

        @foreach($trainingCenters as $trainingCenter)
            <option value="{{ $trainingCenter->id }}">
                {{ $trainingCenter->name }}
            </option>
        @endforeach
    </select>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
@endsection
