<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inquiry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div
                      class="
                        shadow
                        overflow-hidden
                        border-b border-gray-200
                        sm:rounded-lg
                      "
                    >
                      <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                          <tr>
                            <th
                              scope="col"
                              class="
                                px-6
                                py-3
                                text-left text-xs
                                font-medium
                                text-gray-500
                                uppercase
                                tracking-wider
                              "
                            >
                              Name
                            </th>
                            <th
                              scope="col"
                              class="
                                px-6
                                py-3
                                text-left text-xs
                                font-medium
                                text-gray-500
                                uppercase
                                tracking-wider
                              "
                            >
                              Product
                            </th>
                            <th
                              scope="col"
                              class="
                                px-6
                                py-3
                                text-left text-xs
                                font-medium
                                text-gray-500
                                uppercase
                                tracking-wider
                              "
                            >
                              Email
                            </th>
                            <th
                              scope="col"
                              class="
                                px-6
                                py-3
                                text-left text-xs
                                font-medium
                                text-gray-500
                                uppercase
                                tracking-wider
                              "
                            >
                              Status
                            </th>
                            <th
                              scope="col"
                              class="
                                px-6
                                py-3
                                text-left text-xs
                                font-medium
                                text-gray-500
                                uppercase
                                tracking-wider
                              "
                            >
                              Time
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                              <span class="sr-only">Details</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($items as $item)
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="flex items-center">
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-900">
                                    {{ $item->name }}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-500">
                                {{ $item->product->name }}
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-500">
                                {{ $item->email }}
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              @if ($item->read == 0)
                                <span class="text-xs px-2 font-medium bg-red-500 text-white rounded-full py-0.5">
                                    Belum dibaca
                                </span>
                              @else
                                <span class="text-xs px-2 font-medium bg-green-500 text-white rounded-full py-0.5">
                                    Sudah dibaca
                                </span>
                              @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-500">
                                  {{ $item->created_at->diffForHumans() }}
                                </div>
                              </td>
                            <td
                              class="
                                px-6
                                py-4
                                whitespace-nowrap
                                text-right text-sm
                                font-medium
                              "
                            >
                            <a href="{{ route('dashboard.inquiry.show', $item->id) }}" class="bg-green-500 hover:bg-green-700 text-white py-1 px-3 rounded shadow-lg">
                                Show Details
                            </a>
                            </td>
                          </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                      No Data Found
                                    </div>
                                  </div>
                                </div>
                              </td>
                        </tr>
                        @endforelse
                          <!-- More people... -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="flex justify-center mb-4">
        <div>
            {{ $items->links() }}
        </div>
    </div>
</x-app-layout>
