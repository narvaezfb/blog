@extends('layouts.master')

@section('content')
<div class="row">

    <div class="col-md-8 offset-md-2">

        <h2>Create a post</h2>

        <form method='POST' action="/posts">

            {{csrf_field()}}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea name="body" id="body" class="form-control" ></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>
        @include ('layouts.errors')
    </div>

</div>
   
@endsection