@foreach (['danger', 'warning', 'success', 'info'] as $msg)
  @if(session()->has($msg))
    <div class="container mx-auto lg:px-20 lg:pb-4">
      <p class="alert-{{ $msg }} rounded-md">
        {{ session()->get($msg) }}
      </p>
    </div>
  @endif
@endforeach
