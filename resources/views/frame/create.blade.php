@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
    @section('content')
    <div class="container">
    <br><br>
                         <div class="the-card">
                                <div class="">
                                   <h3> Upload Frame</h3>        
                                </div>
                                <div class="container card-body">
                                   <form action="{{ route('frame.store') }}" method="post"  enctype="multipart/form-data">
                                    @csrf   
                                        <input type="file" name="frame" value="" class="form-control" required>
                                       <p>Files should be less than 2MB</p>
                                       <br>
                                       <input type="submit" value="Upload" class="btn btn-success btn-lg">
                                   </form>
                            </div>
                        </div> 
    </div>
@endsection