<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="border-collapse table-auto w-full text-sm">
      <thead>
        <tr>
          <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Title</th>
          <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Created at</th>
          <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Action</th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-slate-800">
        @foreach ($posts as $post)
            <tr>
                <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$post->title}}</td>
                <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">{{$post->created_at}}</td>
                <td class="  p-4 pl-8 text-slate-500 dark:text-slate-400">
                    <a href="{{route('posts.edit', $post->id)}}" class="rounded-md bg-green-500 text-white focus:ring-red-600 px-4 py-2 text-sm">Edit</a>
                    <a href="{{route('posts.show', $post->id)}}" class="rounded-md bg-blue-500 text-white focus:ring-red-600 px-4 py-2 text-sm">View</a>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>