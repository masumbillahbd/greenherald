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
            
            </div>

          </div>
        </div>
        
      </div>  
    </div>

  </div>


</div>



@endsection