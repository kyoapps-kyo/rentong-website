@extends('layouts.app')
@section('title', 'information')

@section('content')

<div x-data="{ setMarginTopByNavbar : () => { $el.style.marginTop = '10px';
  (window.outerWidth > 1023) ? ($el.style.marginTop = document.getElementById('navbar').clientHeight + 10 + 'px') : '' } }" x-init="setMarginTopByNavbar()" @load.window="setMarginTopByNavbar()"></div>
@include('shared._messages')
@if (count($errors) > 0)
<div class=" container mx-auto lg:px-20 lg:pb-4">
  <div class="py-1 px-4 bg-red-400 rounded-lg">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif

<div class=" container mx-auto lg:px-20 lg:py-20  md:pt-1 md:px-2 h-full">
<div class="font-roboto flex justify-center items-center h-80 text-3xl font-bold text-gray-700">{{ __('webinfo')}}</div>
</div>

@stop
