@extends('admin.layaut.adminlayout')

@section('content')
    <a href="{{ route('contact.create') }}" class="btn btn-success">EKLE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ADI</th>
                <th scope="col">URL</th>

            </tr>
        </thead>
        <tbody>
            @if (!empty($contact) && count($contact) > 0)
                @foreach ($contact as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->social_name }}</td>
                        <td>{{ $item->social_url }}</td>


                        <td><a href="{{ route('contact.edit', $item->id) }}" class="btn btn-info">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('contact.destroy', $item->id) }}" method="POST">
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
