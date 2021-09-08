<x-app-layout title="Create New Task">

<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Create New Task</h3>
                    
                </div>
                <div class="card-body">
                    <form action="{{route('tasks.store')}}" method="post" class="">
                        @csrf
                       @include('tasks._form',[
                           'submit' => 'Create',
                       ])
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
  
</x-app-layout>