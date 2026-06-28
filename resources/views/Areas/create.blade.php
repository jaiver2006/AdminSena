@extends('layouts.app')

@section('content')
<div style="background-color: #f9f1f9; padding: 20px;">
<h1>Areas</h1>
</div>
<div style="background-color: #d3ccd3; padding: 20px;">
<form action="{{route('Areas.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre del area:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>


<button type="submit">Enviar Formulario:</button>
</form>

@endsection
