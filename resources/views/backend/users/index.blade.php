@section('title', $title)
@section('style')

@endsection

<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <div class="px-4 py-3 mx-5 border-t-2 border-green-400 col-span-full rounded-5 shadow-soft-2xl">

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name & Email</th>
                    <th>Role</th>
                    <th>Bio</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$user->last_name." ".$user->last_name." ".$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->bio}}</td>
                    <td>actions</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
