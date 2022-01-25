<div x-data="{ open: false , atTop:true ,isMdScreen:true }">
  <header id="navbar" class=" border-t-2 border-red-500 fixed top-0 z-10 bg-white w-full shadow transition-height duration-1000 ease-in-out" @scroll.window="atTop= (window.pageYOffset>100) ? false:true" @load.window="isMdScreen= (window.outerWidth < 1024) ? true:false" @resize.window="isMdScreen=(window.outerWidth < 1024) ? true:false" :class=" (atTop===true && isMdScreen===false) ||(isMdScreen===true && open===false)? 'lg:h-36 md:h-10' : 'lg:h-10 md:h-60' ">
    <div class="container mx-auto m-1 xl:px-20 md:px-4 md:relative">
      <div class="w-full lg:w-auto flex justify-between md:hidden">
        <div class="text-sm pt-1">
          <a href=" {{ route('pages.root') }}" class="hover:text-gray-400	text-gray-600 mr-4">
            {{ __('subTitle')}}
          </a>
        </div>
        <div class="animate__animated animate__pulse">
          <span class=" mr-5">
            <x-iconpark-phonetelephone class=" h-6 w-6 stroke-4 inline animate__animated animate__bounce" />
            <span class=" mr-2 font-bold text-red-600 text-lg">{{ __('tel')}}</span>
            <span class=" text-xs">{{ __('workTime')}}</span>
          </span>
          <div class="relative w-max inline-block">
            <button @click="open = !open" @click.away="open = false" class="mr-5 font-bold text-sm hover:text-green-500">
              <x-iconpark-wechat class=" h-5 w-5 stroke-4 inline animate__animated animate__bounce animate__delay-1s" />
              Rentong
            </button>
            <div class=" absolute bg-white w-36 h-44 flex items-center justify-center rounded-lg shadow-lg p-2 animate__animated animate__backInRight z-50" x-show="open" style="display: none;" :class=" atTop ? 'top-28' : 'top-14' ">
              <img class="z-50" src="{{ asset('/images/rentongQR.jpeg') }}" alt="">
            </div>
          </div>

          <a href="{{ route('pages.about.to.email') }}" id="sendEmailBtn" class=" rounded-full py-1 px-3 border border-black w-max bg-black text-white text-sm hover:bg-transparent hover:text-black mr-2 ">
            <x-iconpark-sendemail class=" h-5 w-5 stroke-4 inline animate__animated animate__wobble animate__delay-2s" />
            {{ __('sendEmail')}}
          </a>
          @if (!session()->has('locale'))
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            CN
          </a>
          @elseif(session('locale') == 'ja')
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            CN
          </a>
          @elseif(session('locale') == 'zh')
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            CN
          </a>
          @endif

        </div>
      </div>
      <div class="w-full lg:w-auto lg:mt-5 lg:flex lg:justify-between lg:mb-4 md:hidden" :class=" atTop ?  'animate__animated animate__backInDown' : 'animate__animated animate__backOutUp' ">
        <div class="">
          <img class="lg:h-16 lg:mr-8 md:h-6 md:mr-4 inline" src="{{ asset('/images/rentong-logo.png') }}" alt="">
          <a href="{{ route('pages.root') }}" class=" font-bold lg:text-4xl md:text-lg hover:text-red-500 align-middle">
            {{ __('companyName')}}
          </a>
        </div>
        <nav class=" h-16 flex items-center z-20">
          <div class=" pt-3">
            <a href="#" class=" font-bold text-xl hover:text-red-500">
              {{ __('sellBuy')}}
            </a>
            <span class=" font-bold text-xl mx-6 ">/</span>
            <a href="" class=" font-bold text-xl hover:text-green-500">
              {{ __('rent')}}
            </a>
            <span class=" font-bold text-xl mx-6 ">/</span>
            <a href="" class=" font-bold text-xl hover:text-blue-500">
              {{ __('projects')}}
            </a>
            <span class=" font-bold text-xl mx-6">/</span>
            <a href="" class=" font-bold text-xl hover:text-yellow-500">
              {{ __('owner')}}
            </a>
            <span class=" font-bold text-xl mx-6">/</span>
            <a href="{{ route('pages.international_trade') }}" class=" font-bold text-xl hover:text-yellow-500">
              {{ __('trade')}}
            </a>
            <span class=" font-bold text-xl mx-6">/</span>
            <a href="{{ route('pages.about') }}" class=" font-bold text-xl hover:text-gray-500">
              {{ __('about')}}
            </a>
          </div>
        </nav>
      </div>
      <div class=" lg:hidden md:absolute md:top-0 md:left-0 md:pl-4 md:w-full">
        <img class="lg:h-16 lg:mr-8 md:h-6 md:mr-4 inline" src="{{ asset('/images/rentong-logo.png') }}" alt="">
        <a href="#" class=" font-bold lg:text-4xl md:text-lg hover:text-red-500 align-middle">
          {{ __('companyName')}}
        </a>
      </div>
      <div class=" lg:hidden md:absolute md:top-0 md:right-0 md:pr-4">
        <button @click="open = true" @click.away="open = false" x-show="!open">
          <x-iconpark-hamburgerbutton class=" h-6 w-6 stroke-4" />
        </button>
        <button @click="open = false" @click.away="open = false">
          <x-iconpark-closesmall class=" h-6 w-6 stroke-4 mr-1" x-show="open" />
        </button>
      </div>
      <nav class="lg:hidden  md:pt-10 md:flex md:flex-col md:text-right md:w-full" :class=" open ?  'md:visible animate__animated animate__backInDown' : 'md:invisible' ">
        <ul>
          <li class="  px-4 mt-2"><a href="#" class=" font-bold text-xl hover:text-red-500">{{ __('sellBuy')}}</a></li>
          <li class="  px-4 mt-2"><a href="" class=" font-bold text-xl hover:text-green-500">{{ __('rent')}}</a></li>
          <li class="  px-4 mt-2"><a href="" class=" font-bold text-xl hover:text-blue-500">{{ __('projects')}}</a></li>
          <li class="  px-4 mt-2"><a href="" class=" font-bold text-xl hover:text-yellow-500">{{ __('owner')}}</a></li>
          <li class="  px-4 mt-2"><a href="{{ route('pages.international_trade') }}" class=" font-bold text-xl hover:text-yellow-500">{{ __('trade')}}</a></li>
          <li class="  px-4 mt-2"><a href="{{ route('pages.about') }}" class=" font-bold text-xl hover:text-gray-500">{{ __('about')}}</a></li>
          <li class="px-4 mt-2">
          @if (!session()->has('locale'))
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            CN
          </a>
          @elseif(session('locale') == 'ja')
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            CN
          </a>
          @elseif(session('locale') == 'zh')
          <a href="{{ route('locale','ja')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-gray-400 text-gray-400 font-bold text-sm hover:bg-black hover:text-white" title="语言切换">
            JP
          </a>
          <a href="{{ route('locale','zh')}}" class=" inline-block w-6 h-6 text-center rounded-full border border-black bg-black text-white font-bold text-sm hover:bg-transparent hover:text-black mr-1 animate__animated animate__heartBeat animate__delay-3s" title="语言切换">
            CN
          </a>
          @endif
          </li>
        </ul>
      </nav>
    </div>
  </header>
</div>
