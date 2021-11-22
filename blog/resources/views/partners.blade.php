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
            <th>#name</th>
            <th>#inn</th>
            <th>#action</th>
        </tr>
        </thead>
        <tbody>
            @if (!empty($Partner) && $Partner->count())
                @foreach ($Partner as $el)
                    <tr>
                        <td>{{ $el->id }}</td>
                        <td>{{ $el->name }}</td>
                        <td>{{ $el->inn }}</td>
                        <td><a href="confirmation/{{ $el->id }}">Удалить</a></td>
                        <td><a href="partner/edit-form/{{ $el->id }}">Изменить</a></td>
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
