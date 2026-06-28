@extends('layouts.app')

@section('content')
<div style="background-color: #d8e9ef; padding: 20px;">
<h1>Computers</h1>
</div>


<div style="background-color: #9ea7b1; padding: 20px;">
<form action="{{route('Computers.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <label>
            Número del computador:
            <br>
            <input type="number" name="number">
        </label>
        <br>

        <label>
            Marca del computador:
            <br>
            <input type="text" name="brand">
        </label>
        <br>
        <br>
        <button type="submit">Enviar Formulario:</button>
    </form>

@endsection
