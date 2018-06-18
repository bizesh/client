@extends('master')

@section('content')

<div class="search-form">
             <div class="form-group" id="client">
                    <label>Client Name</label>
                    <br>
                    <select class="form-control" id="box-width" style="width:300px;">
                      
                    </select>

                  <a href="{{URL::route('get-search-results')}}">  <button type="submit" class="btn btn-primary" style="margin-left:5px;">Search</button> </a>




            </div>

         

  </div>



@stop