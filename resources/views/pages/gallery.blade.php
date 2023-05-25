

@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-5">
                <h6>Categories</h6>
                <ul>
                    <li><a href="">Event Event</a> <hr></li>
                    <li><a href="">Departure</a> <hr></li>
                    <li><a href="">News and Updates</a> <hr></li>
                    <li><a href="">Activities</a> <hr></li>
                </ul>
            </div>
            <div class="col-md-9 mt-5 blog-posts mb-5">
                <div class="rounded shadow-lg bg-white h-auto p-4 border border-success row blog-post mb-5">
                    <h3>
                        <a href="#">Deperture for Month of June </a>
                        <hr>
                    </h3>
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item" title="Date posted">
                            <i class="fa-solid fa-calendar-days"></i>
                            July 16, 2021
                          </li>
                          <li class="breadcrumb-item mx-3" title="Time posted">
                            <i class="fa-solid fa-clock"></i>
                             10:30 AM
                          </li>
                          <li class="breadcrumb-item" title="Category">
                            <i class="fa-solid fa-folder-open"></i>
                             <a href="#">Events</a>
                          </li>
                        </ol>
                    </nav>
                    <div class="col-5 mt-4">
                        <div class="image">
                            <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-7 mt-4">
                        <p>
                            Descriptions
                        </p>
                        <div>
                            <a href="" class="btn btn-outline-primary btn-block">
                                Read More >>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rounded shadow-lg bg-white h-auto p-4 border border-success row blog-post mb-5">
                    <h3>
                        <a href="#">Deperture for Month of June </a>
                        <hr>
                    </h3>
                    <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item" title="Date posted">
                            <i class="fa-solid fa-calendar-days"></i>
                            July 16, 2021
                          </li>
                          <li class="breadcrumb-item mx-3" title="Time posted">
                            <i class="fa-solid fa-clock"></i>
                             10:30 AM
                          </li>
                          <li class="breadcrumb-item" title="Category">
                            <i class="fa-solid fa-folder-open"></i>
                             <a href="#">Events</a>
                          </li>
                        </ol>
                    </nav>
                    <div class="col-5 mt-4">
                        <div class="image">
                            <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-7 mt-4">
                        <p>
                            Descriptions
                        </p>
                        <div>
                            <a href="" class="btn btn-outline-primary btn-block">
                                Read More >>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            
            
        </div>
    </div>
@endsection