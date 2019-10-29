@extends('layouts.app')

@section('title','Services')

@section('content')
    <h1 class="text-center">Services</h1>
    <p class="text-primary">This is the services page.</p>
    <p>Service with id = {{$id}} and cost = {{$cost}}</p>


    @if(count($services)>0)
        <h2>Our services</h2>
        <ul class="list-group">
            @foreach ($services as $item)
                <li class="list-group-item">{{$item}}</li>
            @endforeach
        </ul>
    @endif
    
@endsection
    
