@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="container">
    <br><br>
                         <div class="card">
                                <div class="card-header the-header">
                                       Upload Frame</b>        
                                </div>
                                <div class="container card-body">
                                   <form action="{{ route('frame.store') }}" method="post"  enctype="multipart/form-data">
                                        @csrf
   
                                        <input type="file" name="frame" class="form-control" >
                                       <br><br>
                                       <input type="submit" value="Upload" class="btn btn-info btn-md">
                                   </form>
                            </div>
                        </div> 
    </div>
@endsection