@extends('editContainer')

@section('title')
    Create Spare Part
@endsection

@section('form')
        <form method="POST" action="{{ route('sparepart.store') }}">
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
            Model:
            <input type="text" name="model" size="25">
            <br><br>
            Manufacturer:
            <input type="text" name="manufacturer">
            <br><br>
            Type:
            <select name="type" class="custom-select">
                <option selected>Chassis</option>
                <option>Motherboard</option>
                <option>CPU</option>
                <option>GPU</option>
                <option>RAM</option>
                <option>Power Supply</option>
                <option>Storage</option>
                
            </select>
            <br><br>
            Price:
            Rp<input type="number" name="price" min="1000">
            <br><br>
            Stock:
            <input type="number" name="stock" min="1">
            <br><br>
            <input type="submit" value="Submit" class="btn btn-info">

        </form>

@endsection