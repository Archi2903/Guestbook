@extends('site.layout')
@section('title')
    Update form
@endsection

@section('main_content')
    <form class="needs-validation " method="post" action="{{route('editSubRecord',$record->id)}}">
        @csrf
        <h1 class="text-center">Edit {{$record->name}}</h1>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$record->name}}"
                       placeholder="Brad" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" value="{{$record->email}}"
                           placeholder="adress@mail.ru"
                           required>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="message">Record</label>
            <textarea class="form-control" id="message" name="message" placeholder="Write your record"
                      required>{{$record->message}}</textarea>
        </div>
        <button class="btn btn-dark" type="submit">Edit record</button>
    </form>
@endsection
