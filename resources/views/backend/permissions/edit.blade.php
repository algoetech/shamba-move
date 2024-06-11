@section('title', $title)
@section('style')

@endsection

<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div class="px-4 py-3 mx-5 mb-10 border-t-2 border-green-400 col-span-full rounded-5 shadow-soft-2xl">

        <div class="flex justify-end w-full">
            <a href="{{route('admin.permissions.index')}}"
             class="px-5 py-2 mb-2 text-sm font-medium text-white bg-green-600 rounded-lg focus:outline-none hover:bg-green-800 focus:ring-5 focus:ring-green-300 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="mr-2 text-gray-200 fas fa-list"></i>
               Permission
        </a>
        </div>



        <div class="p-4 md:p-5">
            <form class="space-y-4" action="{{route('admin.permissions.update', $permission->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permission Namee</label>
                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Sustainable farming" value="{{ $permission->name }}" required />
                    @error('name')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="Guard" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permission Guard</label>
                    <select name="guard" required id="Guard" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option value=""></option>
                        <option value="web" selected>Web</option>
                    </select>
                    @error('guard')
                        <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Permission</button>
            </form>

          </div>

    </div>


</x-app-layout>
