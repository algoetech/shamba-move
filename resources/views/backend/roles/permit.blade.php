<div id="permit-{{$role->name}}-modal" tabindex="-1" aria-hidden="true" class="hidden bg-green-900/30 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-h-full p-4 lg:max-w-[42rem] md:max-w-xl">
        <!-- Modal description -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Define what {{$role->name}} can do.
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="permit-{{$role->name}}-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="text-red-800 bg-red-100 checked:scale-[88%] active:scale-[88%] focus:scale-[88%] sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
              <form class="space-y-4" action="{{route('admin.assign', ['role' => $role->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  @php
                        $permissionsByModel = [];
                        foreach ($permissions as $permission) {
                            [$model, $action] = explode('_', $permission->name);
                            $permissionsByModel[$model][$action] = $permission->id;
                        }

                        $permissionsHtml = '<table class="min-w-full mx-auto bg-white">
                            <thead>
                                <tr>
                                    <th class="py-2 bg-vendor-secondary-beta/10">Model</th>
                                    <th class="py-2 bg-vendor-secondary-beta/10">Create</th>
                                    <th class="py-2 bg-vendor-secondary-beta/10">Read</th>
                                    <th class="py-2 bg-vendor-secondary-beta/10">Update</th>
                                    <th class="py-2 bg-vendor-secondary-beta/10">Delete</th>
                                </tr>
                            </thead>
                            <tbody>';

                        foreach ($permissionsByModel as $model => $actions) {
                            $permissionsHtml .= '<tr>
                                <td class="px-4 py-2 bg-vendor-secondary-beta/10">' . ucfirst($model) . '</td>';

                            foreach (['create', 'read', 'update', 'delete'] as $action) {
                                $permissionId = $actions[$action] ?? null;
                                if ($permissionId) {
                                    $isChecked = $role->hasPermissionTo($permissionId) ? 'checked' : '';
                                    $permissionsHtml .= '<td class="px-4 py-2 text-center">
                                        <label for="permission-' . $role->id . '-' . $permissionId . '" id="label-permission-' . $role->id . $permissionId . '"
                                             class="p-4 py-2 text-xs checker font-medium cursor-pointer checked:scale-[88%] active:scale-[88%] focus:scale-[88%] text-'.($isChecked?"green":"red").'-800 bg-'.($isChecked?"green":"red").'-100 rounded perms me-2"> '.($isChecked?"True":"False").'

                                             <input type="checkbox" id="permission-' . $role->id . '-' . $permissionId . '" name="permissions[]" value="' . $permissionId . '" class="hidden mr-2" ' . $isChecked . '>

                                            </label>
                                    </td>';
                                } else {
                                    $permissionsHtml .= '<td class="px-4 py-2 text-center">-</td>';
                                }
                            }

                            $permissionsHtml .= '</tr>';
                        }

                        $permissionsHtml .= '</tbody></table>';
                  @endphp

                  {!!$permissionsHtml !!}





                  <button type="submit" class="w-full text-white bg-vendor-primary hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Permit</button>
              </form>

            </div>
        </div>
    </div>
</div>

<x-slot name="scripts">
    <script type="module">
        $('[id^="label-permission-"]').on('click', function (e) {
            e.preventDefault();

            var label = $(this);
            var checkbox = label.find('input[type="checkbox"]');

            label.toggleClass("text-red-800 text-green-800");
            label.toggleClass("bg-red-100 bg-green-100");
            checkbox.prop('checked', !checkbox.prop('checked'));

            if (checkbox.is(':checked')) {
                label.text('True').prepend(checkbox);
            } else {
                label.text('False').prepend(checkbox);
            }

        });
    </script>
</x-slot>
