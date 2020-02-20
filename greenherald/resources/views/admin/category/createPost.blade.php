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
            {!! Form::open(['url' => 'post/save', 'method' => 'POST', 'class' => 'form-horizontal']) !!}  
              @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" >Post Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="title">
                    <input type="text" class="form-control"  name="user_id">
                    <span class="text-danger">{{ $errors->has('title') ? $errors->first('title'):''}}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" >Post Description</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="description">
                    <span class="text-danger">{{ $errors->has('description') ? $errors->first('description'):''}}</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2"> Category</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" name="category_id[]" multiple="multiple">
                      @foreach($categories as $category)

                        <option value="{{ $category->id}}">{{$category->name}}</option>

                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" > Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                  </div>
                </div>
                
                
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save Post Info</button>
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


<script>
  
      $('.select2').select2();
      // $('.select2cat').select2();


  // $(document).ready(function() {
 //     $('.select2-multi').select2();
  // });
  
</script>

@endsection