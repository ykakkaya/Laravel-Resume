@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA ADI</label>
            <input type="text" class="form-control" name="social_name">

        </div>
        <div class="mb-3">
            <label class="form-label">URL</label>
            <input type="text" class="form-control" name="social_url">

        </div>

        <button type="submit" class="btn btn-primary">EKLE</button>
    </form>
@endsection
