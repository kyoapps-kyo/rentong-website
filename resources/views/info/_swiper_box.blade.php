<div
x-data="{ setMarginTopByNavbar : () => { $el.style.marginTop = '10px';
  (window.outerWidth > 1023) ? ($el.style.marginTop = document.getElementById('navbar').offsetHeight + 30 + 'px') : '' } }" x-init="setMarginTopByNavbar()"
@load.window="setMarginTopByNavbar()"
@resize.window="(window.outerWidth < 1024) ? ($el.style.marginTop = document.getElementById('navbar').offsetHeight - 100 + 'px' ) : ($el.style.marginTop = document.getElementById('navbar').offsetHeight + 110 + 'px') "
class="lg:container lg:px-20 mx-auto w-auto">
  <div class="mt-8 relative">
    <img class="" src="{{ asset('/images/fmsc.jpg') }}" alt="">
    <div class=" absolute top-0 left-0 w-full hover:bg-white hover:bg-opacity-20"></div>
    <div class="absolute top-1/3 left-1/2 transform -translate-x-1/2">
      <p class="lg:text-4xl bg-black text-white w-min px-4 py-2 ">2021/10/10</p>
    </div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 lg:-translate-y-10">
      <p class="lg:text-5xl bg-red-600 text-white w-max px-4 py-2 md:text-lg">京都御所北侧改装完成的京町家</p>
    </div>
  </div>
</div>
<div class=" w-full bg-gray-100 ">
  <div class=" container mx-auto lg:px-20 lg:pt-14 lg:flex lg:justify-between">
    <div>
      <h2 class=" font-bold text-3xl">NEW PROPERTY</h2>
      <p class=" font-bold text-lg">/ 新着物件</p>
    </div>
    <div class="flex items-center pr-4 w-32 justify-between">
      <button id="btnPrev" class=" rounded-full bg-white h-10 w-10 border border-gray-500 flex items-center justify-center hover:border-opacity-20 shadow">
        <x-iconpark-left-o class=" h-8 text-gray-500 hover:text-opacity-20"/>
      </button>
      <button id="btnNext" class=" rounded-full bg-white h-10 w-10 border border-gray-500 flex items-center justify-center hover:border-opacity-20 shadow">
        <x-iconpark-right-o class=" h-8 text-gray-500 hover:text-opacity-20"/>
      </button>
    </div>
  </div>


  <div class="py-4">
    <div class="w-full mx-auto">
      <div class=" overflow-hidden sm:rounded-lg">
        <div class="p-6 border-b border-gray-200">
          <!-- Slider main container -->
          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide bg-red-400">
                1
              </div>
              <div class="swiper-slide bg-yellow-500">
                2
              </div>
              <div class="swiper-slide bg-blue-700">
                3
              </div>
              <div class="swiper-slide bg-indigo-500">
                4
              </div>
              <div class="swiper-slide bg-green-500">
                5
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ mix('js/swiper.js') }}"></script>


</div>
