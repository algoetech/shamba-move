@section('title', 'Dashboard')
@section('style')

@endsection

<x-app-layout>
    {{-- main dash --}}
   <section class="grid max-w-full col-span-full min-w-[-moz-available] w-[-webkit-fill-available] grid-cols-12 gap-3 p-3 px-4">
        @hasaccess('User_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Users</span>
                <span class="flex p-1 text-3xl poppin">{{$users->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.users.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-users"></i> Users
                    </a>
                </span>
            </div>
        @endhasaccess


        @hasaccess('Post_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Posts</span>
                <span class="flex p-1 text-3xl poppin">{{$posts->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.posts.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-pager"></i> Posts
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('PostCategory_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-3xl poppin">Post Category</span>
                <span class="flex p-1 text-3xl poppin">{{$postCategories->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.post-categories.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-tags"></i> Post Category
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('Topic_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Topics</span>
                <span class="flex p-1 text-3xl poppin">{{$topics->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.topics.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fab fa-hubspot "></i> Topics
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('TopicCategory_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-3xl poppin">Topic Category</span>
                <span class="flex p-1 text-3xl poppin">{{$topicCategories->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.topic-categories.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fab fa-hubspot "></i> Topics Category
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('Role_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Roles</span>
                <span class="flex p-1 text-3xl poppin">{{$roles->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.roles.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-diagram-project"></i> Roles
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('Page_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Pages</span>
                <span class="flex p-1 text-3xl poppin">{{$pages->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.pages.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-globe"></i> Pages
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('Permission_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Permissions</span>
                <span class="flex p-1 text-3xl poppin">{{$permissions->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.permissions.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-key"></i> Permissions
                    </a>
                </span>
            </div>
        @endhasaccess

        @hasaccess('Article_read')
            <div class="flex flex-col justify-center w-full col-span-6 p-3 bg-gray-200 md:col-span-4 lg:col-span-3 rounded-3 shadow-soft-lg">
                <span class="flex p-1 text-4xl poppin">Articles</span>
                <span class="flex p-1 text-3xl poppin">{{$articles->count()}}</span>
                <span class="flex p-1 lora">
                    <a href="{{route('admin.articles.index')}}" class="flex flex-row items-center p-2 px-4 text-white bg-vendor-compliment-primary rounded-2 shadow-soft-xl hover:bg-green-700">
                        <i class="mx-2 fas fa-file-pdf"></i> Articles
                    </a>
                </span>
            </div>
        @endhasaccess
   </section>


    <x-slot name="scripts">
        <script>
            console.log('using slots');
        </script>
    </x-slot>


</x-app-layout>

