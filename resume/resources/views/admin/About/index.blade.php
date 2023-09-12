@extends('admin.layaut.adminlayout')

@section('content')
    <a href="{{ route('about.create') }}" class="btn btn-success">EKLE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">İSİM</th>
                <th scope="col">TELEFON</th>
                <th scope="col">EMAIL</th>
                <th scope="col">WEBSITE</th>
                <th scope="col">ADRES</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($about) && count($about) > 0)
                @foreach ($about as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->website }}</td>
                        <td>{{ $item->address }}</td>
                        <td><a href="{{ route('about.edit', $item->id) }}" class="btn btn-info">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('about.destroy', $item->id) }}" method="POST">
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
