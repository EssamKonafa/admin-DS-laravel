<x-app-layout :title=$title>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h1 class="text-white">Create a Note</h1>
                <a class="inline-flex items-center px-4 py-2 bg-red-600 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" href='{{route('notes.index')}}'>
                    Back
                </a>
            </div>
            <form method="post" action="{{ route('notes.store') }}" class="mt-6 space-y-6">
                @csrf

                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title',)" required autofocus autocomplete="title" />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <div>
                    <x-input-label for="body" :value="__('Body')" />
                    <x-textarea name='body' id="body" class="mt-1 block w-full">{{old('body')}}</x-textarea>
                    <x-input-error class="mt-2" :messages="$errors->get('body')" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button>{{ __('Create') }}</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
