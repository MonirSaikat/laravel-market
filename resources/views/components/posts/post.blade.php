  <div
    class="my-3 p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <x-posts.post-header :$post />
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $post->content }}</p>

    <x-posts.interaction :$post />
  </div>
