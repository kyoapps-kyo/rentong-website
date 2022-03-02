<div class=" container mx-auto lg:px-20 lg:pb-20">
  <div class=" grid grid-cols-12">
    <div class=" col-span-3 border-r-2">
      @for( $i = 0; $i < count($history_years); $i++) @if($i==0) <div class="py-4 lg:pl-10 md:pl-1">
        <x-iconpark-calendar-o class=" md:hidden h-10 w-10 stroke-4 inline-block text-black" />
        <a href="#corporate_history" class="years year-selected lg:ml-10 md:ml-2 inline-block lg:text-2xl md:text-base font-bold align-middle" data-year="year-{{ $history_years[$i] }}">{{ $history_years[$i]}}</a>
    </div>
    @else
    <div class="py-4 lg:pl-10 md:pl-1 opacity-70">
      <x-iconpark-calendar-o class=" md:hidden h-8 w-8 stroke-4 inline-block" />
      <a href="#corporate_history" class="years lg:ml-10 md:ml-2 inline-block lg:text-lg md:text-sm align-middle" data-year="year-{{ $history_years[$i]}}">{{ $history_years[$i]}}</a>
    </div>
    @endif
    @endfor
  </div>


  <div class=" col-span-9 py-4 lg:px-20 md:pl-5 md:pb-10">
    @for( $i = 0; $i < count($history_imgs); $i++ )
    <div id="year-{{ $history_imgs[$i]->year }}" class="year-content-selected">
    <h3 class=" lg:text-3xl md:text-xl font-bold p-2">{{ $history_imgs[$i]->title }}</h3>
    <p class="lg:text-lg md:text-base p-2">{{ $history_imgs[$i]->body }}</p>
      <div class="grid lg:grid-cols-3 lg:gap-10 md:grid-cols-2 md:gap-3">
      @foreach($history_imgs[$i]->imgs as $img)

        <div class=" shadow-xl border-2 border-gray-200 lg:mb-10 md:mb-4">
          <img src="{{ asset('uploads/'.$img) }}" alt="">
        </div>
      @endforeach

      <div id="year-20" class=" hidden">
        <div class=" shadow-xl border-2 border-gray-200 h-96 w-full"></div>
      </div>
    </div>
  </div>
  @endfor
</div>
</div>
</div>
</div>
