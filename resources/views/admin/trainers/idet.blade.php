@extends('admin.layout')


@section('content')

    <div class="d-flex justify-content-between mb-3">
        <h6>Trainers / Edat / {{ $trainers->name }}</h6>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.trainers.index') }}">Back</a>
    </div>

    @include('admin.inc.errors')

    <form method="POST" action="{{ route('admin.trainers.update') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="id" value="{{ $trainer->id }}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="from-control" value="{{ $trainer->name }}">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="from-control" value="{{ $trainer->phone }}">
        </div>
        <div class="form-group">
            <label>Speciality</label>
            <input type="text" name="Spec" class="from-control" value="{{ $trainer->spec }}">
        </div>


        <img src="{{ asset('uploads/trainers/'. $trainers->img) }}" height="100px" alt="" class="my-5">

        <div class="form-group">
            <input type="file" name="img" class="from-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

