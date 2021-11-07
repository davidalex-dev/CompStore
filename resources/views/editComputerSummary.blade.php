@extends('mainlayout')

@section('title')
    Computer Summary
@endsection

@section('content')
<div class="shadow-lg mt-4 p-5 bg-secondary text-white rounded" style="margin: 60px;position: absolute;width:90%">
    <div style="float:left;width:50%;">
        <h5>You have edited a computer with the following specs:</h5>
        <h1>{{ $computer['name'] }}</h1>
        <h3>Chassis</h3>
        <p>{{ $computer->pc_chassis->name }}</p>
        <h3>Motherboard</h3>
        <p>{{ $computer->pc_motherboard->name }}</p>
        <h3>CPU</h3>
        <p>{{ $computer->pc_cpu->name }}</p>
        <h3>GPU</h3>
        <p>{{ $computer->pc_gpu->name }}</p>
        <a href="{{ route('computer.index') }}" class="btn btn-success">Back to Computer List</a>
        </form>
    </div>
    <div style="margin-top: 50px;top:50px;float:right;width:50%">
        <h3>RAM</h3>
        <p>{{ $computer->pc_ram->name }}</p>
        <h3>Storage</h3>
        <p>{{ $computer->pc_storage->name }}</p>
        <h3>OS (Operating System)</h3>
        <p>{{ $computer['os'] }}</p>
        <h3>Power Supply</h3>
        <p>{{ $computer->pc_power->name }}</p>
        <h3>Total Price</h3>
        <p>Rp{{ $computer['total_price'] }}</p>
    </div>
</div>
    
@endsection