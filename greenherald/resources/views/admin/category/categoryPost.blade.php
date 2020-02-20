@extends('admin.master')

@section('content')
<div class="container-fluid">

  <div>
    <div class="row">
      <div class="col-lg-12">
        <h3 class="text-center text-success"> {{ Session::get('message') }} </h3>
        <hr/>
        <div id="card" class="card   h-100 py-2">
          <div class="panel card-body">
           
           <h2 > <span class="bg-success text-white" style="padding: 10px;border-radius: 4px;"> <span style="text-transform: uppercase;"> {{$category->slug}} </span> category all post </span></h2>

            <div class="well" style="padding: 20px;">

              @foreach($category->post as $post)

              <h5 style="color:#e71313;">{{ $post->title }}</h5>
              <p style="font-size: 10px;">{{ $post->description }}</p>
              <br>

              @endforeach
            </div>

          </div>
        </div>
        
      </div>  
    </div>

  </div>


</div>
@endsection