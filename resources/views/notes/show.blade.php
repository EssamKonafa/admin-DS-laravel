<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12 p-6 ">
        <div class="flex pb-3 justify-between">
            <a class=" inline-flex items-center px-4 py-2 bg-red-600 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                href='{{ route('notes.index') }}'>
                Back
            </a>
        </div>
        <div class="text-center bg-gray-800 rounded-md">
            <div class="mx-auto py-12 sm:px-6 lg:px-8 ">
                <h3 class="text-white font-semibold text-xl">{{ $note->title }}</h3>
                <h3 class="text-gray-300 mt-2">{{ $note->body }}</h3>
            </div>
            <div class="flex bg-gray-500 gap-2 justify-center      p-4">
                <a class="inline-flex items-center px-4 py-2 bg-red-600 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    href='{{ route('notes.index') }}'>
                    edit
                </a>
                <a class="inline-flex items-center px-4 py-2 bg-red-600 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    href='{{ route('notes.index') }}'>
                    delete
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
