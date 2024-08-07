@extends('layouts.app')
@section('content')
<h1 class="font-bold text-3xl text-blue-800">Users</h1>
<hr class="h-1 bg-red-500">
<table class="w-full">
    <tr>
        <th class="border p-2">S.N</th>
        <th class="border p-2">Name</th>
        <th class="border p-2">Email</th>
        <th class="border p-2">Action</th>
    </tr>
    @foreach($users as $user)
    <tr class="text-center">
        <td class="border p-c">{{$loop->iteration}}</td>
        <td class="border p-c">{{$user->name}}</td>
        <td class="border p-c">{{$user->email}}</td>
        <td class="border p-2">
                <a href="" class="bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                <a href="" class="bg-red-600 text-white px-3 py-1 rounded">Delete</a>
            </td>
    </tr>
       @endforeach
</table>
@endsection