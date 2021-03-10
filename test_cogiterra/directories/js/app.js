
// Elements //

let saveForm =document.getElementById('updateForm');
let updateForm=document.getElementById('saveForm');
let inputName = document.getElementById('nom');
let inputDateBorn = document.getElementById('date_naissance');
let inputTel = document.getElementById('tel');
let inputFax = document.getElementById('fax');
let inputEmail = document.getElementById('email');
let inputUrl = document.getElementById('url');
let inputAdress = document.getElementById('adresse');
let inputCity = document.getElementById('ville');
let inputCp = document.getElementById('cp');
let inputCountry = document.getElementById('pays');


// END Elements //


// Rules //

var nameRules = function(event){
	if(inputName.value.length < 20){
	    inputName.style.border = '2px solid green';
    }else{
	    inputName.style.border = '2px solid red';
	}

};

var telRules = function(event){
	if(inputTel.value.length == 10){
	    inputTel.style.border = '2px solid green';
    }else{
	    inputTel.style.border = '2px solid red';
	}

};

var faxRules = function(event){
	if(inputFax.value.length == 10){
	    inputFax.style.border = '2px solid green';
    }else{
	    inputFax.style.border = '2px solid red';
	}

};

var emailRules = function(event){
	if(inputEmail.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
	    inputEmail.style.border = '2px solid green';
    }else{
	    inputEmail.style.border = '2px solid red';
	}
};

var urlRules = function(event){
	if(inputUrl.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
		inputUrl.style.border = '2px solid green';
	}else{
		inputUrl.style.border = '2px solid red';
	}

};

var cpRules = function(event){
	if(inputCp.value.length == 5){
	    inputCp.style.border = '2px solid green';
    }else{
	    inputCp.style.border = '2px solid red';
	}
}



// END Rules //


// Triggers //
if(saveForm != null || updateForm != null){
	inputName.addEventListener('input', nameRules);
	inputTel.addEventListener('input', telRules);
	inputFax.addEventListener('input', faxRules);
	inputEmail.addEventListener('input', emailRules);
	inputUrl.addEventListener('input', urlRules);
	inputCp.addEventListener('input', cpRules);
}


// END Triggers //