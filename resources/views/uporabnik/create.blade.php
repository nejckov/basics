@extends('layouts.main')


@section('content')

<form action="{{ route('uporabnik.store') }}" method="POST" class="form">
    @csrf
    <div>
        <label for="">Uporabnik</label>
        <input type='text' name="uporabnik">
    </div>

    <input type="text" placeholder="Ime" name="ime">
    <input type="text" placeholder="Priimek" name="priimek">
    <input type="text" placeholder="Naslov" name="naslov">
    <input type="number" placeholder="Starost" name="starost">
    <input type="submit" value="Potrdi">
</form>
@endsection
