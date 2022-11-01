<x-layout>

  @push('title')
    | Home
  @endpush

  <x-hero />
  <x-post-feature />
  
  @if($categories)
  <x-posts-section :categories="$categories" />
  @else
  <h1 class="text-lg text-center text-gray-800">No Category available!</h1>

  @endif

  <x-newsletter />


</x-layout>
