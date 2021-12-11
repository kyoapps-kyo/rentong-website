@extends('layouts.app')
@section('title', '首页')

@section('content')
@include('pages.container.root._swiper_box')
@include('pages.container.root._special_feature')

<div class="property-twitter lg:mt-20 lg:pb-28 md:mt-6 md:pb-20">
  <div class=" lg:container lg:px-20 lg:mx-auto flex md:flex-wrap">
    <div class="lg:flex-grow">
      @include('pages.container.root._property_list')
    </div>
    <div class=" lg:ml-10 lg:flex-none md:w-full">
      @include('pages.container.root._twitter_list')
    </div>
  </div>
</div>

<script src="{{ mix('js/swiper.js') }}"></script>
@stop
