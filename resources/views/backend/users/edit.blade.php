@section('title', $title)
@section('style')

@endsection

<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div class="px-4 py-3 mx-5 mb-10 border-t-2 border-green-400 col-span-full rounded-5 shadow-soft-2xl">

        <div class="flex justify-end w-full">
            <a href="{{route('admin.users.index')}}"
             class="px-5 py-2 mb-2 text-sm font-medium text-white bg-green-600 rounded-lg focus:outline-none hover:bg-green-800 focus:ring-5 focus:ring-green-300 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="mr-2 text-gray-200 fas fa-list"></i>
                User
        </a>
        </div>



        <div class="p-4 md:p-5">
            <form class="space-y-4" action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Aman Tairo" value="{{ $user->name }}" required />
                    @error('name')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="jina@email.com" value="{{ $user->email }}" required />
                </div>

                <div>
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                    <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        <option value="">Select Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>


                    {{-- <div id="editor" class="flex h-32 w-fitter"></div> --}}
                    {{-- <input type="text" name="description" id="descriptionInput" class="hidden px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " /> --}}
                    {{-- <label for="editor" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-3">Bio</label> --}}

                    <label for="bio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bio</label>
                    <div id="editor"  class="flex h-32 w-[100%]">{!! $user->bio !!}</div>
                    <textarea name="bio" id="bioInput" rows="4" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter user bio">{{ old('bio') }}</textarea>
                </div>
                <div>
                    <label for="profile_picture" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Profile Picture</label>
                    <input type="file" name="profile_picture" id="profile_picture" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" />
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update User</button>
            </form>

          </div>


    </div>
</x-app-layout>
