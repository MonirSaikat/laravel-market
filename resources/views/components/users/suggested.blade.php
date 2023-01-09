<ul class="bg-white shadow-md p-3 divide-y divide-gray-200 dark:divide-gray-700">
  @foreach ($users as $user)
    <x-users.user-card :$user />
  @endforeach
</ul>
