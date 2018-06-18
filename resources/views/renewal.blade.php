@extends('master')

@section('content')
<div class="card-client card-client-padding">
              <div class="card-header">
              <h3 class="card-title" style="text-align:center"> <b> Renewals Info </b> </h3> 
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    
                    <th>Id</th>
                    <th> Client Name </th>
                    <th>renewal_date</th>
                    <th> Total Receipt Amount</th>
                    <th>Next Renewal</th>
                    <th>Created At</th>
                    
                  </tr>
                  @foreach($renewal as $key=> $c)
                    <tr>
                      
                      <td>{{ $key+1 }}</td>
                      <td> {{$c->name}} </td>
                      <td>{{ $c->renewal_date }}</td>
                      <td>{{ $c->total_receipt_amount }}</td>
                      <td>{{ $c->next_renewal }}</td>
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
        \
        <!-- /.row -->
        <div class="row">
</div>
@stop