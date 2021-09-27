<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; Create
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
            <form action="{{ route('dashboard.product.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input name --}}
                    <div class="w-full px-3">                        
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                        <input type="text" value="{{ old('name') }}" name="name" placeholder="Input Product Name Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input name --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input description --}}
                    <div class="w-full px-3">                        
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description</label>
                        <textarea name="description" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">{!! old('description') !!}</textarea>
                    </div>
                    {{-- input description --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input price --}}
                    <div class="w-full px-3">                        
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Price</label>
                        <input type="number" value="{{ old('price') }}" name="price" placeholder="Input Product Price Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input price --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- save button --}}
                    <div class="w-full px-3">                        
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Save product
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
