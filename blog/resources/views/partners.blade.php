@extends('templates.main')

@php
    $title = 'Контрагенты';
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1>Контрагенты</h1>

    @foreach ($data as $el)
        <ul class="aler alert-info">
            <li>{{ $el->id }} | {{ $el->name }} | {{ $el->inn }}</li>
                <br>
        </ul>
    @endforeach

@endsection
