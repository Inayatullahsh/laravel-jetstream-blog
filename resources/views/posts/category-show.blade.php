<x-layout>
  <main class="container mx-auto">

    <!-- Category header -->
    <section class="border-b-2 border-gray-200 px-8 py-10">
      <p class="pl-2 text-sm text-gray-600">category</p>
      <div class="flex items-center">
        <h2 class="text-4xl font-medium tracking-wider text-gray-700 md:text-5xl">Tuples</h2>
        <p class="pl-2 pt-2 text-base italic text-gray-600">(45 Results)</p>
      </div>

    </section>
    <!-- Category header end -->
    <!-- Results section -->
    <section class="px-2 py-10">
      <!-- articles -->
      <div class="grid grid-cols-1 justify-items-center md:grid-cols-2 lg:grid-cols-3">

        <x-post-card />
        <x-post-card />
        <x-post-card />
        <!-- Navigation -->
        <div class="flex items-center justify-center md:justify-end">
          <!--<div>
            <p class="text-sm text-gray-700">
              Showing
              <span class="font-medium">1</span>
              to
              <span class="font-medium">10</span>
              of
              <span class="font-medium">97</span>
              results
            </p>
          </div> -->
          <div class="flex">
            <a href="#"
              class="mx-1 flex cursor-not-allowed items-center rounded-md bg-white px-4 py-2 text-gray-500 shadow-sm dark:bg-gray-800 dark:text-gray-600">
              previous
            </a>

            <a href="#"
              class="mx-1 flex transform items-center rounded-md bg-white px-4 py-2 text-gray-700 shadow-sm transition-colors duration-200 hover:bg-indigo-600 hover:text-white dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-indigo-500 dark:hover:text-gray-200">
              1
            </a>

            <a href="#"
              class="mx-1 flex transform items-center rounded-md bg-white px-4 py-2 text-gray-700 shadow-sm transition-colors duration-200 hover:bg-indigo-600 hover:text-white dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-indigo-500 dark:hover:text-gray-200">
              2
            </a>

            <a href="#"
              class="mx-1 flex transform items-center rounded-md bg-white px-4 py-2 text-gray-700 shadow-sm transition-colors duration-200 hover:bg-indigo-600 hover:text-white dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-indigo-500 dark:hover:text-gray-200">
              3
            </a>

            <a href="#"
              class="mx-1 flex transform items-center rounded-md bg-white px-4 py-2 text-gray-700 shadow-sm transition-colors duration-200 hover:bg-indigo-600 hover:text-white dark:bg-gray-800 dark:text-gray-200 dark:hover:bg-indigo-500 dark:hover:text-gray-200">
              Next
            </a>
          </div>
        </div>
        <!-- Navigation end-->
    </section>
    <!-- Results section end -->
  </main>

</x-layout>
