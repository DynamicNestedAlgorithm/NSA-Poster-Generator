@extends('layouts.app')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
    @section('content')
    <div class="bg">
        <div class="overlay">

    <div class="container">
        <br> <br>
        <br><br>
                         <div class="the-card">
                                <div class="card-header ">
                                    <h3> Step 1 -  Upload Image</h3>      
                                </div>
                                <div class="container card-body">
                                   <form action="{{ route('poster.store') }}" method="post"  enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <input type="file" name="img" id="file" value=""class="form-control" required>
                                       <br>
                                       <p>Maximum image size: 2MB</p>
                                       <input type="submit" class="btn btn-success btn-lg" id="submit" value="Upload">
                                       <a href="https://nsa-poster-generator.netlify.com/" class="btn btn-secondary float-right btn-large"> <b>Step 2 -></b> </a>
                                   </form>
                                   <br>
                                   <br>
                            </div>

                        </div>
                        <br> <br>
                        <br> <br>
    </div>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>
    <br> <br>

</div>
</div>
@endsection