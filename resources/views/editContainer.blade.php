@extends('mainlayout')

@section('content')
    <div class="shadow-lg m-5 p-4 bg-primary text-white rounded">
        <h1 style="margin-bottom: 20px">@yield('title')</h2>
        @yield('form')
    </div>
@endsection