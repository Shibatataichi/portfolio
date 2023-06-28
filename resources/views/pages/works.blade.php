@extends('layout')
@include('header')
@section('title','芝多たいち | works')
@section('content')
<div class="tab-panel">
    <ul class="tab">
        <li><a href="#MIX">MIX</a></li>
        <li><a href="#compose">COMPOSE</a></li>
        <li><a href="#stream">STREAM</a></li>
    </ul>

    <div id="MIX" class="area">
        <div class="headline">
            <ul>
                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/uNFJ2stsuUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>

                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/CBb46jJb22Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>

            </ul>
        </div>
    </div>

    <div id="compose" class="area">
        <div class="headline">
            <ul>
                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/1mW0Tp2HhkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>

                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/MHdC95zFa9Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>

                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/O8bUM2j1AXU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>

                <li class="contents"><iframe width="320" height="180" src="https://www.youtube.com/embed/D6Qt6sj_16k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></li>
            </ul>
        </div>
    </div>
</div>
@include('footer')
@endsection