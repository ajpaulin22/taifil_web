
	<!-- preloader start here -->
    @push('style')
        <link rel="stylesheet" href="{{asset('/css/biodata.css')}}">
    @endpush

    @extends('layout.layout')

    @section('content')

    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader" style="padding-top: 20px;">
        <div class="container">
			
            <div class="pageheader__content text-center" id="LoadingForm" >
                <h2 style="color: #f3f3f3; text-shadow: 2px 2px 2px #3a3a3a">Fill up Bio-data form</h2>
				<div class="spinner-border" role="status">
					<span class="visually-hidden">Loading...</span>
				  </div>
            </div>

			<div class="p-4 shadow p-3 mb-5 bg-white rounded" id="formTab" style="border: 2px solid black;background-color: white;" hidden>
				<h1>BIO DATA <span>{{$biodata}}</span></h1>
				<ul class="nav nav-tabs" id="myTab">
					<li class="nav-item">
						<a href="#PersonalData" class="nav-link active" data-bs-toggle="tab">Personal Data</a>
					</li>
					<li class="nav-item">
						<a href="#EducationalBackground" class="nav-link" data-bs-toggle="tab">Educational Background</a>
					</li>
					<li class="nav-item">
						<a href="#EmploymentRecord_Local" class="nav-link" data-bs-toggle="tab">Employment Record(Local)</a>
					</li>
					<li class="nav-item">
						<a href="#EmploymentRecord_Abroad" class="nav-link" data-bs-toggle="tab">Employment Record(Abroad)</a>
					</li>
					<li class="nav-item">
						<a href="#FamilyInformation" class="nav-link" data-bs-toggle="tab">Family Information</a>
					</li>
					<li class="nav-item">
						<a href="#Upload" class="nav-link" data-bs-toggle="tab">Upload ID</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="PersonalData">
						<div class="m-4">
							<div class="row mt-2 mb-3">
								@if($biodata == 'SSW')
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="row">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Prometric</span>
											</div>
											<select name="search_type" id="search_type" class="form-control clear-select clear">
												<option value=""></option>
											</select>
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="row">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Japanese <br> Language Cert.</span>
											</div>
											<select name="search_type" id="search_type" class="form-control clear-select clear">
												<option value=""></option>
											</select>
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								@endif
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Code</span>
										</div>
										<select name="search_type" id="search_type" class="form-control clear-select clear">
											<option value=""></option>
										</select>
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Job Categories</span>
										</div>
										<select name="search_type" id="search_type" class="form-control clear-select clear">
											<option value=""></option>
										</select>
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Operations</span>
										</div>
										<select name="search_type" id="search_type" class="form-control clear-select clear">
											<option value=""></option>
										</select>
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Last Name</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Last Name" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">First Name</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="First Name" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Middle Name</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Middle Name" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Nickname:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="Nickname" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Present Address:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Date of Birth:</span>
										</div>
										<input type="date" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Palce of Birth:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPalce_Birth" name="PDPalce_Birth" placeholder="Palce of Birth" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="input-group-text">Gender:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 3px;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
											<label class="form-check-label" for="inlineCheckbox1">M</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
											<label class="form-check-label" for="inlineCheckbox2">F</label>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Citizenship:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Citizenship" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Age:</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Age" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Blood Type:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Type" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Civil Status:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Civil Status" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Contact Number:</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Contact Number" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Height(cm):</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" value="0" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Religion:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Religion" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Facebook Account:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPalce_Birth" name="PDPalce_Birth" placeholder="Facebook Account" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="input-group-text">Are you Smoking?:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 3px;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="Smoking0" value="option1">
											<label class="form-check-label" for="Smoking0">Yes</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-top: 7px;margin-right: 2px;">
											<input class="form-check-input" type="checkbox" id="Smoking1" value="option2">
											<label class="form-check-label" for="Smoking1">No</label>
										</div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Weight(Kg):</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" value="0" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 20px;">
											<span class="input-group-text">Japanese Language:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 2rem;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="JLReading" value="option1">
											<label class="form-check-label" for="JLReading">Reading</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-right: 2rem;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="JLWriting" value="option2">
											<label class="form-check-label" for="JLWriting">Writing</label>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 2rem;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="JLSpeaking" value="option2">
											<label class="form-check-label" for="JLSpeaking">Speaking</label>
										</div>
										<div class="form-check form-check-inline" style="margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="JLListening" value="option2">
											<label class="form-check-label" for="JLListening">Listening</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Other Language:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Other Language" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Shoe Size:</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" value="0" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Hobbies:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Hobbies" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Person to Notify in case of Emergency:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Person to Notify in case of Emergency" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Relation:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Relation" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Address:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Address" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-6">
										<div class="input-group-prepend">
											<span class="input-group-text">Contact No:</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Contact No" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">Passport No:</span>
										</div>
										<input type="number" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Passport No" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Issue Date:</span>
										</div>
										<input type="date" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Issue Date" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-6">
										<div class="input-group-prepend">
											<span class="input-group-text">Expiry Date:</span>
										</div>
										<input type="date" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Expiry Date" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<div class="input-group input-group-sm mb-6">
										<div class="input-group-prepend">
											<span class="input-group-text">Issue Place:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDCitizenship" name="PDCitizenship" placeholder="Issue Place" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									{{-- <div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Date Schedule/Release of Passport:</span>
										</div>
										<input type="date" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Religion" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div> --}}
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="input-group-text">Do you Have Food Allergies?:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 5px;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="allergy0" value="option1">
											<label class="form-check-label" for="allergy0">Yes</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="allergy1" value="option2">
											<label class="form-check-label" for="allergy1">No</label>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="input-group-text">Do you Have Driver's License?:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 5px;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="License0" value="option1">
											<label class="form-check-label" for="License0">Yes</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="License1" value="option2">
											<label class="form-check-label" for="License1">No</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">What Kind of Food:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPalce_Birth" name="PDPalce_Birth" placeholder="What Kind of Food" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Type of License?:</span>
										</div>
										<input type="text" class="form-control form-control-sm" id="PDPalce_Birth" name="PDPalce_Birth" placeholder="Type of License" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="input-group-text">Do you Have Tattoo:</span>
										</div>
										<div class="form-check form-check-inline" style="margin-right: 5px;margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="tattoo0" value="option1">
											<label class="form-check-label" for="tattoo0">Yes</label>
										  </div>
										  <div class="form-check form-check-inline" style="margin-top: 7px;">
											<input class="form-check-input" type="checkbox" id="tattoo1" value="option2">
											<label class="form-check-label" for="tattoo1">No</label>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend">
											<span class="input-group-text">Valid Until?:</span>
										</div>
										<input type="date" class="form-control form-control-sm" id="PDPalce_Birth" name="PDPalce_Birth" placeholder="Type of License" autocomplete="off">
										<div id="max_count_feedback"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="EducationalBackground">
						<div class="m-4">
							<div class="row mt-2">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 offset-1 text-center">
									<h6>Name of School</h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>School Address</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date From</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date Until</h6>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Elementary:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of School" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="School Addres" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">High School:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of School" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="School Addres" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Vocational:</label>
									
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of School" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="School Addres" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
								<button class="btn btn-primary" id="AddEmployment_Local">Add Record</button>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 offset-1">
									<label for="">course/major:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Course/Major" autocomplete="off">
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Certificate Holder:</label>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Certificate Holder" autocomplete="off">
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Valid Until:</label>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="Date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Valid until" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Japanese Language:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of School" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="School Addres" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 offset-1">
									<label for="">Certificate Holder:</label>
								</div>
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Certificate Holder" autocomplete="off">
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Total No. of Hours:</label>
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<input type="number" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="No. of Hours" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">College:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of School" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="School Addres" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 offset-1">
									<label for="">course/major:</label>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Course/Major" autocomplete="off">
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Certificate Holder:</label>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Certificate Holder" autocomplete="off">
								</div>
								<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
									<label for="">Valid Until:</label>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
									<input type="Date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Valid until" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="EmploymentRecord_Local">
						<div class="m-4">
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<h6>Name of Company</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Position</h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>Company Address</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date From</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date Until</h6>
								</div>

							</div>
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of Company" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Position" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Company Address" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<button class="btn btn-success mt-1" id="AddEmployment_Local">Add Record</button>
						</div>
					</div>
					<div class="tab-pane fade" id="EmploymentRecord_Abroad">
						<div class="m-4">
                            <div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<h6>Name of Company</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Position</h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>Company Address</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date From</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date Until</h6>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name of Company" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Position" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Company Address" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date From" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="date" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Date Until" autocomplete="off">
								</div>
							</div>
							<button class="btn btn-success mt-1" id="AddEmployment_Local">Add Record</button>
						</div>
					</div>
					<div class="tab-pane fade" id="FamilyInformation">
						<div class="m-4">
							<h4>Parents:</h4>
							<div>
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Father</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Father Name" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Birth Date</span>
											</div>
											<input type="date" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="Birth Date" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Occupation</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Occupation" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">CP No:</span>
											</div>
											<input type="number" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="CP No" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Address:</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Mother</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Mother Name" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Birth Date</span>
											</div>
											<input type="date" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="Birth Date" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Occupation</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Occupation" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">CP No:</span>
											</div>
											<input type="number" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="CP No" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Address:</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
							</div>
							<h4>Siblings:</h4>
							<div id="siblingsRecord">
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Name</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Birth Date</span>
											</div>
											<input type="date" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="Birth Date" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Occupation</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Occupation" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">CP No:</span>
											</div>
											<input type="number" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="CP No" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Address:</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
							</div>
							<button class="btn btn-success ">Add Siblings</button>
							<h4>Spouse:</h4>
							<div id="SpouseRecord">
								<div class="row">
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Name</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Birth Date</span>
											</div>
											<input type="date" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="Birth Date" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Occupation</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Occupation" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">CP No:</span>
											</div>
											<input type="number" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="CP No" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Address:</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<div class="form-check form-check-inline" style="margin-left: 20px;margin-top: 7px;">
								<label class="form-check-label" for="LoveOneCheck">Do you have Boyfriend/Girlfriend/Live In Partner</label>
								<input class="form-check-input" type="checkbox" onchange='handleChange(this)' id="LoveOneCheck" value="option1">
							  </div>
							<div id="LoveOne" hidden>
								<div class="row">
									<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
										if Yes,
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Name</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Birth Date</span>
											</div>
											<input type="date" class="form-control form-control-sm" id="PDFirst_Name" name="PDFirst_Name" placeholder="Birth Date" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Occupation</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDMiddle_Name" name="PDMiddle_Name" placeholder="Occupation" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">CP No:</span>
											</div>
											<input type="number" class="form-control form-control-sm" id="PDNickname" name="PDNickname" placeholder="CP No" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 offset-1">
										<div class="input-group input-group-sm mb-2">
											<div class="input-group-prepend">
												<span class="input-group-text">Home Address:</span>
											</div>
											<input type="text" class="form-control form-control-sm" id="PDPresent_Address" name="PDPresent_Address" placeholder="Present Address" autocomplete="off">
											<div id="max_count_feedback"></div>
										</div>
									</div>
								</div>
							</div>
							<br>
							<p>Please answer the following questions completely(pakisagot ang mga sumusunod na katanungan)</p>
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="">Have you been to japan? (nakapunta ka na ba sa Japan):</span>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="japanRad" id="japanRad0" value="option1">
											<label class="form-check-label" for="japanRad0">YES</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="japanRad" id="japanRad1" value="option2">
											<label class="form-check-label" for="japanRad1">NO</label>
										  </div>
									</div>
								</div>
							</div>
							<div id="JapanQA">
								<div class="row">
									<div class="col-auto">
									  <label for="inputPassword6" class="col-form-label">How many times? (ilang beses?)</label>
									</div>
									<div class="col-auto">
									  <input type="number" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
									</div>
							</div>
							<div class="row">
								<div class="col-auto">
								  <label for="inputPassword6" class="col-form-label">When(kung oo,Kailan) write all (isulat lahat)</label>
								</div>
								<div class="col-6">
								  <input type="text" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
								</div>
							</div>
							<div class="row">
								<div class="col-auto">
								  <label for="inputPassword6" class="col-form-label">Where in Japan</label>
								</div>
								<div class="col-auto">
								  <input type="text" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
								</div>
							</div>
							<div class="row">
								<div class="col-6 row">
									<div class="row">
										<div class="col-auto">
											<label for="inputPassword6" class="col-form-label">Have you overstayed in Japan?</label>
										  </div>
										  <div class="col-auto">
											  <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="overstayRad" id="overstayRad0" value="option1">
												  <label class="form-check-label" for="overstayRad0">YES</label>
												</div>
												<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="overstayRad" id="overstayRad1" value="option2">
												  <label class="form-check-label" for="overstayRad1">NO</label>
												</div>
										  </div>
									</div>
									<div class="row" id="overstayed">
										<div class="col-auto">
											<label for="inputPassword6" class="col-form-label">if Yes, How long?</label>
										  </div>
										  <div class="col-auto">
											<input type="text" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
										  </div>
										<div class="col-auto">
											<label for="inputPassword6" class="col-form-label">Did you surrendered?</label>
										  </div>
										  <div class="col-auto">
											  <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="surrenderRad" id="surrenderRad0" value="option1">
												  <label class="form-check-label" for="surrenderRad0">YES</label>
												</div>
												<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="surrenderRad" id="surrenderRad1" value="option2">
												  <label class="form-check-label" for="surrenderRad1">NO</label>
												</div>
										  </div>
									</div>
								</div>
								<div class="col-6 row">
									<div class="row">
										<div class="col-auto">
											<label for="inputPassword6" class="col-form-label">Did you use fake identity when you went to Japan?</label>
										  </div>
										  <div class="col-auto">
											  <div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="IdentityRad" id="IdentityRad0" value="option1">
												  <label class="form-check-label" for="IdentityRad0">YES</label>
												</div>
												<div class="form-check form-check-inline">
												  <input class="form-check-input" type="radio" name="IdentityRad" id="IdentityRad1" value="option2">
												  <label class="form-check-label" for="IdentityRad1">NO</label>
												</div>
										  </div>
									</div>
									<div class="row" id="fakeIdentity">
										<div class="col-auto">
											<label for="inputPassword6" class="col-form-label">if Yes, where did you use the name for?</label>
										  </div>
										  <div class="col-auto">
											<input type="text" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
										  </div>
									</div>
								</div>
								
								
							</div>
							</div>
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<div class="input-group input-group-sm mb-2">
										<div class="input-group-prepend" style="margin-right: 5px;">
											<span class="">Have you applied for a japanese visa before?</span>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="visaRad" id="visaRad0" value="option1">
											<label class="form-check-label" for="visaRad0">YES</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="visaRad" id="visaRad1" value="option2">
											<label class="form-check-label" for="visaRad1">NO</label>
										  </div>
									</div>
								</div>
							</div>
							<div id="visaQA">
								<div class="row">
									<div class="col-auto">
									  <label for="inputPassword6" class="col-form-label">Type of Visa</label>
									</div>
									<div class="col-auto">
									  <select name="" id="" style="border-bottom: 1px solid black;padding-bottom: 0;">
										<option value="">Type 1</option>
										<option value="">Type 2</option>
										<option value="">Type 3</option>
										<option value="">Type 4</option>
									  </select>
									</div>
							   </div>
							   <div class="row">
								<div class="col-auto">
								  <label for="inputPassword6" class="col-form-label">When?</label>
								</div>
								<div class="col-auto">
									<input type="date" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
								</div>
								<div class="col-auto">
									<label for="inputPassword6" class="col-form-label">Was it Approved or Denied</label>
								</div>
								<div class="col-auto">
									<input type="text" id="inputPassword6" class="" style="border-bottom: 1px solid black;padding-bottom: 0;">
								</div>
						   </div>
							</div>
							<h4 class="mt-2">RELATIVES AND ACQUAINTANCES IN JAPAN (Mga Kamag-anak at Kaibigan sa japan)</h4>
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<h6>Name</h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Relation</h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>Contact Numbers</h6>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center">
									<h6>Address</h6>
								</div>
							</div>
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Name" autocomplete="off">
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Relation" autocomplete="off">
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<input type="number" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Contact Numbers" autocomplete="off">
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 text-center">
									<input type="text" class="form-control form-control-sm" id="PDLast_Name" name="PDLast_Name" placeholder="Address" autocomplete="off">
								</div>
							</div>
							<button class="btn btn-success" id="addAcquantances" style="margin-top: 1rem;">Add Record</button>
						</div>
					</div>
					<div class="tab-pane fade" id="Upload">
						<div class="m-4">
							<input id='file-input' type='file' multiple/>
						</div>
					</div>
					<button class="btn btn-secondary offset-11" id="addAcquantances" style="margin-top: 1rem;">SAVE</button>	
				</div>
			</div>
			
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->

    @endsection
    
    @push('scripts')
    <script src="{{asset('/js/biodata/biodata.js')}}"></script>
    @endpush