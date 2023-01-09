<div class="p-2 shadow-md rounded-md">
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="post" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Create new post</label>

    <textarea id="post" rows="4" name="content"
      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
      placeholder="What's on your mind ? "></textarea>

    <button type="submit"
      class="mt-2 text-white bg-purple-700 hover:bg-purple-800 focus:outline-none focus:ring-4 focus:ring-purple-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
      Post
    </button>
  </form>
</div>
