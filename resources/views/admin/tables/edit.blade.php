<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">   
            <div class="flex justify-end m-2 p-2">
                    <a href="{{ route('admin.tables.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                        Back to Tables
                    </a>
            </div>

                    
        <form method="POST" action="{{ route('admin.tables.update', $table->id) }}">
            @csrf

            @method('PUT')

            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                <input type="text" name="name" value="{{ $table->name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div class="mb-6">
                <label for="guest_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Guest number</label>
                <input type="number" name="guest_number" value="{{ $table->guest_number }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required="">
            </div>

            <div class="mb-6">
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status</label>
                <div>
                    <select name="status" class="form-multiselect block w-full">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            <option @selected($table->status == $status) value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-6">
                <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Location</label>
                <div>
                    <select name="location" class="form-multiselect block w-full">
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            <option @selected($table->location == $location) value="{{ $location->value }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
            </form>
  
        </div>
    </div>
</x-admin-layout>
