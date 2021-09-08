<x-app-layout title="Task">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div style="margin-bottom: 5px;">
                    <a href="{{route('tasks.create')}}" class="btn btn-primary">New Tasks</a>
                </div>
            
                <ul class="list-group mt-3">
                    @foreach ($tasks as $index => $task)
                        <li class="list-group-item d-flex align-items-center justify-content-between">{{$index + 1}} - {{$task->list}} 
                            <div class="d-flex">
                                <a class="btn btn-primary me-2" href="{{route('tasks.edit', $task->id)}}">edit</a>
                                <form action="{{route('tasks.destroy', $task->id)}}" method="post" style="display: inline;">
                                @csrf
                                @method('delete')
            
                                <button class="btn btn-danger" type="submit">delete</button>
                                </form>
            
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    

</x-app-layout>