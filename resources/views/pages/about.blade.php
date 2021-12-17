@extends('layouts.app')
@section('title', '关于仁通')

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
<div class="bg_top lg:h-52 md:h-40">
</div>
<div class=" container mx-auto lg:px-20 lg:py-20 md:pt-5">
  <h1 class=" text-3xl text-center md:hidden">Corporate Ren Tong</h1>
  <p class=" lg:pt-2 text-xl text-center md:hidden">/ 株式会社仁通</p>
  <div class=" lg:flex lg:justify-between lg:pt-10 md:pt-2">
    <div class=" text-center flex-none lg:mr-32 p-1 lg:rounded-r-xl md:rounded-tr-xl border-2 border-red-500">
      <div class=" relative bg-red-600 md:w-full bg-opacity-80 py-4 w-60 lg:rounded-r-xl md:rounded-tr-xl">
        <h2 id="en_info" class=" lg:text-xl md:text-2xl">Company Profile</h2>
        <p id="cn_info" class=" lg:text-base md:text-xl">/公司信息</p>
        <span class=" animate-ping absolute w-5 h-5 -right-2 -top-2 rounded-full bg-red-600"></span>
      </div>
    </div>
    <ul id="info_nav" class="flex justify-between lg:flex-1 lg:py-4 lg:text-lg md:flex-wrap">
      <li class="my-2"><button class="infoSelected border border-black shadow-xl py-2 px-6 rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Company Profile">公司信息</button></li>
      <li class="my-2"><button class=" py-2 px-6 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Message">社长致辞</button></li>
      <li class="my-2"><button class=" py-2 px-6 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Corporate History">公司历程</button></li>
      <li class="my-2"><button class=" py-2 px-6 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Corporate Structure">公司结构</button></li>
      <li class="my-2"><button class=" py-2 px-6 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Recruit">招聘信息</button></li>
      <li class="my-2"><button class=" py-2 px-6 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Mail">邮件咨询</button></li>
    </ul>
  </div>
</div>
<div id="company_profile" class="content_visible">
  @include('pages.container.about.company_profile')
</div>
<div id="message" class="hidden">
  @include('pages.container.about.message')
</div>
<div id="corporate_history" class="hidden">
  @include('pages.container.about.corporate_history')
</div>
<div id="corporate_structure" class="hidden">
  @include('pages.container.about.corporate_structure')
</div>
<div id="recruit" class="hidden">
  @include('pages.container.about.recruit')
</div>
<div id="mail" class="hidden">
  @include('pages.container.about.mail')
</div>

@stop
