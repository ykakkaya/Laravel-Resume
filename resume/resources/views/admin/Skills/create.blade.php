@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">YETENEK</label>
            <input type="text" class="form-control" name="name">

        </div>
        <div class="mb-3">
            <label class="form-label">YÜZDE</label>
            <input type="text" class="form-control" name="skills_percent">

        </div>
       
        <button type="submit" class="btn btn-primary">EKLE</button>
    </form>
@endsection
