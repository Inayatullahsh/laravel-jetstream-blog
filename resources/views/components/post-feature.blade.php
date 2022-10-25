  <!-- Post of the day -->
  <section class="w-full pt-20">
    <div class="mx-auto max-w-4xl px-8">
      <!-- header section -->
      <div class="grid grid-cols-1 md:grid-cols-3">
        <div class="flex justify-start py-4 pl-8 pr-4 md:col-span-1 md:justify-center">
          <a href="" class="">
            <div
              class="relative h-44 w-48 origin-bottom-left -rotate-6 transform drop-shadow-2xl filter transition duration-300 hover:rotate-0 hover:drop-shadow-none">
              <img class="rounded-2xl border-8 border-indigo-500 object-cover object-center"
                src="https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/951980c1-f36a-4188-8dea-f9c72806083b/mariana-macedo-200x200.jpg"
                alt="">
            </div>
          </a>
        </div>
        @php
          $post = App\Models\Post::find(1);
          $category = App\Models\Category::find(1);
        @endphp
        <div class="mt-6 px-4 md:col-span-2">
          <p class="leading-normal">
            <a href="" class="text-base font-semibold text-indigo-600 underline">
              Mariana Macedo
            </a>
            <span class="pl-1 italic text-gray-500">wrote</span>
          </p>
          <a href="{{ route('post-show', $post) }}"
            class="mt-3 text-3xl font-semibold leading-snug text-gray-700 md:text-4xl">
            Eye-Tracking in Mobile UX Research
          </a>
          <p class="pt-3">
            <span class="font-serif text-sm font-medium text-gray-600">
              OCT 27, 2021
            </span>
            <span class="text-xs text-gray-500">in</span>
            <a href="{{ route('category-show', $category) }}"
              class="pr-2 text-base font-medium text-gray-600 underline">
              HTML5,
            </a>

            <a href="" class="pr-2 text-base font-medium text-gray-600 underline">
              CSS3,
            </a>
            <a href="" class="pr-2 text-base font-medium text-gray-600 underline">
              JavaScript
            </a>
          </p>
        </div>
      </div>
      <!-- header section end -->
      <!-- description section -->
      <div class="flex flex-col">
        <p class="line-clamp-6 md:line-clamp-3 py-8 text-base leading-relaxed text-gray-700">
          Thnaks to technology, eye-tracking has become more accessible to UX research as it allows researchers to
          get insights about user's visual attention. This post explores the latest trends in the eye tracking
          market and how the methodology can be included in the UX researcher's toolbox.
        </p>
        <a href="" class="text-base font-medium text-indigo-700 underline">
          Continue reading↬
        </a>
      </div>
      <!-- description section end -->


    </div>
  </section>
  <!-- post of the day end-->
