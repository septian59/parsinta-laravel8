<x-app-layout>
    <div class="container">
        <h1>All Users</h1>

        @foreach ($users as $user)
            <li><a href="/user/{{$user->username}}">{{$user->name}}</a></li>
        @endforeach
    </div>
</x-app-layout>