
    @push('style')
        <link rel="stylesheet" href="{{asset('/css/inquiry.css')}}">
    @endpush
    {{-- @extends('layout.layout')
    
    @section('content') --}}
         <!-- ================> Page Header section start here <================== -->
	{{-- </div> --}}

    <div class="about padding-top padding-bottom " id="inquiry_section" style="background-image: linear-gradient(to right top, #009572, #1d9972, #2d9d72, #3aa171, #45a571, #46a671, #48a770, #49a870, #40a670, #37a470, #2ba270, #1ca070);height: 100vh;">
        <div class="container">
            <div class="section__header style-2 text-center wow fadeInUp " data-wow-duration="1.5s" >
                <h2 class="text-white"><hr>INQUIRY<hr></h2>
                <div class="bg-white rounded text-start p-4 mt-4 shadow-lg animate__animated animate__bounce" style="background-color: white; ">
                    <div class="row">
                        <div class="col-8">
                            <p>Drop us a line or just say Hello!</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group has-error has-danger">
                                <label for="fullname">Full Name <span class="text-danger">*</span></label>
                                <input type="text" value="" class="form-control inputs" name="fullname" id="fullname" placeholder="Fullname" required="" data-error="This field is required.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-error has-danger">
                                <label for="fullname">Email <span class="text-danger">*</span></label>
                                <input type="email" value="" class="form-control inputs" name="fullname" id="fullname" placeholder="Fullname" required="" data-error="This field is required.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-error has-danger">
                                <label for="fullname">Subject <span class="text-danger">*</span></label>
                                <input type="text" value="" class="form-control inputs" name="fullname" id="fullname" placeholder="Fullname" required="" data-error="This field is required.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group has-error has-danger">
                                <label for="fullname">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                    <a href="#sss" target="_blank" class="btn btn-success btn-reveal btn-default mt-4 ">
                    <span>Send Message</span>
                    </a>
                        </div>
                        <div class="col-4">
                            <div class="location-map">
                                <div id="map">
                                    <iframe src="https://maps.google.com/maps?q=Alabang-Zapote, Tierra Nueva Village, Cupang, Muntinlupa City, Philippines&t=&z=10&ie=UTF8&iwloc=&output=embed" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ===========Info Section Ends Here========== -->
<div class="info-section padding-top padding-bottom">
    <div class="container">
        <div class="section__header style-2 text-center">
            <h2>Contact Info</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center border border-success">
                        <div class="contact-thumb mb-4 border border-success">
                            <img src="{{url('/images/contact/icon/01.png')}}" alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Office Address</h6>
                            <p><a href="http://">4C,D&E,N.T. Ctr, Alabang-Zapote,</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center border border-success">
                        <div class="contact-thumb mb-4 border border-success">
                            <img src="{{url('/images/contact/icon/02.png')}}" alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Phone number</h6>
                            <p><a href="tel:+">+22698 745 632,02 982 745</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="contact-item text-center border border-success">
                        <div class="contact-thumb mb-4 border border-success">
                            <img src="{{url('/images/contact/icon/03.png')}}" alt="contact-thumb">
                        </div>
                        <div class="contact-content">
                            <h6 class="title">Send Email</h6>
                            <p><a href="mailto:">taifilmanpower.application.sc@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===========Info Section Ends Here========== -->

   
    @push('script')
        <script src="{{asset('/js/inquiry.js')}}"></script>
    @endpush
