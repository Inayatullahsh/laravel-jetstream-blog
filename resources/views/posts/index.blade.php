<x-layout>

  @push('title')
    | Home
  @endpush

  <x-hero />
  <x-post-feature />
  <x-posts-section :categories="$categories" />

  <x-newsletter />


</x-layout>
