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
                    <th style="width: 10px;">#</th>
                    <th>Id</th>
                    <th style="width:200px;">Paid At</th>
                    <th style="width:50px;">payment_mode</th>
                    <th style="width:50px;">payment_status</th>
                    <th>paid_amount</th>
                    <th>total_amount</th>
                    <th>remaining_amount</th>
                    <th style="width:200px;">Created At</th>
                    <th style="width:200px;">Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td>2075-03-04</td>
                    <td>cheque</td>
                    <td> pending</td>
                    <td>10000</td>
                    <td> 20000</td>
                    <td> 10000</td>
                    <td>2075-02-29</td>
                    <td>2075-02-29 </td>
                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>22</td>
                    <td>2075-03-04</td>
                    <td>cash</td>
                    <td>cleared</td>
                    <td>20000</td>
                    <td> 20000</td>
                    <td> 0.00</td>
                    <td>2075-03-29</td>
                    <td>2074-04-29 </td>
                  </tr>
                  
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