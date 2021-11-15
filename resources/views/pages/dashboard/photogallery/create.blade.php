<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gallery &raquo; Add
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
            <form action="{{ route('dashboard.photogallery.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input name --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Title</label>
                        <input type="text"
                                value="{{ old('title') }}"
                                name="title"
                                placeholder="Input Image Title Here"
                                required
                                class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input name --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input photo --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Image</label>
                        <input type="file" value="{{ old('image') }}" accept="image" name="image" required placeholder="Select Thumbnail Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input photo --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input description --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                        <textarea name="description" required class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') !!}</textarea>
                    </div>
                    {{-- input description --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input public --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Public?</label>
                        <input
                            type="radio"
                            class="form-radio"
                            name="public"
                            value="0"
                            checked
                            />
                        <span>Private</span>
                        <input
                            type="radio"
                            class="form-radio"
                            name="public"
                            value="1"
                            />
                        <span>Public</span>
                    </div>
                    {{-- input public --}}
                    <small class="text-gray-700 text-xs italic">Set permission for this image, keep "private" if you dont want to show in homepage</small>
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- save button --}}
                    <div class="w-full px-3">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Add Photo Gallery
                        </button>
                    </div>
                    {{-- save button --}}
                </div>

            </form>
            {{-- form end --}}
           </div>
        </div>
    </div>
</x-app-layout>
