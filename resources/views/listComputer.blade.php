@extends('listContainer')

@section('title')
    List of Computers
@endsection

@section('heading')
    List of Computers
@endsection

@section('list')
    <a href="{{ route('computer.create') }}" class="btn btn-success">Create Computer</a>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Specs</th>
            <th>Total Price</th>
            <th>Options</th>
        </tr>

        @foreach ($computer as $com)
        <tr>
            <td>{{ $com['name'] }}</td>

            <td>
                
            <a href="{{ route('sparepart.show', $com->pc_chassis->id) }}">{{ $com->pc_chassis->name }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_motherboard->id) }}">{{ $com->pc_motherboard->name }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_cpu->id) }}">{{ $com->pc_cpu->name }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_gpu->id) }}">{{ $com->pc_gpu->name }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_ram->id) }}">{{ $com->pc_ram->name }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_storage->id) }}">{{ $com->pc_storage->name }}</a><br>
            <a>{{ $com['os'] }}</a><br>
            <a href="{{ route('sparepart.show', $com->pc_power->id) }}">{{ $com->pc_power->name }}</a>
            </td>
            <td>Rp{{ $com['total_price'] }}</td>
            <td>
                <a href="{{route('computer.show', $com->id)}}" class="btn btn-primary">Show</a>
                <br><br>
                <a href="{{route('computer.edit', $com->id)}}" class="btn btn-secondary">Edit</a>
                <br><br>
                <form action="{{ route('computer.destroy', $com->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure to delete {{ $com['name'] }}?')" class="btn btn-danger">Delete</button>
                </form>
                
            </td>
        </tr>
        @endforeach

    </table>
    
@endsection