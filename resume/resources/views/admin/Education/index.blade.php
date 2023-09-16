@extends('admin.layaut.adminlayout')

@section('content')
    <a href="{{ route('education.create') }}" class="btn btn-success">EKLE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BAŞLAMA ZAMANI</th>
                <th scope="col">BİTİŞ ZAMANI</th>
                <th scope="col">OKUL İSMİ</th>
                <th scope="col">AÇIKLAMA</th>

            </tr>
        </thead>
        <tbody>
            @if (!empty($edu) && count($edu) > 0)
                @foreach ($edu as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->start_edu }}</td>
                        <td>{{ $item->end_edu }}</td>
                        <td>{{ $item->school_name }}</td>
                        <td>{{ $item->school_description }}</td>

                        <td><a href="{{ route('education.edit', $item->id) }}" class="btn btn-info">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('education.destroy', $item->id) }}" method="POST">
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
