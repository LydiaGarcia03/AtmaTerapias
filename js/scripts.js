/*!
* Start Bootstrap - Landing Page v6.0.5 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
function enableButton(buttonId, nameId){

	if(window.document.getElementById(nameId).value != ''){
		window.document.getElementById(buttonId).disabled = false;
	} else{
		window.document.getElementById(buttonId).disabled = true;
	}
}

function openWhatsApp(nameId){
	var name = window.document.getElementById(nameId).value;
	var link = 'https://api.whatsapp.com/send?phone=47999340994&text=Ol%C3%A1,%20me%20chamo%20#name#%20e%20gostaria%20de%20saber%20mais%20sobre%20a%20Atma%20Terapias.';
	var replaced_link = link.replace('#name#', name);

	window.open(replaced_link);
}