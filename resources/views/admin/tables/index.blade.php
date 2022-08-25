<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="flex justify-end m-2 p-2">
        <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
            New Table
        </a>
    </div>  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">     
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Number of guest
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Status
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Location
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)

                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $table->name }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $table->guest_number }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->status->name }}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $table->location->name }}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('admin.tables.edit', $table->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form method="POST" action="{{ route('admin.tables.destroy', $table->id) }}"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf

                                        @method('DELETE')

                                        <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
