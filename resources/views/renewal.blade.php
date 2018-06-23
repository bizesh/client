@extends('master')

@section('content')

<div class="col-md-12">
            <!-- general form elements -->
            
            <div class="card card-primary" style="
    margin-top: 10px;
    width: 80%;
    margin-left: 110px;
" >


 <div class="form-group">
                  <label>Date range:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="reservation">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->

<div class="card-header" >
                <h3 class="card-title">Add New Renewal Record</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form role="form" action="{{URL::route('insertRenewal')}}" method="POST">

                <div class="container">
                @if (Session::has('flash_message'))
                <div class="alert alert-success"> {{Session::get('flash_message')}} </div>

                @endif

                </div>
              

              {{csrf_field()}}
                <div class="card-body">
                <div class="form-group">
                  <label>Client Name</label>
                  <select class="form-control select2" name="name"  style="width: 100%;">
                  
                  @foreach($name as $c)
                    
                  <option value="{{$c->client_id}}">{{$c->name}}</option>
                    @endforeach
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Renewal Date</label>
                    <input type="text" class="form-control" id="datepicker" "  name="rd" placeholder="Enter  Date dd/mm/yy" >
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1"> Total Receipt Amount</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="tra" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Next Renewal</label>
                    <input type="text" class="form-control" id="datepicker" name="nr" placeholder="Enter  Date dd/mm/yy" >
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