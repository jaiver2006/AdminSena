
    @extends('layouts.app')

@section('content')
<h1>Teachers</h1>

<form action="{{route('Teachers.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del instructor:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    correo del instructor:
    <br>
    <input type="email" name="email">
</label>
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
