<h2 class=" font-bold text-3xl md:text-center">PROPERTY LIST</h2>
<p class=" font-bold text-lg md:text-center">/ {{ __('propertyList')}}</p>
<div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-10 lg:mt-11 md:mt-4 md:px-10 md:flex md:flex-wrap">
  @foreach( $topics as $topic)
  <div class="shadow relative lg:pb-5 md:pb-4 md:mb-10 property-list">
    <img class=" w-full" src="{{ asset('uploads/'.$topic->imgs[0]->img) }}" alt="">
    <div class=" absolute slide-date transform lg:-translate-y-full md:-translate-y-1/2 bg-red-600 text-white text-lg px-4">{{ $topic->created_at }}</div>
    <div class=" flex justify-between px-5 pt-10">
      <h2 class=" font-bold text-lg">{{ $topic->title }}</h2>
      <p class=" font-bold text-sm">¥{{ $topic->price->number }}</p>
    </div>
    <p class=" text-xs px-5 pt-5">{{ $topic->body }}</p>
  </div>
  @endforeach
</div>

<div class="lg:mt-14 lg:mb-20 md:mt-5 md:mb-5 flex justify-center">
  <a href="">
    <div class="text-xl inline-block bg-black text-white py-2 px-8 rounded-full shadow hover:shadow-2xl">MORE</div>
  </a>
</div>
