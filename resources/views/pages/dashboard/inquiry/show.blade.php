<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Inquiry &raquo; {{ $item->name }} {{ $item->product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                Inquiry Details
            </h2>
            <div class="bg-white overflow-hidden shadow sm:rounded-lg mb-10">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr>
                                <th class="border px-6 py-4 text-right">Subject</th>
                                <td class="border px-6 py-4">{{ $item->subject }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Description</th>
                                <td class="border px-6 py-4">{{ $item->description }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Date</th>
                                <td class="border px-6 py-4">{{ $item->created_at }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Name</th>
                                <td class="border px-6 py-4">{{ $item->name }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Email</th>
                                <td class="border px-6 py-4">{{ $item->email }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Address</th>
                                <td class="border px-6 py-4">{{ $item->address }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Phone</th>
                                <td class="border px-6 py-4">{{ $item->phone }}</td>
                            </tr>
                            <tr>
                                <th class="border px-6 py-4 text-right">Product</th>
                                <td class="border px-6 py-4">{{ $item->product->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('dashboard.inquiry.index') }}"
                class="
                    bg-blue-500
                    text-white
                    hover:bg-blue-600
                    font-bold
                    uppercase
                    text-xs
                    px-6
                    py-2
                    rounded
                    shadow
                    hover:shadow-md
                    outline-none
                    focus:outline-none
                    mr-1
                    mb-1
                    ease-linear
                    transition-all
                    duration-150
                    float-right
                ">
            Back
            </a>
        </div>
    </div>
</x-app-layout>
