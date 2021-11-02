@extends('layouts.principal')

@section('hero')
    {{-- @include('layouts.partials.principal.hero-cursos') --}}
@endsection

@section('contenido')
    @include('principal.cursos.lista')
@endsection
