@extends('layout.site')
@section('title')
    Guestbook
@endsection
@section('main_content')
    @foreach($records as $record)
        <div class="media border">
            <img src="https://image.flaticon.com/icons/png/512/1077/1077114.png" style="height:64px "
                 class="mr-3 rounded-circle border"
                 alt="user-avatar">
            <div class="media-body">
                <h5 class="mt-0">{{$record->username}}</h5>
                <p>{{$record->record}} <p class="text-right">{{$record->updated_at}}</p></p>

            </div>
        </div>
    @endforeach
    <form class="needs-validation " method="post" action="guestbook/record">
        @csrf
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
