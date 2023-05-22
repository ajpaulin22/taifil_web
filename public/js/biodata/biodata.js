
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



(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var personaldata_form = document.querySelectorAll('#personaldata_form')
  
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
      })
  })()