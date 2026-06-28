@extends('layouts.app')

@section('content')
<h1>Areas</h1>

<form action="{{route('Areas.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del area:
    <br>
    <input type="text" name="name">
</label>
<br>



<button type="submit">Enviar Formulario:</button>
</form>

@endsection
