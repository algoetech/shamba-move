@section('title', $title)
@section('style')

@endsection

<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div class="px-4 py-3 mx-5 mb-10 border-t-2 border-green-400 col-span-full rounded-5 shadow-soft-2xl">
        @hasaccess('PostCategory_create')
        <div class="flex justify-end w-full">
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="px-5 py-2 mb-2 text-sm font-medium text-white bg-green-600 rounded-lg focus:outline-none hover:bg-green-800 focus:ring-5 focus:ring-green-300 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                <i class="mr-2 text-gray-200 fas fa-plus"></i>
                Post Category
            </button>
        </div>
        @endhasaccess

        @include('backend.post-categories.add')

        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descriptions
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Posts
                        </th>
                        @hasaccess('PostCategory_update')
                        <th scope="col" class="px-6 py-3">
                            Actions
                        </th>
                        @endhasaccess
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postCategories as $cate)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input id="checkbox-table-search-{{ $loop->index }}" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-{{ $loop->index }}" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            {{ $cate->name }}
                        </td>
                        <td class="px-6 py-4">
                            {!! $cate->description !!}
                        </td>
                        <td class="px-6 py-4">
                            {{ $cate->posts->count() }}
                        </td>

                        @hasaccess('PostCategory_update')
                        <td class="px-6 py-4 text-right">
                            <div class="flex flex-row gap-2 ">
                                <a href="{{route('admin.post-categories.edit', $cate->id)}}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline group hover:scale-110">
                                    <i class="mx-2 text-blue-500 fas fa-edit group-hover:scale-102"></i>
                                </a>

                                @hasaccess('PostCategory_delete')
                                <form action="{{route('admin.post-categories.destroy', $cate->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="userid" value="{{$cate->id}}" />
                                    <button type="submit" class="group hover:scale-110"
                                        onclick="return confirm('Are you sure You want to do this!');">
                                        <i class="mx-2 fas fa-trash-can text-rose-400 group-hover:scale-102"></i>
                                    </button>
                                </form>
                                @endhasaccess

                            </div>

                        </td>
                        @endhasaccess

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

    <x-slot name="javascript">

        quill.on('text-change', function() {
        var html = quill.root.innerHTML;

        document.getElementById('descriptionInput').value = html;
        });

    </x-slot>
</x-app-layout>
