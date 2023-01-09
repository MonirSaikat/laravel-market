<x-app title="Home">
  <div class="grid gap-4 grid-cols-3 mt-3">
    <div class="col-span-2">
      <x-create-post />
      {{-- render posts --}}
      @foreach ($posts as $post)
        <x-posts.post :$post />
      @endforeach
    </div>
    <div>
      <x-sidebar>
        <x-users.suggested :$users />
      </x-sidebar>
    </div>
  </div>


</x-app>
