@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('experience.update', $exp->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Başlama zamanı</label>
            <input type="date" class="form-control" name="job_start" value="{{ $exp->job_start }}">

        </div>
        <div class="mb-3">
            <label class="form-label">Ayrılış zamanı</label>
            <input type="date" class="form-control" name="job_finish" value="{{ $exp->job_finish }}">

        </div>
        <div class="mb-3">
            <label class="form-label">FİRMA </label>
            <input type="text" class="form-control" name="company_name" value="{{ $exp->company_name }}">

        </div>

        <div class="mb-3">
            <label class="form-label">Açıklama</label>
            <input type="text" class="form-control" name="job_description" value="{{ $exp->job_description }}">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
