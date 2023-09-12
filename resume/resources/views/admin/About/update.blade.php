@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('about.update', $about->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">İSİM</label>
            <input type="text" class="form-control" name="name" value="{{ $about->name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">TELEFON</label>
            <input type="text" class="form-control" name="phone_number" value="{{ $about->phone_number }}">

        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" class="form-control" name="email" value="{{ $about->email }}">

        </div>

        <div class="mb-3">
            <label class="form-label">WEBSİTE</label>
            <input type="text" class="form-control" name="website" value="{{ $about->website }}">

        </div>
        <div class="mb-3">
            <label class="form-label">ADRES</label>
            <input type="text" class="form-control" name="address" value="{{ $about->address }}">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
