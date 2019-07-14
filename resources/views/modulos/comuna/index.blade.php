
@extends('home')

@section('content')
    <h2>
    <i class="fas fa-map-marker-alt"></i> Comunas
  </h2>
    
    <hr>

    
    <table class="table table-hover table-bordered table-sm datatable">
        <thead>
            <tr>
                <th class="no-sort"></th>
                <th>nombre</th>
                <th>id</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comunas as $comuna)
            <tr>
                <td>
                  <a class="btn btn-sm btn-info" href="/comuna/{{ $comuna->id }}">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
                <td>{{ $comuna->nombre }}</td>
                <td>{{ $comuna->id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection