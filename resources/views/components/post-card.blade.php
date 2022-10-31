@props(['post'])
<!-- card1 -->
<div class="max-w-md overflow-hidden bg-white rounded-lg shadow-lg mb-14 dark:bg-gray-800 md:mx-4 lg:mb-0">
  <a class="" href="http://">
    @if ($post->thumbnail)
      <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="rounded-xl">
    @else
      <img class="object-cover object-center w-full h-56"
        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=870&q=80"
        alt="">
      {{-- <img src="/images/illustration-3.png" alt="Blog Post illustration" class="rounded-xl"> --}}
    @endif
  </a>

  <div class="px-8 pt-5">
    <p class="text-base font-medium tracking-wide text-indigo-500">
      {{ $post->category->name }}
    </p>
    <h2 class="py-1 text-xl font-semibold text-gray-800">
      {{ $post->title }}
    </h2>
    <p class="py-2 text-base text-gray-600 line-clamp-3">
      {{ $post->excerpt }}
    </p>
    <a href="" class="flex items-center -mt-1 text-sm text-indigo-500">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
      </svg>
    </a>
    <!-- card footer -->
    <div class="flex justify-start mt-5 mb-4 flex-nowrap">
      <a href="">
        <img class="object-cover object-center w-12 h-12 rounded-full"
          src="https://images.unsplash.com/photo-1600481176431-47ad2ab2745d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80"
          alt="">
      </a>
      <div class="self-center pl-4">
        <a href="" class="text-sm font-semibold tracking-wide text-gray-700">
          {{ $post->author->username }}
        </a>
        <p class="text-sm text-gray-500">
          <span>
            {{ $post->created_at->diffForHumans() }}
          </span>
          .<span>6 min read</span>
        </p>
      </div>
    </div>
  </div>

</div>
<!-- card1 end -->
