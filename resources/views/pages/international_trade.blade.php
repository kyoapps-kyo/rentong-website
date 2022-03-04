@extends('layouts.app')
@section('title', '貿易事業 ')

@section('content')
<div x-data="{ setMarginTopByNavbar : () => { $el.style.marginTop = '30px';
  (window.outerWidth > 1023) ? ($el.style.marginTop = document.getElementById('navbar').clientHeight + 10 + 'px') : '' } }" x-init="setMarginTopByNavbar()" @load.window="setMarginTopByNavbar()"></div>
<div class=" container mx-auto lg:px-20 lg:pt-10 lg:pb-20 md:pt-5 md:pb-10">
  @foreach( $trades as $trade )
  <div class="shadow-2xl border-2 border-gray-200 p-10 mb-10">
    <h1 class=" text-3xl font-bold py-5">{{ $trade->title }}</h1>
    <p>{{ $trade->body }}</p>
    <div class="iframe-container">
      <iframe src="{{ $trade->link }}" title="{{ $trade->title }} - youtube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>
  @endforeach
</div>


@stop
