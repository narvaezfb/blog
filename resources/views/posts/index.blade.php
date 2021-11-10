@extends ('layouts.master')

@section('content')

<div class="d-flex justify-content-between">
      <div class="p-3">
     
          @foreach ($posts as $post)
            @include('posts.post')
          @endforeach

      </div>

      <div class="p-3">
      @include('layouts.sidebar')
      </div>
      
    </div>

  
@endsection

@section('footer')
<script src="/js/file.js" ></script>
@endsection
