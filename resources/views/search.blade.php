<x-layout>
  <main class="container mx-auto">

    <!-- Category header -->
    <section class="border-b-2 border-gray-200 px-8 py-10">
      <p class="pl-2 text-sm capitalize text-gray-600">Search result</p>
      <div class="flex items-center">
        <h2 class="text-4xl font-medium tracking-wider text-gray-700 md:text-5xl">Dictionary</h2>
        <p class="pl-2 pt-2 text-base italic text-gray-600">(45 Results)</p>
      </div>

    </section>
    <!-- Category header end -->
    <!-- Results section -->
    <section class="px-2 py-10">
      <!-- posts -->
      <div class="grid grid-cols-1 justify-items-center md:grid-cols-2 lg:grid-cols-3">
        <x-post-card />
        <x-post-card />
        <x-post-card />
      </div>
      <!-- posts end -->
    </section>
    <!-- Results section end -->
  </main>
</x-layout>
