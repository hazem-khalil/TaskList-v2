@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/tasks" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tasks</label>

            <div class="col-sm-6">
                <input type="text" id="name" name="name" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-default">Add task</button>
            </div>
        </div>
    </form>    
</div>
@endsection
