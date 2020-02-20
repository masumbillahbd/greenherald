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
            {!! Form::open(['url' => 'category/save', 'method' => 'POST', 'class' => 'form-horizontal']) !!}  
              @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" >Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="name">
                    <span class="text-danger">{{ $errors->has('name') ? $errors->first('name'):''}}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" >Category position</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control"  name="position">
                    <span class="text-danger">{{ $errors->has('position') ? $errors->first('position'):''}}</span>
                  </div>
                </div>
                
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Category Info</button>
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