@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('education.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">BAŞLAMA ZAMANI</label>
            <input type="date" class="form-control" name="start_edu">

        </div>
        <div class="mb-3">
            <label class="form-label">BİTİŞ ZAMANI</label>
            <input type="date" class="form-control" name="end_edu">

        </div>
        <div class="mb-3">
            <label class="form-label">OKUL İSMİ</label>
            <input type="text" class="form-control" name="school_name">

        </div>

        <div class="mb-3">
            <label class="form-label">AÇIKLAMA</label>
            <input type="text" class="form-control" name="school_description">

        </div>

        <button type="submit" class="btn btn-primary">EKLE</button>
    </form>
@endsection
