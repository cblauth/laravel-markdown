<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
      @auth
      <a href="{{route('create')}}"><button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-6"
        type="button">New article</button></a>
      @endauth
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        @forelse ($articles as $article)
        <div class="p-6 bg-white border-b-4 border-gray-200">
          <a target="_blank" href="{{Route('article', $article->id)}}"
            class=" text-gray-900 dark:text-white text-lg">{{$article->title}}</a>
          @if ($article->created_at)
          <p class=" text-gray-900 dark:text-white">{{ $article->created_at->format('d/m/Y H:i:s') }}</p>
          @endif
          <p class=" text-gray-900 dark:text-white text-sm">
            @markdown {!! $article->summary !!}  @endmarkdown
          </p>

          <p class="text-right">
            <a target="_blank" href="{{Route('article', $article->id)}}" class="underline text-gray-900 dark:text-white">Read</a>
            @auth  &nbsp;|&nbsp;<a href="{{Route('edit', $article->id)}}"
              class="underline text-gray-900 dark:text-white">Edit</a> 
            @endauth
            @auth  &nbsp;|&nbsp;<a href="{{Route('delete', $article->id)}}"
              class="underline text-gray-900 dark:text-white">Delete</a> 
            @endauth
          </p>
        </div>

        @empty
        <p class="p-6 text-gray-900 dark:text-white">No articles to show</p>
        @endforelse


      </div>
    </div>
</x-app-layout>