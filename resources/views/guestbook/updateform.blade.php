@extends('site.layout')
@section('title')
    Update form
@endsection

@section('main_content')
    <form class="needs-validation " method="post" action="#">
        @csrf
        <h1 class="text-center">Edit</h1>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Brad" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Pitt" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="A@rchiBoys"
                           required>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="record">Record</label>
            <textarea class="form-control" id="record" name="record" placeholder="Write your record"
                      required></textarea>
        </div>
        <button class="btn btn-dark" type="submit">Add record</button>
    </form>
@endsection
