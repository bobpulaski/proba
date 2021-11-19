@extends('templates.main')

@php
    $title = 'Подвтверждение действия';
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1>Подвтверждение действия</h1>
    <h3>{{$id}}</h3>
    <form method="post" action="../partner/delete/{{$id}}">
        @method('delete')
        @csrf
        <x-button type="submit" style="danger" message="Удалить" />
    </form>
    <a href="../partners">Назад</a>


@endsection
