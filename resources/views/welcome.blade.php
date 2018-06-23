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
                <h3 class="card-title">Add New Client</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{URL::route('insertClient')}}" method="POST">
              
              <div class="container">
              @if (Session::has('flash_message'))
              <div class="alert alert-success"> {{Session::get('flash_message')}} </div>

              @endif

              </div>
            

              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Name" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="address" placeholder="Enter Address" required >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone Nuber" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" required >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contract Created</label>
                    <input type="text" class="form-control" id="datepicker" name="cc" placeholder="Enter  Date dd/mm/yy" >
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit"  name ="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
<form>
  Cient Name<input type="text" name="name" value="{{ $search['name'] }}">
  Address<input type="text" name="address" value="{{ $search['address'] }}">
  Phone<input type="text" name="phone" value="{{ $search['phone'] }}">
  Phone<input type="text" name="phone" value="{{ $search['phone'] }}">
  Start Date<input type="text" name="start_date" value="{{ $search['start_date'] }}">
  End Date<input type="text" name="end_date" value="{{ $search['end_date'] }}">
  
  <input type="submit" value="Search">
</form>
<div class="card-client card-client-padding">
              <div class="card-header">
              <h3 class="card-title" style="text-align:center"> <b> Client Info </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                  
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Contract created</th>
                    <th>Created At</th>
                  </tr>
                  @foreach($client_list as $key=> $c)
                    <tr>
                      
                      <td>{{ $key+1 }}</td>
                      <td>{{ $c->name }}</td>
                      <td>{{ $c->address }}</td>
                      <td>{{ $c->phone }}</td>
                      <td>{{ $c->email }}</td>
                      <td>{{ $c->contract_created }}</td>
                      <td>{{ $c->created_at }}</td>
                    </tr>
                  @endforeach

                  
                  
                </table>

                {{ $client_list->appends($search)->links() }}
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