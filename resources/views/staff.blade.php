@extends('master')

@section('content')

<div class="col-md-12">
            <!-- general form elements -->
            
            <div class="card card-primary" style="
    margin-top: 10px;
    width: 80%;
    margin-left: 110px;
" >
              <div class="card-header">
                <h3 class="card-title">Add New Client Staff</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::route('insertStaff')}}" method="POST"> 
              <div class="container" >
              @if (Session::has('flash_message'))
              <div class="alert alert-success"> {{Session::get('flash_message')}} </div>

              @endif

              </div>
            

              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputEmail1"> Client Name</label>
                  <select class="form-control select2" name="name" style="width: 100%;">
                  
                  @foreach($name as $c)
                    
                    <option value="{{$c->client_id}}">{{$c->name}}</option>
                    
                    @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Staff Position</label>
                    <input type="text" class="form-control" name="position" id="exampleInputEmail1" placeholder="E.g. Accountant" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Staff Name</label>
                    <input type="text" class="form-control" name="staff_name" id="exampleInputEmail1" placeholder="Enter Staff Name" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter Address" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone Nuber">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" >
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
              <h3 class="card-title" style="text-align:center"> <b> Client Staffs </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    
                    <th>Id</th>
                    <th>Client Name </td>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>created_at</th>

                  
                    
                  </tr>
                  @foreach($staff as $key=> $c)
                    <tr>
                      
                      <td>{{ $key+1 }}</td>
                      <td>{{  $c->name }}</td>
                      <td>{{ $c->position }}</td>
                      <td>{{ $c->staff_name }}</td>
                      <td>{{ $c->phone }}</td>
                      <td>{{ $c->email }}</td>
                      <td>{{ $c->address }}</td>
                      <td>{{ $c->created_at }}</td>
                  
                    </tr>
                  @endforeach

                  
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
</div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
</div>
@stop