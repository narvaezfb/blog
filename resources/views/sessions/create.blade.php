@extends ('layouts.master')

@section ('content')
<div class="col-sm-8">
        <h1>Sign In</h1>

        <form method="post" action="/login">
            {{ csrf_field()}}

            <div class="form-group">
                <label for="email"> Email Address: </label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password"> Password: </label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"> Sign In </button>
            </div>


            <div class="form-group">
                @include('layouts.errors')
            </div>

@endsection
