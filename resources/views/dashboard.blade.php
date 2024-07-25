<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <link rel="stylesheet" href="{{url('css/admin.css')}}">
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(auth()->user()->id==2)
                        <a class="btn_control" href="{{url('admin/users')}}"> users</a>
                        <a class="btn_control" href="{{url('admin/kalas')}}"> kalas</a>
                        <a class="btn_control" href="{{url('/new')}}">
                            new kala
                        </a>

                    @endif

                    <table>
                        <thead>
                        <tr>

                            <th>name</th>
                            <th>grouping</th>
                            <th>price 1</th>
                            <th>number kala</th>
                            <th> price total</th>
                            <th>delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kalas as $kala)

                            <tr>

                                <td>{{$kala->name}}</td>
                                <td>{{$kala->grouping}}</td>
                                <td>{{$kala->price}}</td>
                                <td>{{$kala->number}}</td>
                                <td>{{(int)$kala->number*(int)$kala->price}}</td>
{{--                                @dd($kala->id)--}}
                                <td><a href="{{ url('/user/kala/del/'.$kala->id)}}">del</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
