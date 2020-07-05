@extends('layouts.master');

@section('title')
    ERD
@endsection
@section('container')
    <a href="/artikel"><button>List Artikel</button></a>
    <a href="/artikel/create"><button>+ Tambah Artikel</button></a>

    <img src="{{asset('/images/ERD-QUIZ.png')}}"> 
@endsection