@extends('master')

@section('content')
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