<div x-data="{ setMarginTopByNavbar : () => { $el.style.marginTop = '10px';
  (window.outerWidth > 1023) ? ($el.style.marginTop = document.getElementById('navbar').clientHeight + 5 + 'px') : '' } }" x-init="setMarginTopByNavbar()" @load.window="setMarginTopByNavbar()"></div>
<!-- main swiper  -->
<!-- <div class="mt-2 relative lg:container lg:px-20 mx-auto w-auto"> -->
  <div class="swiper main-slider">
    <div class="swiper-wrapper">
      <!-- slide  -->
      <div class="swiper-slide">
        <div class="slide-img zoom "><img src="{{ asset('/img/build.jpg') }}" alt="">
        </div>
        <div id="blackpoint" class=" absolute top-0 left-0 w-full h-full hover:opacity-20 lg:hidden"></div>
        <div class="slide-content">
          <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2">
            <p class="lg:text-4xl bg-black bg-opacity-60 text-white w-min px-4 py-2 font-roboto">2021/10/10</p>
          </div>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 lg:-translate-y-10">
            <p class="lg:text-5xl bg-red-600 bg-opacity-60 text-white w-max px-4 py-2 md:text-lg  font-long-cang">京都御所北侧改装完成的京町家</p>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img translate1"><img src="{{ asset('/img/build.jpg') }}" alt="">
        </div>
        <div id="blackpoint" class=" absolute top-0 left-0 w-full h-full hover:opacity-20 lg:hidden"></div>
        <div class="slide-content">
          <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2">
            <p class="lg:text-4xl bg-black bg-opacity-60 text-white w-min px-4 py-2 font-roboto">2021/11/21</p>
          </div>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 lg:-translate-y-10">
            <p class="lg:text-5xl bg-red-600 bg-opacity-60 text-white w-max px-4 py-2 md:text-lg  font-long-cang">京都岚山新筑高级公寓</p>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="slide-img translate2"><img src="{{ asset('/img/build2.jpg') }}" alt="">
        </div>
        <div id="blackpoint" class=" absolute top-0 left-0 w-full h-full hover:opacity-20 lg:hidden"></div>
        <div class="slide-content">
          <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2">
            <p class="lg:text-4xl bg-black bg-opacity-60 text-white w-min px-4 py-2 font-roboto">2021/12/09</p>
          </div>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 lg:-translate-y-10">
            <p class="lg:text-5xl bg-red-600 bg-opacity-60 text-white w-max px-4 py-2 md:text-lg  font-long-cang">京都伏见稻荷南改装完成的京町家</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </div> -->

<div class=" w-full bg-gray-100 ">
  <div class=" lg:container lg:mx-auto lg:px-20 lg:pt-14 lg:flex lg:justify-between md:pt-6">
    <div>
      <h2 class=" font-bold text-3xl md:text-center">NEW PROPERTY</h2>
      <p class=" font-bold text-lg md:text-center">/ 新着物件</p>
    </div>
    <div class="flex lg:items-center lg:pr-4 lg:w-32 justify-between md:w-full md:px-32 md:mt-4">
      <button id="btnPrev" class=" rounded-full bg-white h-10 w-10 border border-gray-500 flex items-center justify-center hover:border-opacity-20 shadow">
        <x-iconpark-left-o class=" h-8 text-gray-500 hover:text-opacity-20" />
      </button>
      <button id="btnNext" class=" rounded-full bg-white h-10 w-10 border border-gray-500 flex items-center justify-center hover:border-opacity-20 shadow">
        <x-iconpark-right-o class=" h-8 text-gray-500 hover:text-opacity-20" />
      </button>
    </div>
  </div>
  <div class="lg:h-10 md:h-2 w-full"></div>
  <!-- Thumbs slide  -->
  <div class="lg:container lg:px-16 lg:mx-auto md:hidden">
    <div class="swiper thumbs-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide p-4 relative">
          <div class=" shadow bg-gray-50">
            <img class="" src="{{ asset('/img/build.jpg') }}" alt="" />
            <div class=" absolute slide-date transform -translate-y-1/2 bg-red-600 text-white text-lg px-4">2021/10/10</div>
            <div class=" flex justify-between pt-6">
              <h2 class=" font-bold text-lg pl-2 underline"> <a href="#">京都御所北侧改装完成的京町家</a></h2>
              <p class=" font-bold text-lg pr-2">¥2222222</p>
            </div>
            <p class=" text-xs pt-5 px-2 pb-2">こちらの物件は山陰本線の二条駅より徒歩で16分の場所にあるマンションです。南向き物件のため、日当たりがとても良い物件となっております。即入居可物件のため、お急ぎでお家探しをしている方はぜひお問い合わせください！</p>
          </div>
        </div>

        <div class="swiper-slide p-4 relative">
          <div class=" shadow bg-gray-50">
            <img class="" src="{{ asset('/img/build.jpg') }}" alt="" />
            <div class=" absolute slide-date transform -translate-y-1/2 bg-red-600 text-white text-lg px-4">2021/11/21</div>
            <div class=" flex justify-between pt-6">
              <h2 class=" font-bold text-lg pl-2">京都岚山新筑高级公寓</h2>
              <p class=" font-bold text-lg pr-2">¥2222222</p>
            </div>
            <p class=" text-xs pt-5 px-2 pb-2">こちらの物件は山陰本線の二条駅より徒歩で16分の場所にあるマンションです。南向き物件のため、日当たりがとても良い物件となっております。即入居可物件のため、お急ぎでお家探しをしている方はぜひお問い合わせください！</p>
          </div>
        </div>

        <div class="swiper-slide p-4 relative">
          <div class=" shadow bg-gray-50">
            <img class="" src="{{ asset('/img/build2.jpg') }}" alt="" />
            <div class=" absolute slide-date transform -translate-y-1/2 bg-red-600 text-white text-lg px-4">2021/12/09</div>
            <div class=" flex justify-between pt-6">
              <h2 class=" font-bold text-lg pl-2">京都伏见稻荷南改装完成的京町家</h2>
              <p class=" font-bold text-lg pr-2">¥2222222</p>
            </div>
            <p class=" text-xs pt-5 px-2 pb-2">こちらの物件は山陰本線の二条駅より徒歩で16分の場所にあるマンションです。南向き物件のため、日当たりがとても良い物件となっております。即入居可物件のため、お急ぎでお家探しをしている方はぜひお問い合わせください！</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="lg:h-12 w-full md:h-4"></div>

</div>
