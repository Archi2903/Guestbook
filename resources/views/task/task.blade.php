@extends('site.layout')
@section('title')
    Tasks
@endsection

@section('main_content')
    <div>
        <h1>Tasks</h1>
        <ol class="list-tasks">
            @foreach($tasks as $task)
            <li>{{$task->tasks}}</li>
            @endforeach
        </ol>

        <form action="{{route('taskForm')}}" class="form-task" method="post">
            @csrf
            <input type="text" class="task-input" id="tasks" name="tasks">
            <button type="submit">add new task</button>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        let listTasks = document.querySelector('.list-tasks');
        let taskInput = document.querySelector('.task-input');


    </script>
@endpush
