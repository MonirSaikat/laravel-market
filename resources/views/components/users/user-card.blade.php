<li class="py-3 sm:pb-4">
  <div class="flex items-center space-x-4">
    <div class="flex-shrink-0">
      <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
        </svg>
      </div>
    </div>
    <div class="flex-1 min-w-0">
      <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
        {{ $user->name }}
      </p>
      <p class="text-sm text-gray-500 truncate dark:text-gray-400">
        {{ $user->email }}
      </p>
    </div>
    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
      <button type="button"
        class="focus:outline-none text-white bg-blue-700 text-sm hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">follow</button>
    </div>
  </div>
</li>
