@props(['categories'])
<!-- main section posts -->
<section class="px-8 py-20">
  <!-- title -->
  <div class="">
    <h1 class="text-4xl font-semibold leading-relaxed tracking-wider text-center text-gray-600">
      Latest posts...
    </h1>
  </div>
  <!-- title end -->
  @foreach ($categories as $category)
    <x-category-posts :category="$category" />
  @endforeach
</section>
<!-- main section posts end -->
