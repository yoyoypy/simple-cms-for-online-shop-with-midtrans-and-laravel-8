<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; {{ $item->name }} &raquo; Edit
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
            <form action="{{ route('dashboard.transaction.update', $item->id) }}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- input name --}}
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>
                        <select name="status" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="{{ $item->status }}">{{ $item->status }}</option>
                            <option disabled>--------------</option>
                            <option value="PENDING">PENDING</option>
                            <option value="SUKSES">SUKSES</option>
                            <option value="CHALLENGE">CHALLENGE</option>
                            <option value="FAILED">FAILED</option>
                            <option value="SHIPPING">SHIPPING</option>
                            <option value="SHIPPED">SHIPPED</option>
                        </select>
                    </div>
                    {{-- input name --}}
                </div>

                <div class="flex flex-wrap -mx-4 mb-6">
                    {{-- save button --}}
                    <div class="w-full px-3">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                            Update Status
                        </button>
                    {{-- save button --}}
                    </div>
                </div>
            </form>
            <a href="{{ route('dashboard.transaction.index') }}">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    Back
                </button>
            </a>
            {{-- form end --}}
           </div>
        </div>
    </div>
</x-app-layout>
