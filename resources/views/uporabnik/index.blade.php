@extends('layouts.main')



@section('content')
    <a href="{{ route('uporabnik.create') }}">Create</a>
    
    <hr>

    <table>
        <thead>
            <tr>
                <th>Uporabnik</th>
                <th>Ime</th>
                <th>Priimek</th>
                <th>Naslov</th>
                <th>Starost</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach($uporabnik as $u)
            <tr>
                <td>{{ $u->uporabnik }}</td>
                <td>{{ $u->ime }}</td>
                <td>{{ $u->priimek}}</td>
                <td>{{ $u->naslov }}</td>
                <td>{{ $u->starost }}</td>
                <td>
                    <a href="{{route('uporabnik.edit', [$u->id] ) }}">Uredi</a>
                    <form action="{{ route('uporabnik.destroy', [$u->id] ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Izbriši">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

