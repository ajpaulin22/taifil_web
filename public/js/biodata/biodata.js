
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

