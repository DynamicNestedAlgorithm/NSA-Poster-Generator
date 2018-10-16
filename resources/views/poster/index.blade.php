@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
    @section('content')
    <div class="bg">
        <div class="overlay">
                <br>
                <br>
                <div class="container">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="top-grid-item purple">
                            <img src="{{asset('img/upload.svg')}}" class="img"alt="" srcset="">
                            <br>
                            <br>
                            <br>
                            <h3 class="sub-text bold text-center">Step 1 - Upload Image</h3>
                            <p class="sub-text regular text-center">Upload appropriate image for poster</p>
                            <div style="width:100px;margin:auto;">
                                    <a href="{{ route('poster.create') }}" class="btn btn-danger btn-lg float-right"><b> Upload</b> </a>
                            </div>
                            <br>
                            <br>

                        </div>
                      </div>
                      <br>
                      <br>

                      <div class="col-lg-4">
                        <div class="top-grid-item purple">
                            <img src="{{asset('img/save.svg')}}" class="img"alt="" srcset="">
                            <br>
                            <br>
                            <br>
                            <br>
                            <h3 class="sub-text bold text-center">Step 2 - Save Image</h3>
                            <p class="sub-text regular text-center">Save generated image go back and click 
                                <a href="https://nsa-poster-generator.netlify.com/" class="btn btn-secondary btn-large"> <b>Step 2 -></b> </a>
                                
                            </p>
                        </div>
                      </div>
                      <br>
                      <br>

                      <div class="col-lg-4">
                        <div class="top-grid-item purple">
                            <img src="{{asset('img/generate.svg')}}" class="img" alt="" srcset="">
                            <br>
                            <br>
                            <h3 class="sub-text bold text-center">Step 3 - Generate Poster</h3>
                            <p class="sub-text regular text-center">Upload saved image from step 2 along with your full name and category, then save.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  
            <div class="top-container">
                
                    
                    
            </div>
            <br>
            <br>

            <div style="width:100px;margin:auto;">
                    <a href="{{ route('poster.create') }}" class="btn btn-danger btn-lg float-right"><b> Create Poster</b> </a>
                </div>
            <br> <br>
            <br><br>
        </div>
    </div>
@endsection