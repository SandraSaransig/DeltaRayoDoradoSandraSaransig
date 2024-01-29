@extends('layout')

@section('title', 'Nuevo Evento')

@section('content')
    <h2>Añadir Evento</h2>
    <form action="{{ route('events.store') }}" method="post">
        @csrf

        <label for="name">Titulo:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="description">Descripcion:</label>
        <textarea name="description" id="description" cols="30" rows="10" >{{ old('description') }}</textarea>
        @error('description')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="location">Localización:</label>
        <input type="text" name="location" id="location" value="{{ old('location') }}">
        @error('location')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="{{ old('date') }}">
        @error('date')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="hour">Hora:</label>
        <input type="time" name="hour" id="hour" value="{{ old('hour') }}">
        @error('hour')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="type">Tipo de evento:</label>
        <select id="type" name="type">
            <option value="official">Oficial</option>
            <option value="exhibition">Exhibición</option>
            <option value="charity">Caridad</option>
        </select>
        @error('type')
            <br>
            Error:{{ $message }}
        @enderror
        <br>

        <label for="tags">Tags:</label>
        <input type="text" name="tags" id="tags" value="{{ old('tags') }}">
        @error('date')
        <br>
        Error:{{ $message }}
        @enderror
        <br>

        <label for="visible">Visible:</label>
        <input type="checkbox" name="visible" id="visible" {{ old('visible') ? 'checked' : '' }}>
        <br>

        <input type="submit" value="Añadir evento">
    </form>
@endsection
