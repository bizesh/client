@extends('master')

@section('content')
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