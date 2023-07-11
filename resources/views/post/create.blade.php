@extends('layouts.main')
@section('content')
    <form>
        <div class="mb-3">
            <label for="title" class="form-label">Email address</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
