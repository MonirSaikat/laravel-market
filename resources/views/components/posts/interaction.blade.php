<div class="flex justify-center mt-2">
  <button type="button"
    class="w-full text-white bg-gray-400 hover:bg-blue-800  text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Like</button>

  <button type="button"
    class="focus:outline-none w-full text-white bg-gray-400 hover:bg-green-800  text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Share</button>

  @if ($post->author->id === auth()->id())
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit"
        class="focus:outline-none w-full text-white bg-gray-400 hover:bg-red-800  text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
    </form>
  @endif
</div>
