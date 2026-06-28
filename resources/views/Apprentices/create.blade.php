@extends('layouts.app')

@section('content')
<h1>Apprentices</h1>

<form action="{{route('Apprentices.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del aprendiz:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    correo del aprendiz:
    <br>
    <input type="email" name="email">
</label>
<br>

<label>
    Número de celular del aprendiz:
    <br>
    <input type="number" name="cell_number">
</label>
<br>
<br>
<label for="training_center_id">Seleccione un Computador</label>
<br>
    <select name="computer_id" id="computer_id" class="form-control">
        <option value="">Seleccione un Computador</option>

        @foreach($Computers as $Computer)
            <option value="{{ $Computer->id }}">
                {{ $Computer->brand }}
            </option>
        @endforeach
    </select>
<br>

<label for="training_center_id">Seleccione un curso</label>
<br>
    <select name="course_id" id="course_id" class="form-control">
        <option value="">Seleccione un curso</option>

        @foreach($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->numero_de_curso }}
            </option>
        @endforeach
    </select>
<br><br>
<button type="submit">Enviar Formulario:</button>
</form>
@endsection
