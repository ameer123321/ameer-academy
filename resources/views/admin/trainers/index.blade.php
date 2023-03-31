@extends('admin.layout')


@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Trainers</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.create') }}">Add new</a>
    </div>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Spec</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                    <tr>
                    <th scope="row">{{ $loop->interation }}</th>
                    <td>
                        <img src="{{ asset('uploads/trainers/'.$cat->img) }}" height="50px" alt="">
                    </td>
                    <td>{{ $cat->name }}</td>
                    <td>
                        @if ($cat->phone !== null)
                        {{ $cat->phone }}
                        @else
                        not exist
                        @endif
                    </td>
                    <td>{{ $cat->spec }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ reute('admin.trainers.edit', $cat->id) }}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{ reute('admin.trainers.delete', $cat->id) }}">Delete</a>
                    </td>
                    </tr>
                @endforeach

            </tbody>
          </table>


@endsection
