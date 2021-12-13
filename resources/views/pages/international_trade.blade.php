@extends('layouts.app')
@section('title', '关于仁通')

@section('content')
<div x-data="{ setMarginTopByNavbar : () => { $el.style.marginTop = '10px';
  (window.outerWidth > 1023) ? ($el.style.marginTop = document.getElementById('navbar').clientHeight + 10 + 'px') : '' } }" x-init="setMarginTopByNavbar()" @load.window="setMarginTopByNavbar()"></div>
<div class=" container mx-auto lg:px-20 lg:pt-10 lg:pb-20">
  <div class="shadow-2xl border-2 border-gray-200 p-10">
    <h1 class=" text-3xl font-bold py-5">石灯籠 即売会 ＠寧波</h1>
    <iframe width="100%" height="600px" src="https://www.youtube.com/embed/RRTjFpVfSsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</div>


@stop
