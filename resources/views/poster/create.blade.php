@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
    @section('content')
    <div class="container">
    <br><br>
                         <div class="card">
                                <div class="card-header the-header">
                                       Generate Poster</b>        
                                </div>
                                <div class="container card-body">
                                   <form action="{{ route('poster.store') }}" method="post"  enctype="multipart/form-data">
                                        @csrf
   
                                        <input type="file" name="img" >
                                       <br><br>
                                       <input type="submit" class="btn btn-info btn-md" value="Generate">
                                   </form>
                            </div>
                        </div> 
    </div>
@endsection