@extends('editContainer')

@section('title')
    Edit Computer
@endsection

@section('form')
<form method="POST" action="{{ route('computer.update', $computer -> id) }}">
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
    <input type="hidden" name="_method" value="PATCH">

    Build Name:
    <input type="text" name="name" value="{{ $computer -> name }}">
    <br><br>

    Chassis:
    <select name="chassis" class="custom-select">
        <option value="{{ $computer->pc_chassis->id }}">No change ({{$computer->pc_chassis->name}})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Chassis" && $sp['id'] != $computer-> pc_chassis -> id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    Motherboard:
    <select name="motherboard" class="custom-select">
    <option value="{{ $computer->pc_motherboard->id }}">No change ({{ $computer->pc_motherboard->name }})</option>
    @foreach($sparepart as $sp)
            @if ($sp['type'] == "Motherboard" && $sp['id'] != $computer-> pc_motherboard -> id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    CPU:
    <select name="cpu" class="custom-select">
    <option value="{{ $computer->pc_cpu->id }}">No change ({{ $computer->pc_cpu->name }})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "CPU" && $sp['id'] != $computer->pc_cpu->id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    GPU:
    <select name="gpu" class="custom-select">
    <option value="{{ $computer->pc_gpu->id }}">No change ({{ $computer->pc_gpu->name }})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "GPU" && $sp['id'] != $computer->pc_gpu->id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    RAM:
    <select name="ram" class="custom-select">
    <option value="{{ $computer->pc_ram->id }}">No change ({{ $computer->pc_ram->name }})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "RAM" && $sp['id'] != $computer->pc_ram->id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    Storage:
    <select name="storage" class="custom-select">
    <option value="{{ $computer->pc_storage->id }}">No change ({{ $computer->pc_storage->name }})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Storage" && $sp['id'] != $computer->pc_storage->id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>

    OS:
    <select name="os" class="custom-select">
    <option value="{{ $computer-> os }}">No change ({{ $computer-> os }})</option>
        <option>Microsoft Windows 11 Home</option>
        <option>Microsoft Windows 11 Pro</option>
        <option>Microsoft Windows 10 Home</option>
        <option>Microsoft Windows 10 Pro</option>
        <option>Ubuntu Linux</option>
    </select>
    <br><br>

    Power Supply:
    <select name="power" class="custom-select">
    <option value="{{ $computer->pc_power->id }}">No change ({{ $computer->pc_power->name }})</option>
        @foreach($sparepart as $sp)
            @if ($sp['type'] == "Power Supply" && $sp['id'] != $computer->pc_power->id && $sp['stock'] > 0)
                <option>{{ $sp['name'] }}</option>
            @endif
        @endforeach
    </select>
    <br><br>
    <input type="submit" value="Change" class="btn btn-info">
</form>

@endsection