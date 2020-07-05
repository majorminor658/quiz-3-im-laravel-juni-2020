@extends('layouts.master')

@section('title')
    Artikel
@endsection

@section('container')
    
    <h1>Daftar artikel</h1>

    <a href="/artikel/create"><button>+ Tambah Artikel</button></a>
    

    <ul style="list-style:none"> 
        @foreach ($data as $a)

        <li>
        
        <a href="/artikel/{{$a->id}}">
    <div class="card">

            <small>{{$a->tag}}</small>
            <h3>
                {{$a->judul}}
            </h3>
            <h4>
                {{$a->isi}}
            </h4>
            @foreach ($user as $u)
                @if ($u->id == $a->user_id)
            <p>{{$u->name}}</p>
                    
                @endif
            @endforeach
        </li>
    </div>

        </a>
        @endforeach
    </ul>
@endsection