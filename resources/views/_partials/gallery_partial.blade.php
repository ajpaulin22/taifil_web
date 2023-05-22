@push('styles')
  <link rel="stylesheet" href="{{asset("css/Custom/partial/gallery.css")}}">
@endpush

<div class="about padding-top padding-bottom" id="Gallery_section" >
    <div class="container">
        <div class="section__header style-2 text-center wow fadeInUp" data-wow-duration="1.5s">
            <h2><hr> GALLERY<hr></h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="overflow:hidden;height: 400px;">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{url('/images/carousel/IMAGE 1.jpg')}}" class="d-block w-100 " alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('/images/carousel/manpower.jpeg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{url('/images/carousel/JAP.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              
            <div class="row mt-5">
                
                <div class="blog-post-item col-md-3 col-sm-3">
                    <div class="card shadow-sm border partial_imagecard">
                        <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
            
                        <div class="card-body">
                          <p class="card-text">picture 1</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">
                                <i class="fa fa-thumb-tack"></i> 
                                <span class="font-lato">March 16, 2023</span>
                            </small>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="blog-post-item col-md-3 col-sm-3">
                    <div class="card shadow-sm border partial_imagecard">
                        <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
                        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="overflow:hidden;">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{url('/images/carousel/IMAGE 1.jpg')}}" class="d-block img-responsive" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="{{url('/images/carousel/manpower.jpeg')}}" class="d-block img-responsive" alt="...">
                            </div>
                            <div class="carousel-item">
                              <img src="{{url('/images/carousel/JAP.jpg')}}" class="d-block img-responsive" alt="...">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div> --}}
                        <div class="card-body">
                          <p class="card-text">picture 1</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">
                                <i class="fa fa-thumb-tack"></i> 
                                <span class="font-lato">March 16, 2023</span>
                            </small>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="blog-post-item col-md-3 col-sm-3">
                    <div class="card shadow-sm border partial_imagecard">
                        <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
            
                        <div class="card-body">
                          <p class="card-text">picture 1</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">
                                <i class="fa fa-thumb-tack"></i> 
                                <span class="font-lato">March 16, 2023</span>
                            </small>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="blog-post-item col-md-3 col-sm-3">
                    <div class="card shadow-sm border partial_imagecard">
                        <img src="{{url('/images/carousel/JAP.jpg')}}" class="img-responsive">
            
                        <div class="card-body">
                          <p class="card-text">picture 1</p>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                              <a class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">
                                <i class="fa fa-thumb-tack"></i> 
                                <span class="font-lato">March 16, 2023</span>
                            </small>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
  <script src="{{asset("js/DesignJS/gallery_partial.js")}}"></script>
@endpush