@extends('master')

@section('content')
<div class="card-client card-client-padding">
              <div class="card-header">
                <h3 class="card-title" style="text-align:center"> <b> Payment Details </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0 ">
                <table class="table table-striped   mycard">
                  <tr>
                    
                    <th>id</th>
                    <th>Client Name</th>
                    <th >paid_at</th>
                    <th>paid_amount</th>
                    <th>remarks</th>
                    <th style="width:200px;">Created At</th>
                    
                  </tr>
                  

                  @foreach($payment as $key => $c)
                    <tr>
                      
                      <td>{{ $key+1 }}</td>
                      <td>{{ $c->name }}</td>
                      <td>{{ $c->paid_at }}</td>
                      <td>{{ $c->paid_amount }}</td>
                      <td>{{ $c->remarks }}</td>
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