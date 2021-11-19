@extends('templates.main')

@php
    $title = 'Форма редактирования контрагента';
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1>Форма редактирования контрагента</h1>
    <form action="post">
        <input type="text">
    </form>
@endsection
