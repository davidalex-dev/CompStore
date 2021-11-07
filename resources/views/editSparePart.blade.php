@extends('editContainer')

@section('title')
    Edit Spare Part
@endsection

@section('form')

    <form method="POST" action="{{ route('sparepart.update', $sparepart->id) }}">
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
        Model:
        <input type="text" name="model" value="{{ $sparepart -> model }}">
        <br><br>
        Manufacturer:
        <input type="text" name="manufacturer" value="{{ $sparepart -> manufacturer }}">
        <br><br>
        Type: {{ $sparepart -> type }}
        <br><br>
        Price:
        <input type="number" name="price" value="{{ $sparepart -> price }}" min="1000">
        <br><br>
        Stock:
        <input type="number" name="stock" value="{{ $sparepart -> stock }}" min="1">
        <br><br>
        <input type="submit" value="Change" class="btn btn-info">

    </form>
@endsection