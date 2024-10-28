<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Member Management</h3>
                        <ul class="list-disc pl-5">
                            <li>
                                <a href="{{ route('members.index') }}" class="text-blue-500 hover:text-blue-700">View Members</a>
                            </li>
                            <li>
                                <a href="#" class="text-blue-500 hover:text-blue-700">profit</a>
                            </li>
                        </ul>
                    </div>
                    <!-- You can add more sections for other management functionalities here -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
