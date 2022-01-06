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
                    {{-- input Brands --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Brands</label>
                        <select name="brands_id" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="">Select Brand</option>
                                <option value="" disabled>---------------</option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->brand }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- input Brands --}}
                </div>
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input Categories --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Categories</label>
                        <select name="categories_id" required class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Select Category</option>
                            <option value="" disabled>---------------</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- input Categories --}}
                </div>
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input name --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                        <input type="text" required value="{{ old('name') }}" name="name" placeholder="Input Product Name Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input name --}}
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
                    {{-- input price --}}
                    <div class="w-6/12 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Price</label>
                        <input type="number" value="{{ old('price') }}" name="price" placeholder="Input Product Price Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input price --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input volume --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Volume</label>
                        <input type="number" value="{{ old('volume') }}" name="volume" placeholder="Input Volume in L" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>Liters Unit</small>
                    </div>
                    {{-- input volume --}}
                    {{-- input length --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Length</label>
                        <input type="number" value="{{ old('length') }}" name="length" placeholder="Input Length in MM" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>MM Unit</small>
                    </div>
                    {{-- input length --}}
                    {{-- input width --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Width</label>
                        <input type="number" value="{{ old('width') }}" name="width" placeholder="Input Width in MM" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>MM Unit</small>
                    </div>
                    {{-- input width --}}
                    {{-- input height --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Height</label>
                        <input type="number" value="{{ old('height') }}" name="height" placeholder="Input Height in MM" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>MM Unit</small>
                    </div>
                    {{-- input height --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input power --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Power</label>
                        <input type="number" value="{{ old('power') }}" name="power" placeholder="Input Power in W" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>Watt Unit</small>
                    </div>
                    {{-- input power --}}
                    {{-- input color --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Color</label>
                        <input type="text" value="{{ old('color') }}" name="color" placeholder="Input Product Color Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input color --}}
                    {{-- input warranty --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Warranty</label>
                        <input type="number" value="{{ old('warranty') }}" name="warranty" placeholder="Input Warranty in Month" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>Month</small>
                    </div>
                    {{-- input warranty --}}
                    {{-- input rak --}}
                    <div class="w-fit px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Rak</label>
                        <input type="number" value="{{ old('rak') }}" name="rak" placeholder="Input Jumlah Rak" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                    {{-- input rak --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input temp --}}
                    <div class="w-6/12 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Temperature</label>
                        <input type="text" value="{{ old('temp') }}" name="temp" placeholder="xx - xx" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <small>only input <i>lowest</i> - <i>highest</i> temp</small>
                    </div>
                    {{-- input temp --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input tags --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tags</label>
                        <input type="text" value="{{ old('tags') }}" name="tags" placeholder="Input Product Tags Here" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <span class="italic font-thin text-gray-700 text-xs">use space for separator</span>
                    </div>
                    {{-- input tags --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- save button --}}
                    <div class="w-full px-3">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Save product
                        </button>
                        <a href="{{ route('dashboard.product.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Back
                        </a>
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
