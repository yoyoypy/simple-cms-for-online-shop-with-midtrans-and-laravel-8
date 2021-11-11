<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Blog &raquo; {{ $item->title }} &raquo; Edit
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div>
               @if ($errors->any())
               <div class="mb-5" role="alert">
                   <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                       There`s Something Wrong!
                   </div>
                   <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                       <p>
                           <ul>
                               @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </p>
                   </div>
               </div>
               @endif
            {{-- form start --}}
            <form action="{{ route('dashboard.blog.update', $item->slug) }}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input name --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Title</label>
                        <input type="text"
                                value="{{ old('title') ?? $item->title }}"
                                name="title"
                                placeholder="Input Blog Title Here"
                                required
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input name --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input photo --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Thumbnail</label>
                        <input type="file" value="{{ old('thumbnail') ?? $item->thumbnail }}" accept="image" name="thumbnail" required placeholder="Select Thumbnail Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input photo --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input description --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                        <textarea name="description" required class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') ?? $item->description !!}</textarea>
                    </div>
                    {{-- input description --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input price --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tags</label>
                        <input type="text"
                                value="{{ old('tags') ?? $item->tags }}"
                                name="tags"
                                placeholder="Input tags here"
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input price --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- save button --}}
                    <div class="w-full px-3">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Edit Blog
                        </button>
                    </div>
                    {{-- save button --}}
                </div>

            </form>
            {{-- form end --}}
           </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('description');
    </script>
</x-app-layout>
