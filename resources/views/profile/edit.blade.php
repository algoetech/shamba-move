@section('title', 'Profile')

<x-app-layout>
    <x-slot name="title">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="px-4 py-3 mx-5 mb-10 border-t-2 border-green-400 col-span-full rounded-5 shadow-soft-2xl">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            @auth
                @if (auth()->user()->role->name != 'admin')
                    <div class="p-4 bg-white shadow sm:p-8 dark:bg-gray-800 sm:rounded-lg">
                        <div class="max-w-xl">

                            @include('profile.partials.delete-user-form')


                        </div>
                    </div>
                @endif

            @endauth
        </div>
    </div>
</x-app-layout>
