@extends('master')

@section('content')
<div class="card-client card-client-padding">
              <div class="card-header">
              <h3 class="card-title" style="text-align:center"> <b> Service Records </b> </h3> 
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th style="width: 10px;">#</th>
                    <th>Id</th>
                    <th>service date</th>
                    <th>served by</th>
                    <th>remarks</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>21</td>
                    <td>2075-05-05</td>
                    <td>Pratik Joshi</td>
                    <td> Support provided </td>
                    <td> 2073-09-09 </td>
                    <td> 2075-02-10 </td>
                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>22</td>
                    <td>2074-04-05</td>
                    <td>Abin Pandey</td>
                    <td> Installation </td>
                    <td> 2072-04-22 </td>
                    <td> 2075-02-29 </td>
                  </tr>
                  
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