@props(['category'])
<!-- category-1 posts -->
<section class="px-2 py-10">
  <div class="flex justify-between pb-1 border-b-2">
    <h4 class="text-lg text-gray-500">
      {{ $category->name }}
    </h4>
    <a href="" class="flex items-center text-lg text-indigo-500">
      Read more
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
      </svg>
    </a>
  </div>
  <div class="grid grid-cols-1 gap-5 py-10 justify-items-center md:grid-cols-2 lg:grid-cols-3">
    @foreach ($category->posts as $post)

      <x-post-card :post="$post" />
    @endforeach
  </div>
</section>
<!-- category-1 posts end -->
