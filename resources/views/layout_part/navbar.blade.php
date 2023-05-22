@push('style')
<style type="text/css">

    .goog-logo-link,.goog-te-gadget span{

    display:none !important;

    }

    .goog-te-gadget{

  color:transparent!important;
  font-size :0;

  }

  </style>
@endpush

<header class="header" id="navbar" >
    <div class="header__bottom" style="background-image: linear-gradient(to right top, #009572, #1d9972, #2d9d72, #3aa171, #45a571, #46a671, #48a770, #49a870, #40a670, #37a470, #2ba270, #1ca070);">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="row">
                    <div class="col-auto" style="padding-right: 0;">
                        <a class="navbar-brand" href="/home"><img src="/images/logo/logo.jpg" alt="logo"></a>
                    </div>
                    <div class="col-auto p-0">
                        <p class="mb-0 text-white font-weight-bold">Tai-Fil <br> Manpower <br> Services Corp.</p>
                    </div>
                </div>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav mainmenu">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                            </li>
                            <li>
                                <a href="/home#about_section">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TITP <span><i class="fa-solid fa-caret-down"></i></span>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/home#TITP_section">About</a></li>
                                    <li><a class="dropdown-item" href="/qualifications">Qualifications</a></li>
                                    <li><a class="dropdown-item" href="/category">Job Category</a></li>
                                    <li><a class="dropdown-item" href="/biodata?data=TITP">Apply Now</a></li>
                                  </ul>
                            </li>
                            <li>
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SSW <span><i class="fa-solid fa-caret-down"></i></span>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/home#SSW_section">About</a></li>
                                    <li><a class="dropdown-item" href="/qualifications">Qualifications</a></li>
                                    <li><a class="dropdown-item" href="/category">Job Category</a></li>
                                    <li><a class="dropdown-item" href="/biodata?data=SSW">Apply Now</a></li>
                                  </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Direct <span><i class="fa-solid fa-caret-down"></i></span>
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/home#TITP_section">About</a></li>
                                    <li><a class="dropdown-item" href="/qualifications">Qualifications</a></li>
                                    <li><a class="dropdown-item" href="/category">Job Category</a></li>
                                    <li><a class="dropdown-item" href="/biodata?data=Direct" id="directBio">Apply Now</a></li>
                                  </ul>
                            </li>
                            <li>
                                <a href="/gallery">Gallery</a>
                            </li>
                            <li><a href="/home#inquiry_section">Inquiry</a>
                            </li>
                            <li class="nav-item">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin <span><i class="fa-solid fa-caret-down"></i></span></a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										<li>
											<a href="/admin/ManagementRegistration">Management Registration</a>
										</li>
										<li>
											<a href="/admin/MasterMaintenance">Master Maintenance</a>
										</li>
									</ul>
								</li>
                        </ul>
                    </div>
                    <div class="header__more">
                        <button class="btn" type="button" id="moreoption" data-bs-toggle="dropdown" aria-expanded="false" id="google_translate_element"><i class="fa-solid fa-globe text-white"></i></button>
                        {{-- <ul class="dropdown-menu" aria-labelledby="moreoption">
                            <li><button class="dropdown-item"><img src="{{url('/images/japan.png')}}" alt="" srcset=""> Japanese</button></li>
                            <li><button class="dropdown-item"><img src="{{url('/images/united-states.png')}}" alt="" srcset=""> English</button></li>
                        </ul> --}}
                        <ul class="dropdown-menu p-0 m-0" id="google_translate_element"></ul>  
                    </div> 
                </div>
            </nav>
        </div>
    </div>
</header>

@push('scripts')
<script type="text/javascript">  
    function googleTranslateElementInit() {  
        new google.translate.TranslateElement(  
            {pageLanguage: 'en',
            includedLanguages:'ja,en',
            autoDisplay: 'true',
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
        },  
            'google_translate_element',
             
        );  
    }  
</script>  

<!-- Script code for google translator API -->  
<script type="text/javascript"   
src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">  
</script>  
@endpush