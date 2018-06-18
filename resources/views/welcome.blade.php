@extends('master')

@section('content')



<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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

                {{ $client_list->links() }}
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