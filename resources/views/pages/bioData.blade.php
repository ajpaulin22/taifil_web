
	<!-- preloader start here -->
    @push('style')
        <link rel="stylesheet" href="{{asset('/css/biodata.css')}}">
    @endpush

    @extends('layout.layout')

    @section('content')

    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader" style="padding-top: 20px;">
        <div class="container">
			
            <div class="pageheader__content text-center" id="LoadingForm"  style="height: 100vh">
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
							<form novalidate id="personaldata_form">
								  <div class="row g-3">
									  @if($biodata == "SSW")
									  <div class="col-md-3">
										<label for="personal_prometric" class="form-label">Prometric<span style="color:red">*</span>:</label>
										<select name="personal_prometric" class="form-select" id="personal_prometric" required>
										  <option selected disabled value="">Choose...</option>
										  <option>...</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid Prometric.
										</div>
									  </div>
									  <div class="col-md-3">
										<label for="personal_jlc" class="form-label">Japanese Language Certificate<span style="color:red">*</span>:</label>
										<select name="personal_jlc" class="form-select" id="personal_jlc" required>
										  <option selected disabled value="">Choose...</option>
										  <option>...</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid JLC.
										</div>
									  </div>
									  @endif
									  <div class="col-md-3">
										<label for="personal_code" class="form-label">Code<span style="color:red">*</span>:</label>
										<select name="personal_code" class="form-select" id="personal_code" required>
										  <option selected disabled value="">Choose...</option>
										  <option>...</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid code.
										</div>
									  </div>	
									  <div class="col-md-3">
										<label for="personal_jobcat" class="form-label">Job Categories<span style="color:red">*</span>:</label>
										<select name="personal_jobcat" class="form-select" id="personal_jobcat" required>
										  <option selected disabled value="">Choose...</option>
										  <option>...</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid Job cat.
										</div>
									  </div>
									  <div class="col-md-3">
										<label for="personal_operation" class="form-label">Operations<span style="color:red">*</span>:</label>
										<select name="personal_operations" class="form-select" id="personal_operation" required>
										  <option selected disabled value="">Choose...</option>
										  <option>...</option>
										</select>
										<div class="invalid-feedback">
										  Please select a valid operation.
										</div>
									  </div>
								  </div>
								  <div class="row g-3 mt-1 ">
									<div class="col-md-3">
										<label for="personal_lastname" class="form-label">Last Name<span style="color:red">*</span>:</label>
										<input name="personal_lastname" type="text" class="form-control" id="personal_lastname" required>
										<div class="invalid-feedback">
										  Please provide a Last Name
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_firstname" class="form-label">First Name<span style="color:red">*</span>:</label>
										<input name="personal_firstname" type="text" class="form-control" id="personal_firstname" required>
										<div class="invalid-feedback">
										  Please provide a First Name
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_middlename" class="form-label">Middle Name<span style="color:red">*</span>:</label>
										<input name="personal_middlename" type="text" class="form-control" id="personal_middlename" required>
										<div class="invalid-feedback">
										  Please provide a Middle Name
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_nickname" class="form-label">Nickname</label>
										<input name="personal_nickname" type="text" class="form-control" id="personal_nickname" required>
										<div class="invalid-feedback">
										  Please provide a Nickname
										</div>
									</div>
									{{-- //////////////////////////////////////////////////////////////////////////////////////// --}}
									<div class="col-md-12">
										<label for="personal_address" class="form-label">Present Address<span style="color:red">*</span>:</label>
										<input name="personal_address" type="text" class="form-control" id="personal_address" required>
										<div class="invalid-feedback">
										  Please provide a valid Address
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_birthdate" class="form-label">Date of Birth<span style="color:red">*</span>:</label>
										<input name="personal_birthdate" type="date" class="form-control" id="personal_birthdate" required>
										<div class="invalid-feedback">
										  Please provide a Date of Birth
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_placebirth" class="form-label">Place of Birth<span style="color:red">*</span>:</label>
										<input name="personal_placebirth" type="text" class="form-control" id="personal_placebirth" required>
										<div class="invalid-feedback">
										  Please provide a Place of Birth
										</div>
									</div>
									<div class="col-md-3">
										<span>Gender<span style="color:red">*</span>: </span>
										<br>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_gender" id="personal_genderM" value="M" required>
											<label class="form-check-label" for="personal_genderM">M</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_gender" id="personal_genderF" value="F">
											<label class="form-check-label" for="personal_genderF">F</label>
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_citizenship" class="form-label">Citizenship<span style="color:red">*</span>:</label>
										<select name="personal_citizenship" class="form-select" id="personal_citizenship" required>
											<option selected disabled value="">Choose...</option>
											<option>Filipino</option>
											<option>Japanese</option>
										  </select>
										  <div class="invalid-feedback">
											Please select a valid Citizenship.
										  </div>
									</div>
									<div class="col-md-2">
										<label for="personal_age" class="form-label">Age<span style="color:red">*</span>:</label>
										<input name="personal_age" type="number" class="form-control" id="personal_age" required>
										<div class="invalid-feedback">
										  Please provide age
										</div>
									</div>
									<div class="col-md-2">
										<label for="personal_blood" class="form-label">Blood Type<span style="color:red">*</span>:</label>
										<input name="personal_blood" type="text" class="form-control" id="personal_blood" required>
										<div class="invalid-feedback">
										  Please provide a Blood type
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_civilstatus" class="form-label">Civil Status<span style="color:red">*</span>:</label>
										<select name="personal_civilstatus" class="form-select" id="personal_civilstatus" required>
											<option selected disabled value="">Choose...</option>
											<option>Single</option>
											<option>Married</option>
											<option>Widowed</option>
											<option>Devorce</option>
										  </select>
										<div class="invalid-feedback">
										  Please provide Civil status
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_contact" class="form-label">Contact Number<span style="color:red">*</span>:</label>
										<input name="personal_contact" type="number" class="form-control" id="personal_contact" required>
										<div class="invalid-feedback">
										  Please provide a valid contact
										</div>
									</div>
									
									<div class="col-md-2">
										<label for="personal_height" class="form-label">Height (cm)</label>
										<input name="personal_height" type="number" class="form-control" id="personal_height" required>
										<div class="invalid-feedback">
										  Please provide a height
										</div>
									</div>
									{{-- ////////////////////////////////////////////////////////////////////////// --}}
									<div class="col-md-3">
										<label for="personal_religion" class="form-label">Religion<span style="color:red">*</span>:</label>
										<input name="personal_religion" type="text" class="form-control" id="personal_religion" required>
										<div class="invalid-feedback">
										  Please provide a Religion
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_fb" class="form-label">Facebook Account</label>
										<input name="personal_fb" type="text" class="form-control" id="personal_fb" required>
										<div class="invalid-feedback">
										  Please provide a valid facebook
										</div>
									</div>
									<div class="col-md-3">
										<span>Are you Smoking? </span>
										<br>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_smoking" id="personal_smokingY" value="1" required>
											<label class="form-check-label" for="personal_smokingY">Yes</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_smoking" id="personal_smokingN" value="0">
											<label class="form-check-label" for="personal_smokingN">No</label>
										</div>
									</div>
									<div class="col-md-3">
										<label for="personal_weight" class="form-label">Weight (KG)</label>
										<input name="personal_weight" type="number" class="form-control" id="personal_weight" required>
										<div class="invalid-feedback">
										  Please provide a weight
										</div>
									</div>
									<div class="col-md-6">
										<label class="form-label">Japanese Language<span style="color:red">*</span>: </label>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="personal_japlang_reading" value="reading" checked>
											<label class="form-check-label" for="personal_japlang_reading">Reading</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="personal_japlang_writing" value="writing">
											<label class="form-check-label" for="personal_japlang_writing">Writing</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="personal_japlang_speaking" value="speaking">
											<label class="form-check-label" for="personal_japlang_speaking">Speaking</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="checkbox" id="personal_japlang_listening" value="listening">
											<label class="form-check-label" for="personal_japlang_listening">Listening</label>
										  </div>
									</div>
									<div class="col-md-3">
										<label for="personal_otherlang" class="form-label">Other Language</label>
										<input name="personal_otherlang" type="text" class="form-control" id="personal_otherlang" required>
									</div>
									<div class="col-md-3">
										<label for="personal_sizeshoes" class="form-label">Shoes Size</label>
										<input name="personal_sizeshoes" type="number" class="form-control" id="personal_sizeshoes" required>
										<div class="invalid-feedback">
										  Please provide shoes size
										</div>
									</div>
									<div class="col-md-6">
										<label for="personal_hobbies" class="form-label">Hobbies</label>
										<input name="personal_hobbies" type="text" class="form-control" id="personal_hobbies" required>
										<div class="invalid-feedback">
										  Please provide Hobbies
										</div>
									</div>
									<div class="col-md-6">
										<label for="personal_persontonotify" class="form-label">Person to notify in case o emergency<span style="color:red">*</span>:</label>
										<input name="personal_persontonotify" type="text" class="form-control" id="personal_persontonotify" required>
										<div class="invalid-feedback">
										  Please provide a person
										</div>
									</div>
									<div class="col-md-4">
										<label for="personal_personrelation" class="form-label">Relation<span style="color:red">*</span>:</label>
										<input name="personal_personrelation" type="text" class="form-control" id="personal_personrelation" required>
										<div class="invalid-feedback">
										  Please provide a relation
										</div>
									</div>
									<div class="col-md-4">
										<label for="personal_personaddress" class="form-label">Address<span style="color:red">*</span>:</label>
										<input name="personal_personaddress" type="text" class="form-control" id="personal_personaddress" required>
										<div class="invalid-feedback">
										  Please provide a person address
										</div>
									</div>
									<div class="col-md-4">
										<label for="personal_persontcontact" class="form-label">Contact No<span style="color:red">*</span>:</label>
										<input name="personal_persontcontact" type="number" class="form-control" id="personal_persontcontact" required>
										<div class="invalid-feedback">
										  Please provide a person contact
										</div>
									</div>
									<div class="col-md-4">
										<label for="personal_passportno" class="form-label">Passport No<span style="color:red">*</span>:</label>
										<input name="personal_passportno" type="text" class="form-control" id="personal_passportno" required>
										<div class="invalid-feedback">
										  Please provide a passport no.
										</div>
									</div>
									<div class="col-md-2">
										<label for="personal_passportissue" class="form-label">Issue Date<span style="color:red">*</span>:</label>
										<input name="personal_passportissue" type="date" class="form-control" id="personal_passportissue" required>
										<div class="invalid-feedback">
										  Please provide a issue date
										</div>
									</div>
									<div class="col-md-2">
										<label for="personal_passportexpiry" class="form-label">Expiry Date<span style="color:red">*</span>:</label>
										<input name="personal_passportexpiry" type="date" class="form-control" id="personal_passportexpiry" required>
										<div class="invalid-feedback">
										  Please provide a expiry date
										</div>
									</div>
									<div class="col-md-4">
										<label for="personal_passportissueplace" class="form-label">Issue place<span style="color:red">*</span>:</label>
										<input name="personal_passportissueplace" type="text" class="form-control" id="personal_passportissueplace" required>
										<div class="invalid-feedback">
										  Please provide a place of issue
										</div>
									</div>
									<div class="col-md-4">
										<span>Do you have Food Allergies? </span>
										<br>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_foodallergy" onclick="hideallergy(this)" id="personal_foodallergyY" value="1" required>
											<label class="form-check-label" for="personal_foodallergyY">Yes</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_foodallergy" onclick="hideallergy(this)" id="personal_foodallergyN" value="0">
											<label class="form-check-label" for="personal_foodallergyN">No</label>
										</div>
									</div>
									<div class="col-md-4" id="hideallergy" hidden>
										<label for="personal_Kindfoodallergy" class="form-label">What kind of Food?</label>
										<input name="personal_Kindfoodallergy" type="text" class="form-control" id="personal_Kindfoodallergy" >
									</div>
									<div class="col-md-4">
										<span>Do you have Tattoo? </span>
										<br>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_tattoo" id="personal_tattooY" value="1" required>
											<label class="form-check-label" for="personal_tattooY">Yes</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_tattoo" id="personal_tattooN" value="0">
											<label class="form-check-label" for="personal_tattooN">No</label>
										</div>
									</div>
									<div class="col-md-4">
										<span>Do you have Driver's License? </span>
										<br>
										<br>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_Dlicense" onclick="hidelicensed(this)" id="personal_DlicenseY" value="1" required>
											<label class="form-check-label" for="personal_DlicenseY">Yes</label>
										  </div>
										  <div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="personal_Dlicense" onclick="hidelicensed(this)" id="personal_DlicenseN" value="0">
											<label class="form-check-label" for="personal_DlicenseN">No</label>
										</div>
									</div>
										<div class="col-md-4" id="hidelicensed1" hidden>
											<label for="personal_Dlicensed_type" class="form-label">Type of Licensed?</label>
											<input name="personal_Dlicensed_type" type="text" class="form-control" id="personal_Dlicensed_type" >
										</div>
										<div class="col-md-4" id="hidelicensed2" hidden>
											<label for="personal_Dlicensed_valid" class="form-label">Valid Until?</label>
											<input name="personal_Dlicensed_valid" type="date" class="form-control" id="personal_Dlicensed_valid" >
										</div>
								  </div>
							</form>
						</div>
					</div>
					<div class="tab-pane fade" id="EducationalBackground">
						<form novalidate class="row g-3 mt-2" id="EducationalBackground_form">
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center">
									<h6>Name of School</h6>
								</div>
								<div class="col-md-3 text-center">
									<h6>School Address</h6>
								</div>
								<div class="col-md-2 text-center">
									<h6>Date From</h6>
								</div>
								<div class="col-md-2 text-center">
									<h6>Date Until</h6>
								</div>
								<div class="col-md-12">
									<h6>Elementary<span style="color:red">*</span>:</h6>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_elemetary_school" id="educ_elemetary_school" placeholder="Name of School" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="educ_elemetary_address" id="educ_elemetary_address" placeholder="School Address" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_elemetary_from" id="educ_elemetary_from" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_elemetary_to" id="educ_elemetary_to" required>
								</div>
								<div class="col-md-12">
									<h6>High School<span style="color:red">*</span>:</h6>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_high_school" id="educ_high_school" placeholder="Name of School" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="educ_high_address" id="educ_high_address" placeholder="School Address" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_high_from" id="educ_high_from" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_high_to" id="educ_high_to" required>
								</div>
								<div class="col-md-12">
									<h6>Vocational<span style="color:red">*</span>:</h6>
								</div>
								<div class="col-md-1"><button class="btn btn-danger btn-block" ><i class="fa-solid fa-plus"></i></button></div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_voc_school1" id="educ_voc_school1" placeholder="Name of School" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="educ_voc_address1" id="educ_voc_address1" placeholder="School Address" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_voc_from1" id="educ_voc_from1" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_voc_to1" id="educ_voc_to1" required>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-5 text-center">
									<input type="text" class="form-control" name="educ_voc_course1" id="educ_voc_course1" placeholder="Course/Major" required>
								</div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_voc_cert1" id="educ_voc_cert1" placeholder="Certificate Holder"  required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_voc_certvalid1" id="educ_voc_certvalid1" required>
								</div>
								<div class="col-md-12">
									<h6>Japanese Language<span style="color:red">*</span>:</h6>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_jpl_school" id="educ_jpl_school" placeholder="Name of School" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="educ_jpl_address" id="educ_jpl_address" placeholder="School Address" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_jpl_from" id="educ_jpl_from" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_jpl_to" id="educ_jpl_to" required>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-8 text-center">
									<input type="text" class="form-control" name="educ_jpl_cert" id="educ_jpl_cert" placeholder="Certificate Holder" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="date" class="form-control" name="educ_jpl_certvalid" id="educ_jpl_certvalid" required>
								</div>
								<div class="col-md-12">
									<h6>College<span style="color:red">*</span>:</h6>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_college_school" id="educ_college_school" placeholder="Name of School" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="educ_college_address" id="educ_college_address" placeholder="School Address" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_college_from" id="educ_college_from" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_college_to" id="educ_college_to" required>
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-5 text-center">
									<input type="text" class="form-control" name="educ_college_course" id="educ_college_course" placeholder="Course/Major" required>
								</div>
								<div class="col-md-4 text-center">
									<input type="text" class="form-control" name="educ_college_cert" id="educ_college_cert" placeholder="Certificate Holder"  required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="educ_college_certvalid" id="educ_college_certvalid" required>
								</div>
						</form>
					</div>
					<div class="tab-pane fade" id="EmploymentRecord_Local">
						<div class="m-4">
							<div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<h6>Name of Company<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Position<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>Company Address<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date From<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date Until<span style="color:red">*</span></h6>
								</div>

							</div>
							<form class="row g-3" novalidate id="EmploymentRecord_Local_form">
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="emp_local_company1" id="emp_local_company1" placeholder="Name of School" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="text" class="form-control" name="emp_local_position1" id="emp_local_position1" placeholder="School Address" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="date" class="form-control" name="emp_local_address1" id="emp_local_address1" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="emp_local_from1" id="emp_local_from1" required>
								</div><div class="col-md-2 text-center">
									<input type="date" class="form-control" name="emp_local_to1" id="emp_local_to1" required>
								</div>
							</form>
							<button class="btn btn-success mt-1" id="Addbtn_Employment_Local">Add Record</button>
							<div class="form-check form-check-inline mx-5">
								<input class="form-check-input" type="checkbox" id="personal_japlang_writing" value="writing">
								<label class="form-check-label" for="personal_japlang_writing">Not Applicable</label>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="EmploymentRecord_Abroad">
						<div class="m-4">
                            <div class="row mt-2">
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 align text-center">
									<h6>Name of Company<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Position<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center">
									<h6>Company Address<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date From<span style="color:red">*</span></h6>
								</div>
								<div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 text-center">
									<h6>Date Until<span style="color:red">*</span></h6>
								</div>
							</div>
							<form class="row g-3" novalidate id="EmploymentRecord_abroad_form">
								<div class="col-md-3 text-center">
									<input type="text" class="form-control" name="emp_abroad_company1" id="emp_abroad_company1" placeholder="Name of School" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="text" class="form-control" name="emp_abroad_position1" id="emp_abroad_position1" placeholder="School Address" required>
								</div>
								<div class="col-md-3 text-center">
									<input type="date" class="form-control" name="emp_abroad_address1" id="emp_abroad_address1" required>
								</div>
								<div class="col-md-2 text-center">
									<input type="date" class="form-control" name="emp_abroad_from1" id="emp_abroad_from1" required>
								</div><div class="col-md-2 text-center">
									<input type="date" class="form-control" name="emp_abroad_to1" id="emp_abroad_to1" required>
								</div>
							</form>
							<button class="btn btn-success mt-1" id="Addbtn_Employment_abroad">Add Record</button>
							<div class="form-check form-check-inline mx-5">
								<input class="form-check-input" type="checkbox" id="personal_japlang_writing" value="writing">
								<label class="form-check-label" for="personal_japlang_writing">Not Applicable</label>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="FamilyInformation">
						<form class="row g-3 mt-2">
							<h4>Parents:</h4>
							<div class="col-md-3">
								<label for="family_father_name" class="form-label">Father Name</label>
								<input name="family_father_name" type="text" class="form-control" id="family_father_name" required>
								<div class="invalid-feedback">
								  Please provide a father name
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_father_birth" class="form-label">Birth Date</label>
								<input name="family_father_birth" type="date" class="form-control" id="family_father_birth" required>
								<div class="invalid-feedback">
								  Please provide a Birth date
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_father_occupation" class="form-label">Occupation</label>
								<input name="family_father_occupation" type="text" class="form-control" id="family_father_occupation" required>
								<div class="invalid-feedback">
								  Please provide occupation
								</div>
							</div>
							<div class="col-md-3 ">
								<label for="family_father_cp" class="form-label">CP No.</label>
								<input name="family_father_cp" type="text" class="form-control" id="family_father_cp" required>
								<div class="invalid-feedback">
								  Please provide Cp no
								</div>
							</div>
							<div class="col-md-12">
								<label for="family_father_address" class="form-label">Address</label>
								<input name="family_father_address" type="text" class="form-control" id="family_father_address" required>
								<div class="invalid-feedback">
								  Please provide address
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_mother_name" class="form-label">Mother Name</label>
								<input name="family_mother_name" type="text" class="form-control" id="family_mother_name" required>
								<div class="invalid-feedback">
								  Please provide a mother name
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_mother_birth" class="form-label">Birth Date</label>
								<input name="family_mother_birth" type="date" class="form-control" id="family_mother_birth" required>
								<div class="invalid-feedback">
								  Please provide a Birth date
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_mother_occupation" class="form-label">Occupation</label>
								<input name="family_mother_occupation" type="text" class="form-control" id="family_mother_occupation" required>
								<div class="invalid-feedback">
								  Please provide occupation
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_mother_cp" class="form-label">CP No.</label>
								<input name="family_mother_cp" type="text" class="form-control" id="family_mother_cp" required>
								<div class="invalid-feedback">
								  Please provide Cp no
								</div>
							</div>
							<div class="col-md-12">
								<label for="family_mother_address" class="form-label">Address</label>
								<input name="family_mother_address" type="text" class="form-control" id="family_mother_address" required>
								<div class="invalid-feedback">
								  Please provide address
								</div>
							</div>
							<h4>Siblings:</h4>
							<div class="col-md-3">
								<label for="family_sibling_name1" class="form-label">Name</label>
								<input name="family_sibling_name1" type="text" class="form-control" id="family_sibling_name1" required>
								<div class="invalid-feedback">
								  Please provide a sibling name1
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_sibling_birth1" class="form-label">Birth Date</label>
								<input name="family_sibling_birth1" type="date" class="form-control" id="family_sibling_birth1" required>
								<div class="invalid-feedback">
								  Please provide a Birth date
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_sibling_occupation1" class="form-label">Occupation</label>
								<input name="family_sibling_occupation1" type="text" class="form-control" id="family_sibling_occupation1" required>
								<div class="invalid-feedback">
								  Please provide occupation
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_sibling_cp1" class="form-label">CP No.</label>
								<input name="family_sibling_cp1" type="text" class="form-control" id="family_sibling_cp1" required>
								<div class="invalid-feedback">
								  Please provide Cp no
								</div>
							</div>
							<div class="col-md-12">
								<label for="family_sibling_address1" class="form-label">Address</label>
								<input name="family_sibling_address1" type="text" class="form-control" id="family_sibling_address1" required>
								<div class="invalid-feedback">
								  Please provide address
								</div>
							</div>
							<button class="btn btn-success w-25 ">Add Siblings</button>
							<h4>Spouse:</h4>
							<div class="col-md-3">
								<label for="family_spouse_name1" class="form-label">Name</label>
								<input name="family_spouse_name1" type="text" class="form-control" id="family_spouse_name1" required>
								<div class="invalid-feedback">
								  Please provide a spouse name1
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_spouse_birth1" class="form-label">Birth Date</label>
								<input name="family_spouse_birth1" type="date" class="form-control" id="family_spouse_birth1" required>
								<div class="invalid-feedback">
								  Please provide a Birth date
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_spouse_occupation1" class="form-label">Occupation</label>
								<input name="family_spouse_occupation1" type="text" class="form-control" id="family_spouse_occupation1" required>
								<div class="invalid-feedback">
								  Please provide occupation
								</div>
							</div>
							<div class="col-md-3">
								<label for="family_spouse_cp1" class="form-label">CP No.</label>
								<input name="family_spouse_cp1" type="text" class="form-control" id="family_spouse_cp1" required>
								<div class="invalid-feedback">
								  Please provide Cp no
								</div>
							</div>
							<div class="col-md-12">
								<label for="family_spouse_address1" class="form-label">Address</label>
								<input name="family_spouse_address1" type="text" class="form-control" id="family_spouse_address1" required>
								<div class="invalid-feedback">
								  Please provide address
								</div>
							</div>
							<br>
							<div class="form-check form-check-inline" style="margin-left: 20px;margin-top: 7px;">
								<label class="form-check-label" for="LoveOneCheck">Do you have Boyfriend/Girlfriend/Live In Partner</label>
								<input class="form-check-input" type="checkbox" onchange='handleChange(this)' id="LoveOneCheck" value="option1">
							  </div>
							<div id="LoveOne" class="row g-3" hidden>
									<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1">
										if Yes,
									</div>
									<div class="col-md-3">
										<label for="family_loveone_name" class="form-label">Name</label>
										<input name="family_loveone_name" type="text" class="form-control" id="family_loveone_name" required>
										<div class="invalid-feedback">
										  Please provide name
										</div>
									</div>
									<div class="col-md-2">
										<label for="family_loveone_birth" class="form-label">Birth Date</label>
										<input name="family_loveone_birth" type="date" class="form-control" id="family_loveone_birth" required>
										<div class="invalid-feedback">
										  Please provide birth
										</div>
									</div>
									<div class="col-md-3">
										<label for="family_loveone_occupation" class="form-label">Occupation</label>
										<input name="family_loveone_occupation" type="text" class="form-control" id="family_loveone_occupation" required>
										<div class="invalid-feedback">
										  Please provide occupation
										</div>
									</div>
									<div class="col-md-3">
										<label for="family_loveone_cp" class="form-label">CP No.</label>
										<input name="family_loveone_cp" type="text" class="form-control" id="family_loveone_cp" required>
										<div class="invalid-feedback">
										  Please provide cp
										</div>
									</div>
									<div class="col-md-11 offset-1">
										<label for="family_loveone_address" class="form-label">Address</label>
										<input name="family_loveone_address" type="text" class="form-control" id="family_loveone_address" required>
										<div class="invalid-feedback">
										  Please provide address
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
							<button class="btn btn-success w-25" id="addAcquantances" style="margin-top: 1rem;">Add Record</button>
						</form>
					</div>
					<div class="tab-pane fade" id="Upload">
						<form class="row g-3 mt-2" novalidate>
							<div class="col-md-4">
								<div class="image-area mt-4"><img id="imageResult1" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
								<input type="file" class="form-control" onchange="readURL(this,1);"  aria-label="file example" required>
								<div class="invalid-feedback">Example invalid form file feedback</div>
							</div>
							<div class="col-md-4">
								<div class="image-area mt-4"><img id="imageResult2" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
								<input type="file" class="form-control" onchange="readURL(this,2);" aria-label="file example" required>
								<div class="invalid-feedback">Example invalid form file feedback</div>
							</div>
							<div class="col-md-4">
								<div class="image-area mt-4"><img id="imageResult3" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
								<input type="file" class="form-control" onchange="readURL(this,3);" aria-label="file example" required>
								<div class="invalid-feedback">Example invalid form file feedback</div>
							</div>
						</form>
					</div>
					<a href="#EmploymentRecord_Local" class="btn btn-secondary offset-11 " id="addAcquantances" style="margin-top: 1rem;">SAVE</a>	
				</div>
			</div>
			
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->

    @endsection
    
    @push('scripts')
    <script src="{{asset('/js/biodata/biodata.js')}}"></script>
    @endpush