@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('about.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">İSİM</label>
            <input type="text" class="form-control" name="name">

        </div>
        <div class="mb-3">
            <label class="form-label">TELEFON</label>
            <input type="text" class="form-control" name="phone_number">

        </div>
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="email" class="form-control" name="email">

        </div>

        <div class="mb-3">
            <label class="form-label">WEBSİTE</label>
            <input type="text" class="form-control" name="website">

        </div>
        <div class="mb-3">
            <label class="form-label">ADRES</label>
            <input type="text" class="form-control" name="address">

        </div>
        <button type="submit" class="btn btn-primary">EKLE</button>
    </form>
@endsection
