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

            <hr>

            

            <hr>

            <div class="well" style="padding: 20px;">
            {!! Form::open(['url' => 'user/save', 'method' => 'POST', 'class' => 'form-horizontal']) !!}  
              @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" >User Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="name">
                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):''}}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" >User Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control"  name="email">
                    <span class="text-danger">{{ $errors->has('email') ? $errors->first('email'):''}}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" >User Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control"  name="password" autocomplete="new-password">
                    <span class="text-danger">{{ $errors->has('password') ? $errors->first('password'):''}}</span>
                  </div>
                </div>
                
                
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save User Info</button>
                  </div>
                </div>
            {!! Form::close() !!}   
          </div>

          </div>
        </div>
        
      </div>  
    </div>

  </div>


</div>
@endsection