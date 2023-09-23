@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('skills.update', $skills->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">YETENEK</label>
            <input type="text" class="form-control" name="name" value="{{ $skills->name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">YÜZDE</label>
            <input type="text" class="form-control" name="skills_percent" value="{{ $skills->skills_percent }}">

        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
