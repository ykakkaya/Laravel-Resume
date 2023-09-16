@extends('admin.layaut.adminlayout')

@section('content')
    <a href="{{ route('experience.create') }}" class="btn btn-success">EKLE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BAŞLAMA ZAMANI</th>
                <th scope="col">İŞTEN AYRILMA ZAMANI</th>
                <th scope="col">FİRMA İSMİ</th>
                <th scope="col">AÇIKLAMA</th>

            </tr>
        </thead>
        <tbody>
            @if (!empty($exp) && count($exp) > 0)
                @foreach ($exp as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->job_start }}</td>
                        <td>{{ $item->job_finish }}</td>
                        <td>{{ $item->company_name }}</td>
                        <td>{{ $item->job_description }}</td>

                        <td><a href="{{ route('experience.edit', $item->id) }}" class="btn btn-info">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('experience.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">SİL</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif



        </tbody>
    </table>
@endsection
