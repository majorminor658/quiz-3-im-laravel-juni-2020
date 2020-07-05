@extends('layouts.master')

@section('title')
    form 
@endsection

@section('style')
    <style>
        
    </style>
@endsection
@section('container')
<div id="container">

    <form action="/artikel" method="POST">
        @csrf
        {{-- <input type="hidden" name="user_id" value="{{Auth::id()}}"> --}}
        <input type="hidden" name="user_id" value="1">
        <input type="text" name="judul" placeholder="Judul">
        <input type="text" name="isi" placeholder="isi Pertanyaan">
        <input type="text" name="tag" placeholder="tag">
        <button type="submit">Submit</button>
    </form>

</div>

@endsection