@extends('layout')
@section('title', 'inicio')
@section('content')


    <h1>Home</h1> 
    
    
    <form action="{{route('m.store')}}" method="POST">

    @csrf
    <input name="name" placeholder="Nombre ... "><br>
    
    <button>Enviar</button>
</form>




@endsection

