<div class="container">
    <div class="form-group col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">Current Tasks</div>
            <div class="panel-body">
                @if ($tasks->count())
                    <table class="table table-striped">
                        <thead>
                            <th>Tasks</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->name }}</td>
                                    <td>
                                        <form action="/tasks/{{ $task->id }}" method="Post">
                                            <button type="submit" class="alert alert-danger">Delete</button>
                                            @csrf
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>There is no tasks</p>
                @endif
            </div>
        </div>
    </div>
</div>
