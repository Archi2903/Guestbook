@extends('site.layout')
@section('title')
    Guestbook
@endsection

@section('content_javascript')
    <button class="btn btn-dark"><i class="bi bi-sun-fill"></i></button>
    <l class="likes bi bi-heart bi-heart-fill"></l>
@endsection
@push('scripts')
    <script>
        let likes = document.querySelector('.likes');
        let likebutton = document.querySelector('l');
        let counter = 0
        likebutton.onclick = function () {
            likes.textContent = counter;
            likes.classList.toggle('bi-heart');
        }

    </script>
@endpush
@section('main_content')
    @foreach($records as $record)
        <br>
        <div class="media form">
            <img src="https://image.flaticon.com/icons/png/512/1077/1077114.png" style="height:64px "
                 class="mr-3 rounded-circle border"
                 alt="user-avatar">
            <div class="media-body">
                <h5 class="mt-0">{{$record->name}}</h5>
                <p>{{$record->message}}
                <p class="text-right">{{$record->updated_at}}
                    <a href="{{route('editRecord',$record->id)}}">
                        <button class="btn btn-dark"><i class="bi bi-pencil"></i></button>
                    </a>
                    <a href="{{route('deleteRecord',$record->id)}}">
                        <button class="btn btn-dark"><i class="bi bi-trash-fill"></i></button>
                    </a>
                </p>
                </p>
            </div>
        </div>
    @endforeach
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <form class="needs-validation " method="post" action="{{route('createRecord')}}">
        @csrf
        <div class="form-row">
            <div class="col-sm-6 mb-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Brad" required>
            </div>
            <div class="col-sm-6 mb-2">
                <label for="email">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="user@mail.ru"
                           required>
                </div>
            </div>
        </div>
        <div class="mb-2">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" placeholder="Write your message"
                      required></textarea>
        </div>
        <button class="btn btn-dark" type="submit"><i class="bi bi-chat-left-text"></i> Add message</button>
    </form>
@endsection
