@extends('admin.layaut.adminlayout')

@section('content')
    <a href="{{ route('skills.create') }}" class="btn btn-success">EKLE</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">YETENEK</th>
                <th scope="col">YÜZDE</th>

            </tr>
        </thead>
        <tbody>
            @if (!empty($skills) && count($skills) > 0)
                @foreach ($skills as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->skills_percent }}</td>


                        <td><a href="{{ route('skills.edit', $item->id) }}" class="btn btn-info">GÜNCELLE</td>
                        <td>
                            <form action="{{ route('skills.destroy', $item->id) }}" method="POST">
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
