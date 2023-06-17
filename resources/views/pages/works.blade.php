@extends('layout')
@section('title','芝多たいち | works')
@include('header')
@section('content')
<ul class="tab">
    <li><a href="#MIX">MIX</a></li>
    <li><a href="#compose">COMPOSE</a></li>
    <li><a href="#stream">STREAM</a></li>
</ul>
<div id="MIX" class="area">
    <div class="headline">
        <ul>
            <li><iframe width="320" height="180" src="https://www.youtube.com/embed/uNFJ2stsuUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
            <li><iframe width="320" height="180" src="https://www.youtube.com/embed/CBb46jJb22Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
        </ul>
    </div>
</div>
@extends('footer')