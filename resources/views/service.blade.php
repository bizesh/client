@extends('master')

@section('content')
<div class="col-md-12">
            <!-- general form elements -->
            
            <div class="card card-primary" style="
    margin-top: 10px;
    width: 80%;
    margin-left: 110px;
" >

<div class="card-header" >
                <h3 class="card-title">Add New Service Record</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::route('insertService')}}" method="POST">

               <div class="container">
              @if (Session::has('flash_message'))
              <div class="alert alert-success"> {{Session::get('flash_message')}} </div>

              @endif

              </div>
            

              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                  <label>Client Name</label>
                  <select class="form-control select2" name="name" style="width: 100%;">
                  
                  @foreach($name as $c )
                    
                    <option value="{{$c->client_id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Service Date</label>
                    <input type="text" class="form-control" id="datepicker" name="sd" placeholder="Enter  Date dd/mm/yy" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Served By</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="sb" placeholder="">
                  </div>
                  <div class="form-group">
                    <label>Remarks</label>
                    <textarea class="form-control" rows="3" name="rem" placeholder="Enter about the type of service provided"></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>


<div class="card-client card-client-padding">
              <div class="card-header">
              <h3 class="card-title" style="text-align:center"> <b> Service Records </b> </h3> 
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    
                    <th>Id</th>
                    <th> Client Name </th>                   
                    <th>service date</th>
                    <th>served by</th>
                    <th>remarks</th>
                    <th>Created At</th>
                    
                  </tr>
                  @foreach($service as $key=> $c)
                    <tr>
                      
                      <td>{{ $key+1 }}</td>
                      <td>{{ $c->name}}</td>
                      <td>{{ $c->service_date }}</td>
                      <td>{{ $c->served_by }}</td>
                      <td>{{ $c->remarks }}</td>
                      <td>{{ $c->created_at }}</td>
                    </tr>
                  @endforeach
                  
                </table>
              </div>
              <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
</div>
          <!-- /.col -->
        </div>
        \
        <!-- /.row -->
        <div class="row">
</div>
@stop