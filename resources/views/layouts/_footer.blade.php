<footer class=" bottom-0 left-0 w-full h-auto bg-black bg-opacity-90 ">
  <div class="container lg:px-20 mx-auto lg:p-2  flex lg:justify-between md:justify-center md:flex-col text-gray-300 ">
    <div class=" pt-10 md:text-center">
      <p class=" font-bold lg:text-2xl md:text-3xl"><img class="lg:h-7 lg:mr-3 lg:-mt-1 md:-mt-2 md:h-9 md:mr-1 inline" src="{{ asset('/images/rentong-logo.png') }}" alt="">{{ __('companyName')}}</p>
      <div
        class=" mt-8 "
        x-data="{ tab: 'kyoto' }"
        >
        <div class="flex w-full md:justify-center">
            <button
                :class="{ 'active font-bold bg-yellow-400 text-gray-300 bg-opacity-90': tab === 'kyoto' }"
                class=" p-3 focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300 rounded-t-sm"
                @click="tab = 'kyoto'"
            >
            {{ __('kyoto')}}
            </button>
            <button
                :class="{ 'active font-bold bg-yellow-400 bg-opacity-90 text-gray-300 ': tab === 'fu' }"
                class="p-3 focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300  rounded-t-sm"
                @click="tab = 'fu'"
            >
            {{ __('fushimi')}}
            </button>
            <button
                :class="{ 'active font-bold bg-yellow-400 bg-opacity-90 text-gray-300 ': tab === 'osaka' }"
                class="p-3 focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300  rounded-t-sm"
                @click="tab = 'osaka'"
            >
            {{ __('osaka')}}
            </button>
        </div>

        <div class=" bg-white bg-opacity-10 text-indigo-100 p-3 rounded-b-sm">
            <div x-show="tab === 'kyoto'">
                <p>{{ __('addr')}}：日本京都市南区西九条池ノ内町18-1</p>
                <div class=" lg:flex lg:justify-between">
                <p>{{ __('kyotoTel')}}</p>
                <p class=" lg:ml-4">{{ __('kyotoFax')}}</p>
                </div>
            </div>
            <div x-show="tab === 'fu'">
                <p>{{ __('addr')}}：日本京都市伏見区深草下川原町 130-4 華信ビル1F</p>
                <div class=" lg:flex lg:justify-between">
                <p>{{ __('fushimiTel')}}</p>
                </div>
            </div>
            <div x-show="tab === 'osaka'">
                <p>{{ __('addr')}}：日本大阪市西区南堀江 1-1-16 OTK四ツ橋ビル7F</p>
                <div class=" lg:flex lg:justify-between">
                <p>{{ __('osakaTel')}}</p>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col md:pt-4 lg:pt-24 md:mx-auto">
        <div class=" font-bold lg:text-lg md:text-xs">
        <a href="#" class="  hover:text-red-500">
        {{ __('sellBuy')}}
        </a>
        <span class=" lg:mx-6 md:mx-2">/</span>
        <a href="" class=" hover:text-green-500">
        {{ __('rent')}}
        </a>
        <span class=" lg:mx-6 md:mx-2">/</span>
        <a href="" class=" hover:text-blue-500">
        {{ __('projects')}}
        </a>
        <span class=" lg:mx-6 md:mx-2">/</span>
        <a href="" class="hover:text-yellow-500">
        {{ __('owner')}}
        </a>
        <span class=" lg:mx-6 md:mx-2">/</span>
        <a href="{{ route('pages.international_trade') }}" class="hover:text-yellow-500">
        {{ __('trade')}}
        </a>
        <span class=" lg:mx-6 md:mx-2">/</span>
        <a href="{{ route('pages.about') }}" class=" hover:text-gray-400">
        {{ __('about')}}
        </a>
        </div>
        <div class=" flex lg:justify-end md:justify-center mt-8">
          <a href="https://www.instagram.com/rentong_corporation/" title="instagram" target="_blank" class=" rounded-full h-10 w-10 border border-purple-300 flex items-center justify-center">
          <x-iconpark-instagram-o class=" inline-block lg:h-8 text-purple-300"/>
          </a>
          <div class="px-5"></div>
          <a href="https://twitter.com/rentongcorp" title="twitter" target="_blank" class=" rounded-full h-10 w-10 border border-blue-300 flex items-center justify-center">
          <x-iconpark-twitter-o class="  inline-block lg:h-8 text-blue-300"/>
          </a>
          <div class="px-5"></div>
          <a href="" title="weixin" target="_blank" class=" rounded-full h-10 w-10 border border-green-300 flex items-center justify-center">
          <x-iconpark-wechat-o class="  inline-block h-8 text-green-300"/>
          </a>
          <div class="px-5"></div>
          <a href="https://weibo.com/1466979415?refer_flag=1001030103_" title="weibo" target="_blank" class=" rounded-full h-10 w-10 border border-red-300 flex items-center justify-center">
          <x-iconpark-weibo-o class="  inline-block h-8 text-red-300"/>
          </a>
        </div>
    </div>
  </div>
  <div class="container lg:px-20 mx-auto lg:pt-4 md:px-6 flex lg:justify-between lg:mt-6 md:mt-5 md:justify-center border-t border-gray-400 border-opacity-50">
    <p class=" lg:text-sm md:text-xs text-gray-400 text-opacity-70">© RENTONG all rights reserved (2021~)</p>
    <p class=" lg:text-sm md:text-xs text-gray-400 text-opacity-60 pb-4">BY <a class="underline font-bold" href="https://blog.kyoapps.com">KYO</a> CODE&DESIGN</p>
  </div>

</footer>
