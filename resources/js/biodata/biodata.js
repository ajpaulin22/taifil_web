
setTimeout(() => {
    document.getElementById('formTab').removeAttribute('hidden')
    document.getElementById('LoadingForm').hidden = true;
}, 2000);

const handleChange = (checkbox) =>{
    if(checkbox.checked){
        document.getElementById('LoveOne').removeAttribute('hidden')
    }else{
        document.getElementById('LoveOne').hidden = true;
    }
}

const hideallergy = (radio) => {
    console.log(radio.value)
    if(radio.value == 1){
        document.getElementById('hideallergy').removeAttribute('hidden')
    }else{
        document.getElementById('hideallergy').hidden = true
    }
}

const hidelicensed = (radio) => {
    console.log(radio.value)
    if(radio.value == 1){
        document.getElementById('hidelicensed1').removeAttribute('hidden')
        document.getElementById('hidelicensed2').removeAttribute('hidden')
    }else{
        document.getElementById('hidelicensed1').hidden = true
        document.getElementById('hidelicensed2').hidden = true
    }
}

const hidejapan = (radio) => {
    console.log(radio.value)
    if(radio.value == 1){
        document.getElementById('japanQA').removeAttribute('hidden')
        document.getElementById('japanQA').removeAttribute('hidden')
    }else{
        document.getElementById('japanQA').hidden = true
        document.getElementById('japanQA').hidden = true
    }
}

const hidevisa = (radio) => {
    console.log(radio.value)
    if(radio.value == 1){
        document.getElementById('visaQA').removeAttribute('hidden')
        document.getElementById('visaQA').removeAttribute('hidden')
    }else{
        document.getElementById('visaQA').hidden = true
        document.getElementById('visaQA').hidden = true
    }
}


function readURL(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            if(id == 1){
                $('#imageResult1')
                .attr('src', e.target.result);
            }else if(id == 2){
                $('#imageResult2')
                .attr('src', e.target.result);
            }else{
                $('#imageResult3')
                .attr('src', e.target.result);
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}
// Employment Local Functions Start
function disableDeleteLocalEmployment(){
    var deleteCount = 0;
    $('.btnDeleteLocalCompany').each(function(){
        deleteCount++;
    })
    if (deleteCount <= 1)
        $('.btnDeleteLocalCompany').attr('disabled', true);
    else
        $('.btnDeleteLocalCompany').removeAttr('disabled');
}

function addLocalEmployment(){
    var employmentDiv = '<div class="row g-3 divLocalEmployment">' +
        '<div class="col-md-2 text-center">' +
        '<input type="text" class="form-control emp_local_company inputDisable" name="emplocalcompany_0" id="emplocalcompany_0" placeholder="Name of School" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="text" class="form-control emp_local_position inputDisable" name="emplocalposition_0" id="emplocalposition_0" placeholder="School Address" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emp_local_address inputDisable" name="emplocaladdress_0" id="emplocaladdress_0" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emp_local_from inputDisable" name="emplocalfrom_0" id="emplocalfrom_0" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emp_local_to inputDisable" name="emplocalto_0" id="emplocalto_0" required>' +
        '</div>' +
        '<div class="col-md-2">' +
        '<button type="button" id="btnDeleteLocalCompany_0" class="btn btn-sm btn-danger btn-block btnDeleteLocalCompany" style="margin-top:4px;"><span class="fa fa-trash"></span><span class="btnLabel">Remove</span></button>' +
        '</div>' +
        '</div>' ;
        $("#EmploymentRecord_Local_form").append(employmentDiv);
}
// Employment Local Functions End

// Employment Abroad Functions Start
function disableDeleteAbroadEmployment(){
    var deleteCount = 0;
    $('.btnDeleteAbroadCompany').each(function(){
        deleteCount++;
    })
    if (deleteCount <= 1)
        $('.btnDeleteAbroadCompany').attr('disabled', true);
    else
        $('.btnDeleteAbroadCompany').removeAttr('disabled');
}

function addAbroadEmployment(){
    var employmentDiv = '<div class="row g-3 divAbroadEmployment">' +
        '<div class="col-md-2 text-center">' +
        '<input type="text" class="form-control emplocalcompany inputDisableAbroad" name="emplocalcompany0" id="emplocalcompany_0" placeholder="Name of School" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="text" class="form-control emplocalposition inputDisableAbroad" name="emplocalposition0" id="emplocalposition_0" placeholder="School Address" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emplocaladdress inputDisableAbroad" name="emplocaladdress0" id="emplocaladdress_0" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emplocalfrom inputDisableAbroad" name="emplocalfrom0" id="emplocalfrom_0" required>' +
        '</div>' +
        '<div class="col-md-2 text-center">' +
        '<input type="date" class="form-control emplocalto inputDisableAbroad" name="emplocalto0" id="emplocalto_0" required>' +
        '</div>' +
        '<div class="col-md-2">' +
        '<button type="button" id="btnDeleteAbroadCompany_0" class="btn btn-sm btn-danger btn-block btnDeleteAbroadCompany" style="margin-top:4px;"><span class="fa fa-trash"></span><span class="btnLabel">Remove</span></button>' +
        '</div>' +
        '</div>' ;
        $("#EmploymentRecord_Abroad_form").append(employmentDiv);
}
// Employment Abroad Functions End

$(document).ready(function () {
    'use strict'
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var personaldata_form = document.querySelectorAll('#personaldata_form')

    $('#upload').on('change', function () {
        readURL(input);
    });

    // Employment Local Start
    $("#Addbtn_Employment_Local").click(function(){
        var i = 0;
        addLocalEmployment();
        $('.emp_local_company').each(function(){
            $(this).removeAttr('id');
            $(this).attr('id', 'emplocalcompany_' + i);
            i++;
        });
        disableDeleteLocalEmployment();

        $('.btnDeleteLocalCompany').click(function(){
            $(this).closest('.divLocalEmployment').remove();
            disableDeleteLocalEmployment();
        });
    });

    $('#chkboxLocalEmployment').change(function(){
        if ($(this).is(':checked')){
            $('.divLocalEmployment').remove();
            addLocalEmployment();
            $('.inputDisable').attr('disabled', true);
            $('.inputDisable').val("");
            $('#Addbtn_Employment_Local').attr('disabled', true);
            $('.btnDeleteLocalCompany').attr('disabled', true);
            
        }
        else{
            $('.inputDisable').removeAttr('disabled');
            $('#Addbtn_Employment_Local').removeAttr('disabled');
        }
    });
    // Employment Local End

    // Employment Abroad Start
    $("#Addbtn_Employment_Abroad").click(function(){
        var i = 0;
        addAbroadEmployment();
        $('.empabroadcompany').each(function(){
            $(this).removeAttr('id');
            $(this).attr('id', 'empabroadcompany_' + i);
            i++;
        });
        disableDeleteAbroadEmployment();

        $('.btnDeleteAbroadCompany').click(function(){
            $(this).closest('.divAbroadEmployment').remove();
            disableDeleteAbroadEmployment();
        });
    });

    $('#chkboxAbroadEmployment').change(function(){
        if ($(this).is(':checked')){
            $('.divAbroadEmployment').remove();
            addAbroadEmployment();
            $('.inputDisableAbroad').attr('disabled', true);
            $('.inputDisableAbroad').val("");
            $('#Addbtn_Employment_Abroad').attr('disabled', true);
            $('.btnDeleteAbroadCompany').attr('disabled', true);
        }
        else{
            $('.inputDisableAbroad').removeAttr('disabled');
            $('#Addbtn_Employment_Abroad').removeAttr('disabled');
        }
    });
    // Employment Abroad End



    // Loop over them and prevent submission
    Array.prototype.slice.call(personaldata_form)
      .forEach(function (personaldata_form) {
        personaldata_form.addEventListener('submit', function (event) {
          if (!personaldata_form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }else{
            event.preventDefault()
            //$('#formTab li a.active').parent().next().find('a').trigger("click")
            $('#formTab a[href="' + $('#formTab li a.active').parent().next().find('a').attr('href') + '"]').tab('show');
            console.log('Yeah')
          }
  
          personaldata_form.classList.add('was-validated')
        }, false)
      });
  });