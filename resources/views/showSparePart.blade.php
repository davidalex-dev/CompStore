@extends('mainlayout')

@section('title')
    Show Spare Part
@endsection

@section('content')
<div class="shadow-lg m-4 p-4 bg-primary text-white rounded">
    <h2>{{ $sparepart['name'] }}</h2>
    <h3>{{ $sparepart['type'] }}</h3>
    <h4>Price</h4>
    <p>Rp{{ $sparepart['price'] }}</p>
    @if ($sparepart['stock'] > 0)
        <h4>Stock Available</h4>
        <p>{{ $sparepart['stock'] }}</p>
    @else
        <h3>STOCK IS EMPTY.</h3>
    @endif
    
    @foreach ($sparepart->chassis_used as $com)
        
        <table class="table table-striped bg-info">
            <tr>
                <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->motherboard_used as $com)
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->cpu_used as $com)
        
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->gpu_used as $com)
        
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->ram_used as $com)
        
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->storage_used as $com)
        
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach

    @foreach ($sparepart->psu_used as $com)
        5
        <table class="table table-striped bg-info">
            <tr>
            <td>Used in</td>
                <td>Specs</td>
                <td>Total Price</td>
            </tr>

            <tr>
                <td>
                    <a href="{{route('computer.show', $com->id)}}" style="color: black">{{ $com['name']}}</a>
                </td>
                <td>
                    {{ $com->pc_chassis->name }}<br>
                    {{ $com->pc_motherboard->name }}<br>
                    {{ $com->pc_cpu->name }}<br>
                    {{ $com->pc_gpu->name }}<br>
                    {{ $com->pc_ram->name }}<br>
                    {{ $com->pc_storage->name }}<br>
                    {{ $com->os }}<br>
                    {{ $com->pc_power->name }}<br>
                </td>
                <td>Rp{{ $com['total_price']}}</td>
            </tr>
        </table>
    @endforeach
    
    
</div>

@endsection