<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-gray-900 dark:text-white text-2xl">{{$article->title}}</p>
                    @if ($article->created_at)
                    <p class=" text-gray-900 dark:text-white text-sm mt-4">{{ $article->created_at->format('d/m/Y H:i:s') }}</p>
                    @endif
                    
                    <p class="text-gray-900 dark:text-white mt-4">              
                    {!! $article->body !!}                  
                    </p>
                   
          
                </div>
               
            </div>
           
        </div>
    </div>
  </x-app-layout>