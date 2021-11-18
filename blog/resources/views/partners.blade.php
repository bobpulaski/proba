@extends('templates.main')

@php
    $title = 'Контрагенты';
@endphp

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1>Контрагенты</h1>

    <table class="table">
        <thead>
        <tr>
            <th>#ID</th>
            <th>#Name</th>
            <th>#inn</th>
            <th>#Action</th>
        </tr>
        </thead>
        <tbody>
            @if (!empty($Partner) && $Partner->count())
                @foreach ($Partner as $el)
                    <tr>
                        <td>{{ $el->id }}</td>
                        <td>{{ $el->name }}</td>
                        <td>{{ $el->inn }}</td>
                        <td><x-button type="danger" message="Удалить"/></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="10">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>

    {{ $Partner->links() }} {{--Pagination--}}

@endsection
