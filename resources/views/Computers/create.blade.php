@extends('layouts.app')

@section('content')
<h1>Computers</h1>
    <form action="{{ route('Computers.store') }}" method="POST" enctype="multipart/form-data">

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
        <button type="submit">Enviar Formulario:</button>
    </form>

@endsection
