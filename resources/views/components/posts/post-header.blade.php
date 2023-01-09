<div class="flex items-center mb-2">
  <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
    </svg>
  </div>
  <div class="ml-2">
    <h5 class="mb-0 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
      {{ $post->author->name }}
    </h5>
    <small class="text-sm text-gray-500">{{ $post->created_at->diffForHumans() }}</small>
  </div>
</div>
