
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
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address->street }}</td>
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