@extends('listContainer')

@section('title')
    List of Spare Parts
@endsection

@section('heading')
    List of Spare Parts
@endsection

@section('list')
    <a href="{{ route('sparepart.create') }}" class="btn btn-success">Create Spare Part</a>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">CPU</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "CPU")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">GPU</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "GPU")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">Motherboard</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "Motherboard")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">RAM</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "RAM")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">Storage</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "Storage")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">Power Supply</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "Power Supply")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    <table class="table table-striped" >
        <h2 style="margin-top: 20px">Chassis</h2>
        <tr>
            <th>Part</th>
            <th>Manufacturer</th>
            <th>Type</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Options</th>
         </tr>

         @foreach ($sparepart as $sp)
            @if($sp['type'] == "Chassis")
                <tr>
                    <td>{{ $sp['name'] }}</td>
                    <td>{{ $sp['manufacturer'] }}</td>
                    <td>{{ $sp['type'] }}</td>
                    <td>Rp{{ $sp['price'] }}</td>
                    <td>{{ $sp['stock'] }}</td>
                    <td>
                    <form action="{{ route('sparepart.destroy', $sp->id) }}" method="POST">
                        <a href="{{ route('sparepart.show', $sp->id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('sparepart.edit', $sp->id) }}" class="btn btn-secondary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure to delete {{ $sp['name'] }}?')" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    
    

        
    
@endsection


    



