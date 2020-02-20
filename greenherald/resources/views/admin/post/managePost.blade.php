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
           
            <div class="well" style="padding: 20px;">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th># </th>
                    <th>title</th>
                    <th>Writer</th>
                    <th>description</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->status == 1 ? 'Active' : 'Inactive' }}</td>
                    <td>
                      <a href="" class="btn btn-success btn-sm"> <span> <i class="fas fa-edit"></i> </span> </a>
                      <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this'); "> <span><i class="fas fa-trash-alt"></i></span> </a>

                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            </div>

          </div>
        </div>
        
      </div>  
    </div>

  </div>


</div>
@endsection