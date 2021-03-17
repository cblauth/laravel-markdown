<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-white">


            <form class="px-6" action="{{route('store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-4 pt-10">

                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Title
                    </label>
                    <input class="rounded w-full border-gray-300" name="title" id="name" type="text">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Summary
                        <textarea name="summary"
                            class="form-textarea mt-1 block w-full border rounded w-full border-gray-300 " rows="5"
                            required></textarea>
                    </label>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Body
                        <textarea name="body"
                            class="form-textarea mt-1 block w-full border rounded w-full border-gray-300" rows="10"
                            required></textarea>
                    </label>
                </div>
                <div class="pb-10">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>