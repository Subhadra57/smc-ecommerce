@extends('layouts.app')
@section ('content')
<h2 class="font-bold text-3xl text-blue-400">Dashboard</h2>
<hr class="h-1 bg-red-500">

<div class="grid grid-cols-3 gap-10 mt-10">
    <div class="bg-blue-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">Total Products</p>
        <h2 class="text-5xl font-bold">{{$totalproducts}}</h2>
    </div>

   
    <div class="bg-green-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">New Orders</p>
        <h2 class="text-5xl font-bold">{{$totalorders}}</h2>
    </div>

    
    <div class="bg-purple-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">pending orders</p>
        <h2 class="text-5xl font-bold">{{$pendingorders}}</h2>
    </div>

    <div class="bg-orange-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">Delivers orders</p>
        <h2 class="text-5xl font-bold">{{$deliveredorders}}</h2>
    </div>

    <div class="bg-yellow-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">processing Orders</p>
        <h2 class="text-5xl font-bold">{{$processingorders}}</h2>
    </div>

    <div class="bg-green-600 py-5 px-4 flex justify-between text-white rounded-lg shadow">
        <p class="text-xl">Total sales </p>
        <h2 class="text-5xl font-bold">{{$totalsales}}</h2>
    </div>



</div>
@endsection