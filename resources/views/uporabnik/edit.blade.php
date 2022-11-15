@extends('layouts.main')



@section('content')

<form action="{{route('uporabnik.update', [$uporabnik->id])}}" method="POST" class="form">
    @csrf
    @method('PUT')
    <input type="text" value="{{$uporabnik->uporabnik}}" name="uporabnik">
    <input type="text" value="{{$uporabnik->ime}}" name="ime">
    <input type="text" value="{{$uporabnik->priimek}}" name="priimek">
    <input type="text" value="{{$uporabnik->naslov}}" name="naslov">
    <input type="text" value="{{$uporabnik->starost}}" name="starost">
    <input type="submit" value="Posodobi">
</form>



@endsection
