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
<div class="bg_top lg:h-52 md:h-64">
</div>
<div class=" container mx-auto lg:px-20 py-20">
  <h1 class=" text-3xl text-center">Corporate Ren Tong</h1>
  <p class=" lg:pt-2 text-xl text-center">/ 株式会社仁通</p>
  <div class=" lg:flex lg:justify-between pt-10">
    <div class=" text-center flex-none lg:mr-32 p-1 rounded-r-xl border-2 border-red-500">
      <div class=" relative bg-red-600 bg-opacity-80 py-4 w-60 rounded-r-xl">
        <h2 id="en_info" class=" text-xl">Company Profile</h2>
        <p id="cn_info" class=" text-base">/公司信息</p>
        <span class=" animate-ping absolute w-5 h-5 -right-2 -top-2 rounded-full bg-red-600"></span>
      </div>
    </div>
    <ul id="info_nav" class="lg:flex lg:justify-between flex-1 py-6 text-lg">
      <li><button class="infoSelected border border-black shadow-xl py-2 px-8 rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Company Profile">公司信息</button></li>
      <li><button class=" py-2 px-8 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Message">社长致辞</button></li>
      <li><button class=" py-2 px-8 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Corporate History">公司历程</button></li>
      <li><button class=" py-2 px-8 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Staff Introduction">员工介绍</button></li>
      <li><button class=" py-2 px-8 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Recruit">招聘信息</button></li>
      <li><button class=" py-2 px-8 border border-black shadow-xl rounded-xl focus:bg-black focus:text-white animate__animated" data-en="Mail">邮件咨询</button></li>
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
<div id="staff_introduction" class="hidden">
  @include('pages.container.about.staff_introduction')
</div>
<div id="recruit" class="hidden">
  @include('pages.container.about.recruit')
</div>
<div id="mail" class="hidden">
  @include('pages.container.about.mail')
</div>

@stop
