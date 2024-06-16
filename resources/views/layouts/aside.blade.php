<aside id="sidebar"
            class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
            aria-label="Sidebar">
            <div
                class="relative flex flex-col flex-1 min-h-0 pt-0 border-r border-gray-200 bg-gradient-vendor-light-mixer dark:bg-gray-800 dark:border-gray-700">
                <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto shadow-soft-md">
                    <div
                        class="flex-1 px-3 space-y-1 divide-y divide-gray-200 bg-gradient-vendor-light-mixer dark:bg-gray-800 dark:divide-gray-700">
                        <ul class="pb-2 space-y-2 poppin text-vendor-secondary-beta">
                            <li>
                                <form action="#" method="GET" class="lg:hidden">
                                    <label for="mobile-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" name="email" id="mobile-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <a href="{{route('dashboard')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                    <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3" sidebar-toggle-item="">Dashboard</span>
                                </a>
                            </li>
                            @hasaccess('User_read')
                            <li>
                                <a href="{{route('admin.users.index')}}"
                                    class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                                    <i class="fas fa-users text-slate-700"></i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap poppin" sidebar-toggle-item="">Users</span>
                                </a>
                            </li>
                            @endhasaccess
                            <li>
                                <button type="button"
                                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                    aria-controls="dropdown-posts" data-collapse-toggle="dropdown-posts">
                                    <i class="fas fa-file-invoice text-slate-700"></i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap poppin" sidebar-toggle-item="">Posts</span>

                                    <i class="text-blue-700 fas fa-angle-down"></i>
                                </button>
                                <ul id="dropdown-posts" class="hidden py-2 space-y-2">
                                    @hasaccess('PostCategory_read')
                                    <li>
                                        <a href="{{route('admin.post-categories.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Post Categories</a>
                                    </li>
                                    @endhasaccess
                                    @hasaccess('Post_read')
                                    <li>
                                        <a href="{{route('admin.posts.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Posts</a>
                                    </li>
                                    @endhasaccess
                                    @hasaccess('Article_read')
                                    <li>
                                        <a href="{{route('admin.articles.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Articles</a>
                                    </li>
                                    @endhasaccess

                                </ul>
                            </li>
                            @hasaccess('Page_read')
                                <li>
                                    <a href="{{route('admin.pages.index')}}"

                                        class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 ">
                                        <i class="fas fa-users text-slate-700"></i>
                                        <span class="flex-1 ml-3 text-left whitespace-nowrap poppin" sidebar-toggle-item="">Pages</span>
                                    </a>
                                </li>
                            @endhasaccess

                            <li>
                                <button type="button"
                                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                    aria-controls="dropdown-topics" data-collapse-toggle="dropdown-topics">
                                    <i class="fas fa-file-invoice text-slate-700"></i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap poppin" sidebar-toggle-item="">Topics & Quest</span>

                                    <i class="text-blue-700 fas fa-angle-down"></i>
                                </button>
                                <ul id="dropdown-topics" class="hidden py-2 space-y-2">
                                    @hasaccess('TopicCategory_read')
                                        <li>
                                            <a href="{{route('admin.topic-categories.index')}}"
                                                class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Topic Categories</a>
                                        </li>
                                    @endhasaccess
                                    @hasaccess('Topic_read')
                                    <li>
                                        <a href="{{route('admin.topics.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Topics</a>
                                    </li>
                                    @endhasaccess
                                    @hasaccess('Question_read')
                                    <li>
                                        <a href="{{route('admin.qnans.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Questions</a>
                                    </li>
                                    @endhasaccess
                                </ul>
                            </li>

                            @hasaccess('Site_update')
                            <li>
                                <button type="button"
                                    class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                    aria-controls="dropdown-settings" data-collapse-toggle="dropdown-settings">
                                    <i class="fas fa-file-invoice text-slate-700"></i>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap poppin" sidebar-toggle-item="">Settings</span>

                                    <i class="text-blue-700 fas fa-angle-down"></i>
                                </button>
                                <ul id="dropdown-settings" class="hidden py-2 space-y-2">

                                    @hasaccess('Role_read')
                                    <li>
                                        <a href="{{route('admin.roles.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Roles</a>
                                    </li>
                                    @endhasaccess
                                    @hasaccess('Permission_read')
                                    <li>
                                        <a href="{{route('admin.permissions.index')}}"
                                            class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Permissions</a>
                                    </li>
                                    @endhasaccess

                                </ul>
                            </li>
                            @endhasaccess



                        </ul>

                    </div>
                </div>

            </div>
        </aside>
