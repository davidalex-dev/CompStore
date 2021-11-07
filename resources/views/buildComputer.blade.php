@extends('editContainer')
@section('title')
    Build Computer
@endsection

@section('form')
<form method="POST" action="{{ route('computer.store') }}">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ csrf_field() }}
    Build Name:
    <input type="text" name="name" size="35">
    <br><br>
    Chassis:
    <select name="chassis" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Chassis" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    Motherboard:
    <select name="motherboard" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
    @foreach($sparepart as $sp)
            @if ($sp['type'] == "Motherboard" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    CPU:
    <select name="cpu" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "CPU" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    GPU:
    <select name="gpu" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "GPU" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    RAM:
    <select name="ram" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "RAM" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    Storage:
    <select name="storage" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Storage" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    OS:
    <select name="os" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        <option>Microsoft Windows 11 Home</option>
        <option>Microsoft Windows 11 Pro</option>
        <option>Microsoft Windows 10 Home</option>
        <option>Microsoft Windows 10 Pro</option>
        <option>Ubuntu Linux</option>
    </select>
    <br><br>
    Power Supply:
    <select name="power" class="custom-select">
    <option value="" selected disabled hidden>Choose here</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Power Supply" && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    <input type="submit" value="Submit" class="btn btn-info">
</form>

@endsection