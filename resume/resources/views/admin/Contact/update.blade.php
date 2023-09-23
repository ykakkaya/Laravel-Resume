@extends('admin.layaut.adminlayout')

@section('content')
    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">SOSYAL MEDYA ADI</label>
            <input type="text" class="form-control" name="social_name" value="{{ $contact->social_name }}">

        </div>
        <div class="mb-3">
            <label class="form-label">URL</label>
            <input type="text" class="form-control" name="social_url" value="{{ $contact->social_url }}">

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
