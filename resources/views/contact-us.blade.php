<x-layout>
  <main class="flex justify-center py-14">

    <div class="w-full max-w-2xl overflow-x-hidden px-4 py-5">
      <!-- title -->
      <div class="py-4 text-center">
        <h1 class="text-5xl font-medium tracking-wider text-gray-700">Get in <span class="text-indigo-700">
            touch
          </span>
        </h1>
        <p class="mx-auto mt-6 max-w-md text-lg leading-relaxed tracking-wide text-gray-500">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error distinctio eum tempora placeat nesciunt
          neque.
        </p>
      </div>
      <!-- title end -->
      <!-- form -->
      <div class="px-4 py-5">
        <form action="">
          <div class="mb-6">
            <label for="fullname" class="mb-2 block text-sm font-medium capitalize text-gray-700">Full
              Name</label>
            <input type="text" id="fullname"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 tracking-wider text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              placeholder="JohnDoe">
            <!-- error message -->
            <p class="mt-2 hidden text-sm text-red-600"><span class="font-medium">
                Oops!</span> Username already taken!
            </p>
            <!-- error message end -->
          </div>
          <div class="mb-6">
            <label for="email" class="mb-2 block text-sm font-medium capitalize text-gray-700">email</label>
            <input type="email" id="email"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 tracking-wider text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              placeholder="name@flowbite.com">

            <!-- error message -->
            <p class="mt-2 hidden text-sm text-red-600"><span class="font-medium">
                Oops!</span> Username already taken!
            </p>
            <!-- error message end -->
          </div>
          <div class="mb-6">
            <div class="flex justify-between">
              <label for="phone" class="mb-2 block text-sm font-medium capitalize text-gray-700">
                Phone
              </label>
              <span class="text-sm capitalize text-gray-500">Optional</span>
            </div>
            <input type="tel" id="phone"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 tracking-wider text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              placeholder="+937xxxxxxx">

            <!-- error message -->
            <p class="mt-2 hidden text-sm text-red-600"><span class="font-medium">
                Oops!</span> Username already taken!
            </p>
            <!-- error message end -->
          </div>
          <div class="mb-6">
            <label for="subject" class="mb-2 block text-sm font-medium capitalize text-gray-700">subject</label>
            <input type="text" id="subject"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 tracking-wider text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              placeholder="Thanksgiving Message!">

            <!-- error message -->
            <p class="mt-2 hidden text-sm text-red-600"><span class="font-medium">
                Oops!</span> Username already taken!
            </p>
            <!-- error message end -->
          </div>
          <div class="mb-6">
            <div class="flex justify-between">
              <label for="message" class="mb-2 block text-sm font-medium capitalize text-gray-700">
                your message
              </label>
              <span class="text-sm capitalize text-gray-500">Max. 500 characters</span>
            </div>
            <textarea id="message" rows="4"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 tracking-wider text-gray-900 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
              placeholder="Leave a comment..." max=500></textarea>

            <!-- error message -->
            <p class="mt-2 hidden text-sm text-red-600"><span class="font-medium">
                Oops!</span> Username already taken!
            </p>
            <!-- error message end -->
          </div>
          <div class="pt-4">
            <button type="submit"
              class="w-full rounded-lg bg-indigo-700 px-4 py-3 text-base font-medium capitalize tracking-wide text-white hover:bg-indigo-800 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-1">
              Send Message!
              <i class="far fa-paper-plane ml-2"></i>
            </button>
          </div>
        </form>
      </div>
      <!-- form end -->

    </div>


  </main>

</x-layout>
