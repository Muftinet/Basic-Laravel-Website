@extends('layouts.app')

@section('content')
    <h1>Home</h1>   
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ea laboriosam repellendus odit reiciendis at, maiores tempora deserunt modi a, 
        ab dolor quaerat quam laudantium voluptatibus minus, 
        rerum ratione magnam dignissimos.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ea laboriosam repellendus odit reiciendis at, maiores tempora deserunt modi a, 
        ab dolor quaerat quam laudantium voluptatibus minus, 
        rerum ratione magnam dignissimos.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ea laboriosam repellendus odit reiciendis at, maiores tempora deserunt modi a, 
        ab dolor quaerat quam laudantium voluptatibus minus, 
        rerum ratione magnam dignissimos.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
