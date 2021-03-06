@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/tasks/" method="POST">
        @csrf
        <div class="form-group col-sm-6">
            <label for="name">Tasks</label>

            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="form-group col-sm-6">
            <button type="submit" class="btn btn-default">Add task</button>
        </div>
    </form>
    @include ('layouts.errors')   
</div>

@include ('layouts.render')

@endsection
