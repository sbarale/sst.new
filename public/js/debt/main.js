
var loadingContent	= "<div class=\"formPanelHeader2\">\
						Checking if you qualify <div class=\"formArrow\"><img src=\"images/form-arrow.png\" style=\"padding-top: 9px;\" /></div>\
					</div>\
\
					<div class=\"formPanel\">\
						<div class=\"clear\" style=\"height: 70px;\"></div>\
						<div class=\"center\">\
							<div class=\"lrg\">One moment please...</div>\
							<br>\
							<img src=\"images/spinner.gif\">\
						</div>\
					</div>";

// Functions
function showPRODUCTDETAILS(n){
	"use strict"; // Uses stricter JS interpreter to ensure less bugs / better compatibility
	var i;
	
	for(i = 1; (i <= GLOBALS.infoNavSections); i++){
		document.getElementById('productdetails'+i).style.display = (i===n)?'block':'none';
	}
	// Stop default navigation
	return false;
}


// This function is disabled
function isNumberKey(evt){
	"use strict";
	/*var charCode = (evt.which || evt.keyCode);

	if(charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 46 && charCode !== 8){
		return false;
	}
	
	// Else...*/
	return true;
}


// This function is disabled
function isNOTNumberKey(evt){
	"use strict";
	/*var charCode = (evt.which || evt.keyCode);
	if (charCode >= 48 && charCode <= 57){
		return false;
	}
	
	// Else...*/
	return true;
}



function generateDefaultRules(form){
	"use strict";
	var formElement = document.getElementById(form),
		elements, i, currentItem, id;
	if(formElement === null){
		return;
	}

	elements = [formElement.getElementsByTagName("input"), formElement.getElementsByTagName("textarea"), formElement.getElementsByTagName("select")];
	for(i = 0; i < (elements[0].length + elements[1].length + elements[2].length); i++){
		if(i < elements[0].length){
			currentItem = elements[0][i];
		} else if(i < (elements[0].length + elements[1].length)){
			currentItem = elements[1][(i - elements[0].length)];
		} else{
			currentItem = elements[2][(i - elements[0].length - elements[1].length)];
		}

		if(currentItem !== undefined && currentItem.type !== "hidden" && currentItem.type !== "submit" && currentItem.disabled !== true){
			id = currentItem.id;
			// First check if the item exists
			if(FORM_RULES[form] === undefined){
				FORM_RULES[form]		= {};
			}
			if(FORM_RULES[form][id] === undefined){
				FORM_RULES[form][id]	= {};
			}
			// Set HTML requirements
			// Check required value
			if(currentItem.required){
				if(FORM_RULES[form][id].required === undefined){
					FORM_RULES[form][id].required = true;
				}
			}
			// Check type
			switch(currentItem.getAttribute("type")){
				case "email":
					if(FORM_RULES[form][id].type === undefined){
						FORM_RULES[form][id].type = "email";
					}
					break;
				case "number":
				case "range":
					if(FORM_RULES[form][id].type === undefined){
						FORM_RULES[form][id].type = "number";
					}
					// Check minimum value
					if(currentItem.min !== ""){
						if(FORM_RULES[form][id].min === undefined){
							FORM_RULES[form][id].min = currentItem.min;
						}
					}
					// Check maximum value
					if(currentItem.max !== ""){
						if(FORM_RULES[form][id].max === undefined){
							FORM_RULES[form][id].max = currentItem.max;
						}
					}
					// Check step
					if(currentItem.step !== ""){
						if(FORM_RULES[form][id].step === undefined){
							FORM_RULES[form][id].step = currentItem.step;
						}
					}
					break;
				case "tel":
					if(FORM_RULES[form][id].type === undefined){
						FORM_RULES[form][id].type = "telephone";
					}
					break;
			}
			// Check maximum length
			if(currentItem.maxLength !== -1){
				if(FORM_RULES[form][id].maxLength === undefined){
					FORM_RULES[form][id].maxLength = currentItem.maxLength;
				}
			}
		}
	}
}



function changeDisplay(code, element, form, recurse){
	"use strict";
	var elementDOM	= document.getElementById(element), 
		errorDOM	= document.getElementById(element + "Error"),
		hStyle		= FORM_RULES.rules.defaultTo.style.hidden,
		message		= FORM_RULES.rules.defaultTo.messages.defaultTo,
		styles, key, pairElement, eStyle;
	
	// If element doesn't have a display, return true if error code = 0, else false
	if(elementDOM === null || errorDOM === null){
		if(code === 0){
			return true;
		} else{
			return false;	
		}
	}
	
	if(recurse === undefined){
		recurse = true;	
	}
	
	// Set the message
	switch(true){
		// Form->Element->Code
		case(FORM_RULES.rules[form] !== undefined &&
				FORM_RULES.rules[form][element] !== undefined && 
				FORM_RULES.rules[form][element].messages !== undefined &&
				FORM_RULES.rules[form][element].messages[code] !== undefined):
			message = FORM_RULES.rules[form][element].messages[code];
		break;
		
		// Form->Element->Default
		case(FORM_RULES.rules[form] !== undefined &&
				FORM_RULES.rules[form][element] !== undefined && 
				FORM_RULES.rules[form][element].messages !== undefined &&
				FORM_RULES.rules[form][element].messages.defaultTo !== undefined):
			message = FORM_RULES.rules[form][element].messages.defaultTo;
		break;
		
		// Form->Code
		case(FORM_RULES.rules[form] !== undefined &&
				FORM_RULES.rules[form].messages !== undefined && 
				FORM_RULES.rules[form].messages[code] !== undefined):
			message = FORM_RULES.rules[form].messages[code];
		break;
		
		// Default->Code
		case (FORM_RULES.rules.defaultTo.messages[code] !== undefined):
			message = FORM_RULES.rules.defaultTo.messages[code];			
		break;
		
		//Form->Default
		case (FORM_RULES.rules[form] !== undefined &&
				FORM_RULES.rules[form].messages !== undefined && 
				FORM_RULES.rules[form].messages.defaultTo !== undefined):
			message = FORM_RULES.rules[form].messages.defaultTo;
		break;
	}
	errorDOM.innerHTML = message;
	
	// Set the style
	switch(true){
		// Form->Element
		case(FORM_RULES.rules[form] !== undefined &&
				FORM_RULES.rules[form][element] !== undefined && 
				FORM_RULES.rules[form][element].style !== undefined &&
				FORM_RULES.rules[form][element].style.hidden !== undefined):
			hStyle = FORM_RULES.rules[form][element].style.hidden;
		break;
		
		// Form
		case(FORM_RULES.rules[form] !== undefined && 
				FORM_RULES.rules[form].style !== undefined &&
				FORM_RULES.rules[form].style.hidden !== undefined):
			hStyle = FORM_RULES.rules[form].style.hidden;
		break;
	}
	
	// Set the element style
	if(FORM_RULES.rules.defaultTo.style !== undefined &&
				FORM_RULES.rules.defaultTo.style.element !== undefined){
		eStyle = FORM_RULES.rules.defaultTo.style.element;
	} else{
		eStyle = null;	
	}
	
	if(code === 0){
		/* If we succeeded, validate the pair element. If it failed, return without changing the style
		 * If it suceedeed, it will return true, and we continue as normal
		 * Recurse is set to ensure we don't infintive loop
		 */		if(recurse && FORM_RULES.rules[form] !== undefined && 
					FORM_RULES.rules[form].pairs !== undefined &&
					FORM_RULES.rules[form].pairs[element] !== undefined){
			if(!validateElement(null, FORM_RULES.rules[form].pairs[element], form, false)){
				return false;	
			}
		}
		styles = hStyle;
		styles = styles.split(" ");
		for(key in styles){
			if(styles[key].length !== 0){
				errorDOM.classList.add(styles[key]);
			}
		}
		
		if(eStyle !== null){
			styles = eStyle;
			styles = styles.split(" ");
			for(key in styles){
				if(styles[key].length !== 0){
					elementDOM.classList.remove(styles[key]);
				}
			}
		}
		return true;
	}
	
	// Else...
	// Set the pair to the error style
	if(FORM_RULES.rules[form] !== undefined && 
				FORM_RULES.rules[form].pairs !== undefined &&
				FORM_RULES.rules[form].pairs[element] !== undefined){
		pairElement = document.getElementById(FORM_RULES.rules[form].pairs[element] + "Error");
		styles = hStyle;
		styles = styles.split(" ");
		for(key in styles){
			if(styles[key].length !== 0){
				/** HOT-FIX, stop mobilehidden being removed */
				if(styles[key] !== "mobilehidden"){
					pairElement.classList.remove(styles[key]);
				}
			}
		}
	}
	
	styles = hStyle;
	styles = styles.split(" ");
	for(key in styles){
		if(styles[key].length !== 0){
			errorDOM.classList.remove(styles[key]);
		}
	}
	if(eStyle !== null){
		styles = eStyle;
		styles = styles.split(" ");
		for(key in styles){
			if(styles[key].length !== 0){
				elementDOM.classList.add(styles[key]);
			}
		}
	}
	return false;
}



function validateElement(eventObject, element, form, recurse){
	"use strict";
	var elementDOM, key, testvalue, errorCode = 0;
	
	if(element === undefined){
		elementDOM	= this;
		element		= this.id;
	} else{
		elementDOM = document.getElementById(element);
	}
	
	if(form === undefined){
		form = elementDOM.form.id;
	}
	
	if(elementDOM === undefined || form === undefined){
		return false;
	}
	
	testvalue = elementDOM.value.trim();

	for(key in FORM_RULES[form][element]){
		switch(key){
			case "required":
				if(testvalue.length === 0 || (elementDOM.type === "checkbox" && !elementDOM.checked)){
					errorCode = 1;
				}
			break;
			case "maxlength":
				if(FORM_RULES[form][element].maxlength !== undefined && testvalue.length > Number(FORM_RULES[form][element].maxlength)){
					errorCode = 2;
				}
			break;
			case "minlength":
				if(FORM_RULES[form][element].minlength !== undefined && testvalue.length < Number(FORM_RULES[form][element].minlength)){
					errorCode = 9;
				}
			break;
			case "min":
				if(FORM_RULES[form][element].min !== undefined && Number(testvalue) < Number(FORM_RULES[form][element].min)){
					errorCode = 3;
				}
			break;
			case "max":
				if(FORM_RULES[form][element].max !== undefined && Number(testvalue) > Number(FORM_RULES[form][element].max)){
					errorCode = 4;
				}
			break;
			case "step":
				if(FORM_RULES[form][element].step !== undefined && (Number(testvalue) % Number(FORM_RULES[form][element].step)) !== 0){
					errorCode = 5;
				}
			break;
			case "type":
				switch(FORM_RULES[form][element][key]){
					case "telephone":
						if(testvalue.length !== 0 && !(new RegExp("^[0][12378][0-9]{9}$").test(testvalue))){
							errorCode = 6;
						}
					break;
					case "email":
						if(testvalue.length !== 0 && !(new RegExp("^[A-Z0-9._%+-]+@[A-Z0-9.-]+\\.[A-Z]{2,4}$","i").test(testvalue))){
							errorCode = 7;
						}
					break;
					case "postcode":
						if(testvalue.length !== 0 && !(new RegExp("^[[A-Z]{1,2}[0-9R][0-9A-Z]?[ ]?[0-9][ABD-HJLNP-UW-Z]{2}$","i").test(testvalue))){
							errorCode = 8;
						}
					break;
					case "textOnly":
						if(testvalue.length !== 0 && !(new RegExp("^[A-Z' -]+$","i").test(testvalue))){
							errorCode = 10;	
						}
					break;
					default:
				}
			break;
		}
	}
	
	return changeDisplay(errorCode, element, form, recurse);
}



function hookElements(form){
	"use strict";
	var formElement = document.getElementById(form),
		elements, i, currentItem;
	if(formElement === null){
		return;
	}
	
	elements = [formElement.getElementsByTagName("input"), formElement.getElementsByTagName("textarea"), formElement.getElementsByTagName("select")];
	for(i = 0; i < (elements[0].length + elements[1].length + elements[2].length); i++){
		if(i < elements[0].length){
			currentItem = elements[0][i];
		} else if(i < (elements[0].length + elements[1].length)){
			currentItem = elements[1][(i - elements[0].length)];
		} else{
			currentItem = elements[2][(i - elements[0].length - elements[1].length)];
		}

		if(currentItem !== null && currentItem.type !== "hidden" && currentItem.type !== "submit"){
			currentItem.addEventListener("blur", validateElement, false);
		}
	}
}



	function build_query_string(nameArray, valueArray){
		"use strict";
		var i, s = "";
		
		if(nameArray.length !== valueArray.length || nameArray.length === 0){
			return "";	
		}
		
		for(i = 0; i < nameArray.length; i++){
			if(i !== 0){
				s = s + "&";	
			}
			s = s + nameArray[i] + "=" + valueArray[i];
		}

		return s;
	}

function ajaxRequest(names, values, url, callback){
	"use strict";
	var xmlhttp;

	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	} else{
		// < IE7 & other non-supported browsers
		return false;	
	}

	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState === 4 && xmlhttp.status === 200 && callback !== null){
			callback(xmlhttp.responseText);
        }
	};

	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(build_query_string(names, values));
}



	function sendContactResponse(response){
		"use strict";
		var jsonStr;
		
		try{
			jsonStr = JSON.parse(response);
		} catch(e){
			console.log(e);
		}

		if(jsonStr !== undefined && jsonStr.contactResult === 299){
			alert("Thank you, your message has been sent\n\nPlease note: Our office hours are Monday - Friday, 9am - 5.30pm. We endeavor to respond to your message within one working day, but please allow additional time for messages sent outside our office hours.");
		} else{
			alert("Sorry, an error occured whilst we tried send your message");	
		}	
	}




function sendContact(eventObject, form, success){
	"use strict";
	var names, values;
	if(!success){
		return;	
	}
	
	names 	= 	["ajax", "submitcontact", "contactName", "contactEmail", "contactPhone", "contactSubject", "message"];
	values 	= 	["true", "true",
					document.getElementById("contactName").value,
					document.getElementById("contactEmail").value,
					document.getElementById("contactPhone").value,
					document.getElementById("contactSubject").value,
					document.getElementById("message").value
				];
	
	ajaxRequest(names, values, "logic.php", function(response){sendContactResponse(response);})
	
	if(eventObject.preventDefault){
		eventObject.preventDefault();	
	}else if(window.event){ /* for ie8... */
		window.event.returnValue = false;
	}
}


function validateForm(eventObject, form){
	"use strict";
	var formElement, elements, i, currentItem, callAfter, success = true;
	if(form === undefined){
		formElement = this;
		form		= this.id;
	} else{
		formElement = document.getElementById(form);
	}

	if(formElement === null || formElement === undefined){
		return;
	}
	
	if(FORM_RULES.rules[form] !== undefined && 
		FORM_RULES.rules[form].submitHandler !== undefined){
		if(FORM_RULES.rules[form].submitHandler.override !== undefined &&
			FORM_RULES.rules[form].submitHandler.override === true){
			return window[FORM_RULES.rules[form].submitHandler.useFunction](eventObject, form);
		} else{
			callAfter = FORM_RULES.rules[form].submitHandler.useFunction;
		}
	}

	elements = [formElement.getElementsByTagName("input"), formElement.getElementsByTagName("textarea"), formElement.getElementsByTagName("select")];
	for(i = 0; i < (elements[0].length + elements[1].length + elements[2].length); i++){
		if(i < elements[0].length){
			currentItem = elements[0][i];
		} else if(i < (elements[0].length + elements[1].length)){
			currentItem = elements[1][(i - elements[0].length)];
		} else{
			currentItem = elements[2][(i - elements[0].length - elements[1].length)];
		}

		if(currentItem !== null && currentItem.type !== "hidden" && currentItem.type !== "submit" && currentItem.disabled !== true){
			if(validateElement(null, currentItem.id, form) === false){
				if(eventObject != null){
					if(eventObject.preventDefault){
						eventObject.preventDefault();	
					}else if(window.event){ /* for ie8... */
						window.event.returnValue = false;
					}
				}
				if(!GLOBALS.elementsHooked){
					hookElements(form);
					GLOBALS.elementsHooked = true;
					// Focus on first error
					currentItem.focus();
				}
				success = false;
			}
		}
	}
	if(callAfter !== undefined){
		success = window[callAfter](eventObject, form, success);
		if(!success){
			if(eventObject != null){
				if(eventObject.preventDefault){
					eventObject.preventDefault();	
				}else if(window.event){ /* for ie8... */
					window.event.returnValue = false;
				}
			}
		}
	}
	return success;
}



function hookValidator(form){
	"use strict";
	var formElement = document.getElementById(form);
	if(formElement === null){
		return;
	}
	
	formElement.addEventListener("submit", validateForm, false);
}



function showAlert(event, form, success){
	"use strict";
	if(success){
		return true;	
	} else{
		alert("There are some problems with your enquiry, please check where indicated in red.");
		return false;
	}
}



function showFancyAlert(event, form, success){
	"use strict";
	if(success){
		return true;	
	} else{
		 Modal.open({
			content: '<img onclick="Modal.close()" src="images/modal.png" width="500" height="308"><br>',
			draggable: false,
			hideClose: true
		});
		return false;
	}
}

function loadPageContent(content){
	document.getElementById("formContainer").innerHTML = content;
// 	console.log(content);
	eval(document.getElementById("formScript").innerHTML);
	for(var key in window.errors){
		if(window.errors.hasOwnProperty(key)){
			document.getElementById(key + "Error").classList.remove("hidden");
			document.getElementById(key + "Error").classList.remove("mobilehidden");
			switch(window.errors[key]){
				case 200:
					document.getElementById(key + "Error").innerHTML = "Please enter a longer value.";
				break;
				case 201:
					document.getElementById(key + "Error").innerHTML = "Please enter a shorter value.";
				break;
				case 202:
					document.getElementById(key + "Error").innerHTML = "Please enter a bigger value.";
				break;
				case 203:
					document.getElementById(key + "Error").innerHTML = "Please enter a smaller value.";
				break;
				case 204:
					document.getElementById(key + "Error").innerHTML = "Please enter a valid value.";
				break;
				case 205:
					document.getElementById(key + "Error").innerHTML = "Please enter a valid value.";
				break;
				case 206:
					switch(key){
						case "telephone1":
						case "telephone2":
							document.getElementById(key + "Error").innerHTML = "Your phone number failed our validation checks. Please check you entered a valid telephone number.";
							break;
						default:
							document.getElementById(key + "Error").innerHTML = "Please enter a valid value.";
							break;
					}
				break;
				case 296:
				case 298:
					document.getElementById(key + "Error").innerHTML = "Please enter a valid value.";
				break;
			}
		}	
	}
}

function ajaxReturn(response){
	try{
		jsonStr = JSON.parse(response);
	} catch(e){
		console.log(response);
		console.log(e);
	}
	//toegevoegd
	console.log(jsonStr.forminfo);

	
// 	var forminfo = "?debtLevel_h=" +jsonStr.debtLevel_h +"&numDebts_h="+jsonStr.numDebts_h;

//"st-t" => $st_t, "_st_custom_id" => $_st_custom_id , "_st_custom_value" => $_st_custom_value, "click_id" => $click_id , "behindOnBills" => $behindOnBills
//ajaxRequest([], [], "ajax/form" + jsonStr.redirect + ".php" + "?debtLevel=" +jsonStr.debtLevel +"&numDebts="+jsonStr.numDebts, loadPageContent);

	if(jsonStr !== undefined && jsonStr.redirect !== undefined){
		ajaxRequest([], [], "ajax/form" + jsonStr.redirect + ".php?" + jsonStr.forminfo, loadPageContent);
		if(jsonStr.errors !== undefined){
			window.errors = jsonStr.errors;
		} else{
			window.errors = {};	
		}
	} else if(jsonStr !== undefined && jsonStr.redirectFully !== undefined){
		window.location = jsonStr.redirectFully;
	} else{
		console.log(response);	
	}
}

function ajaxSubmitPage1(event, form, success){
	if(success){
		var names	= ["ajax", "referringPage", "debtLevel", "numDebts", "repayMonth", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							document.getElementById("referringPage").value,
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value, 
							document.getElementById("repayMonth").value, 
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		return showAlert(event, form, success);	
	}	
}

function checkBehindOnBills(event, form, success){
	var radios		= document.getElementsByName("behindOnBills"),
		newSuccess	= false;
	for(var i = 0; i < radios.length; i++){
		if(radios[i].checked){
			newSuccess	= true;
			newValue	= radios[i].value;
		}
	}
	//toegevoegd
	if(success && newSuccess){
		var names	= ["ajax", "referringPage", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"2",
							newValue,
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		document.getElementById("behindOnBillsError").classList.remove("hidden");
		document.getElementById("behindOnBillsError").classList.remove("mobilehidden");
		document.getElementById("behindOnBillsError").innerHTML = "Please select an option from the above.";
		return showAlert(event, form, false);
	}
}

function checkCreditRating(event, form, success){
	var radios		= document.getElementsByName("creditRating"),
		newSuccess	= false;
	for(var i = 0; i < radios.length; i++){
		if(radios[i].checked){
			newSuccess	= true;
			newValue	= radios[i].value;
		}
	}
	if(success && newSuccess){
		var names	= ["ajax", "referringPage", "creditRating", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"3",
							newValue,
							document.getElementById("behindOnBills").value, 
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		document.getElementById("creditRatingError").classList.remove("hidden");
		document.getElementById("creditRatingError").classList.remove("mobilehidden");
		document.getElementById("creditRatingError").innerHTML = "Please select an option from the above.";
		return showAlert(event, form, false);
	}
}

function checkEmploymentStatus(event, form, success){
	var radios		= document.getElementsByName("employmentStatus"),
		newSuccess	= false;
	for(var i = 0; i < radios.length; i++){
		if(radios[i].checked){
			newSuccess	= true;
			newValue	= radios[i].value;
		}
	}
	if(success && newSuccess){
		var names	= ["ajax", "referringPage", "employmentStatus", "creditRating", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"4",
							newValue,
							document.getElementById("creditRating").value,
							document.getElementById("behindOnBills").value, 
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		document.getElementById("employmentStatusError").classList.remove("hidden");
		document.getElementById("employmentStatusError").classList.remove("mobilehidden");
		document.getElementById("employmentStatusError").innerHTML = "Please select an option from the above.";
		return showAlert(event, form, false);
	}
}

function ajaxSubmitPage5(event, form, success){
	if(success){
		var names	= ["ajax", "referringPage", "houseNumber", "postcode", "employmentStatus", "creditRating", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"5",
							document.getElementById("houseNumber").value,
							document.getElementById("postcode").value,
							document.getElementById("employmentStatus").value,
							document.getElementById("creditRating").value,
							document.getElementById("behindOnBills").value, 
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		return showAlert(event, form, success);	
	}	
}

function ajaxSubmitPage6(event, form, success){
	if(success){
		var names	= ["ajax", "referringPage", "email" , "bestTimeToCall", "houseNumber", "postcode", "employmentStatus", "creditRating", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"6",
							document.getElementById("email").value,
							document.getElementById("bestTimeToCall").value,
							document.getElementById("houseNumber").value,
							document.getElementById("postcode").value,
							document.getElementById("employmentStatus").value,
							document.getElementById("creditRating").value,
							document.getElementById("behindOnBills").value, 
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		return showAlert(event, form, success);	
	}	
}

function ajaxSubmitPage8(event, form, success){
	if(success){
		var names	= ["ajax", "referringPage", "firstName", "lastName", "telephone1", "telephone2", "email" , "bestTimeToCall", "houseNumber", "postcode", "employmentStatus", "creditRating", "behindOnBills", "debtLevel", "numDebts", "st-t", "_st_custom_id" , "_st_custom_value" , "click_id", "fbid"],
			values	= ["true",
							"8",
							document.getElementById("firstName").value, 
							document.getElementById("lastName").value, 
							document.getElementById("telephone1").value, 
							document.getElementById("telephone2").value,
							document.getElementById("email").value,
							document.getElementById("bestTimeToCall").value,
							document.getElementById("houseNumber").value,
							document.getElementById("postcode").value,
							document.getElementById("employmentStatus").value,
							document.getElementById("creditRating").value,
							document.getElementById("behindOnBills").value, 
							document.getElementById("debtLevel").value, 
							document.getElementById("numDebts").value,  
							document.getElementById("st-t").value, 
							document.getElementById("_st_custom_id").value, 
							document.getElementById("_st_custom_value").value,
							document.getElementById("click_id").value,
							document.getElementById("fbid").value,
						];
		//document.getElementById("formContainer").innerHTML = loadingContent;
		ajaxRequest(names, values, "logic.php", ajaxReturn);
		return false; // We don't want the page to be submitted via normal post...
	} else{
		return showAlert(event, form, false);	
	}	
}

function loadPageVar (sVar) {
	return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(sVar).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));
}



function showTooltip(calledBy){
	"use strict";
	var tooltips = document.getElementsByClassName("tooltip"),
		clickedElement = null, 
		k;
		
	if(calledBy !== undefined){
		clickedElement = calledBy.id.substring(3);
	}
	
	
	for(k in tooltips){
		if(tooltips[k].id !== undefined){
			if(clickedElement !== null && tooltips[k].id.substring(2) == clickedElement){
				tooltips[k].classList.remove("hidden");
			} else{
				tooltips[k].classList.add("hidden");
			}
		}
	}
	
	return false;
}

function overrideSubmit(callingForm){
	"use strict";
	if(callingForm !== undefined && callingForm.form != undefined){
		var element = validateForm(null, callingForm.form.id);
		if(element === true){
			return true;	
		} else{
			var ele = document.getElementById(element);
			if(ele !== null){
				ele.focus();
			}
		}
	}
	return false;
}

function fadeOut(element){
	var op = 1;  // initial opacity
	var timer = setInterval(function(){
		if(op <= 0.1){
			clearInterval(timer);
			element.style.display = 'none';
		}
		element.style.opacity = op;
		element.style.filter = 'alpha(opacity=' + op * 100 + ")";
		op -= op * 0.1;
	}, 50);
}


function fadeIn(element){
	var op = 0.1;  // initial opacity
	var timer = setInterval(function(){
		if(op >= 1){
			clearInterval(timer);
		}
		element.style.opacity = op;
		element.style.filter = 'alpha(opacity=' + op * 100 + ")";
		if(op == 0.1){
			element.style.display = 'block';	
		}
		op += op * 0.1;
	}, 50);
}

function changeCountdown(element){
	var now = new Date(),
		eod = new Date(),
		time;
	eod.setHours(24,0,0,0);
	time 	= eod.getTime() - now.getTime();
	hour 	= Math.floor(time / 1000 / 60 / 60);
	minute	= Math.floor((time / 1000 / 60) - (hour * 60));
	second	= Math.floor((time / 1000) - (hour * 60 * 60) - (minute * 60));
	document.getElementById(element).innerHTML = hour + "hrs " + minute + "mins " + second + "secs";
}



function onPageLoad(device){
	"use strict";
	// Find the page we are on
	var i		= location.pathname.lastIndexOf("/") + 1,
		page	= location.pathname.substr(i, (location.pathname.lastIndexOf(".php") - i)),
		tooltips = document.getElementsByClassName("tooltip"),
		k;
	if(page === ""){
		GLOBALS.page = "index";
	} else{
		GLOBALS.page = page;
	}

	if(device !== undefined && device === "m"){
		GLOBALS.device = "m";
		for(k in tooltips){
			if(tooltips[k].id !== undefined){
				tooltips[k].classList.add("hidden");
			}
		}
	} else if(device !== undefined){
		GLOBALS.device = device;
	} else{
		GLOBALS.device = device;
	}
	
	generateDefaultRules(GLOBALS.page + "Form");
	hookValidator(GLOBALS.page + "Form");
	generateDefaultRules("contactForm");
	hookValidator("contactForm");
}









if(typeof console === "undefined"){
    console = {
        log: function(){ }
    };
}
/*
 * classList.js: Cross-browser full element.classList implementation.
 * 2012-11-15
 *
 * By Eli Grey, http://eligrey.com
 * Public Domain.
 * NO WARRANTY EXPRESSED OR IMPLIED. USE AT YOUR OWN RISK.
 */

/*global self, document, DOMException */

/*! @source http://purl.eligrey.com/github/classList.js/blob/master/classList.js*/

if (typeof document !== "undefined" && !("classList" in document.documentElement)) {

(function (view) {

"use strict";

if (!('HTMLElement' in view) && !('Element' in view)) return;

var
	  classListProp = "classList"
	, protoProp = "prototype"
	, elemCtrProto = (view.HTMLElement || view.Element)[protoProp]
	, objCtr = Object
	, strTrim = String[protoProp].trim || function () {
		return this.replace(/^\s+|\s+$/g, "");
	}
	, arrIndexOf = Array[protoProp].indexOf || function (item) {
		var
			  i = 0
			, len = this.length
		;
		for (; i < len; i++) {
			if (i in this && this[i] === item) {
				return i;
			}
		}
		return -1;
	}
	// Vendors: please allow content code to instantiate DOMExceptions
	, DOMEx = function (type, message) {
		this.name = type;
		this.code = DOMException[type];
		this.message = message;
	}
	, checkTokenAndGetIndex = function (classList, token) {
		if (token === "") {
			throw new DOMEx(
				  "SYNTAX_ERR"
				, "An invalid or illegal string was specified"
			);
		}
		if (/\s/.test(token)) {
			throw new DOMEx(
				  "INVALID_CHARACTER_ERR"
				, "String contains an invalid character"
			);
		}
		return arrIndexOf.call(classList, token);
	}
	, ClassList = function (elem) {
		var
			  trimmedClasses = strTrim.call(elem.className)
			, classes = trimmedClasses ? trimmedClasses.split(/\s+/) : []
			, i = 0
			, len = classes.length
		;
		for (; i < len; i++) {
			this.push(classes[i]);
		}
		this._updateClassName = function () {
			elem.className = this.toString();
		};
	}
	, classListProto = ClassList[protoProp] = []
	, classListGetter = function () {
		return new ClassList(this);
	}
;
// Most DOMException implementations don't allow calling DOMException's toString()
// on non-DOMExceptions. Error's toString() is sufficient here.
DOMEx[protoProp] = Error[protoProp];
classListProto.item = function (i) {
	return this[i] || null;
};
classListProto.contains = function (token) {
	token += "";
	return checkTokenAndGetIndex(this, token) !== -1;
};
classListProto.add = function () {
	var
		  tokens = arguments
		, i = 0
		, l = tokens.length
		, token
		, updated = false
	;
	do {
		token = tokens[i] + "";
		if (checkTokenAndGetIndex(this, token) === -1) {
			this.push(token);
			updated = true;
		}
	}
	while (++i < l);

	if (updated) {
		this._updateClassName();
	}
};
classListProto.remove = function () {
	var
		  tokens = arguments
		, i = 0
		, l = tokens.length
		, token
		, updated = false
	;
	do {
		token = tokens[i] + "";
		var index = checkTokenAndGetIndex(this, token);
		if (index !== -1) {
			this.splice(index, 1);
			updated = true;
		}
	}
	while (++i < l);

	if (updated) {
		this._updateClassName();
	}
};
classListProto.toggle = function (token, forse) {
	token += "";

	var
		  result = this.contains(token)
		, method = result ?
			forse !== true && "remove"
		:
			forse !== false && "add"
	;

	if (method) {
		this[method](token);
	}

	return !result;
};
classListProto.toString = function () {
	return this.join(" ");
};

if (objCtr.defineProperty) {
	var classListPropDesc = {
		  get: classListGetter
		, enumerable: true
		, configurable: true
	};
	try {
		objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
	} catch (ex) { // IE 8 doesn't support enumerable:true
		if (ex.number === -0x7FF5EC54) {
			classListPropDesc.enumerable = false;
			objCtr.defineProperty(elemCtrProto, classListProp, classListPropDesc);
		}
	}
} else if (objCtr[protoProp].__defineGetter__) {
	elemCtrProto.__defineGetter__(classListProp, classListGetter);
}

}(self));

}

/*
 * xEventListener.js: Cross-browser add/removeEventListener implementation
 *
 * From: https://developer.mozilla.org/en-US/docs/Web/API/EventTarget.removeEventListener
 */
 
if (!Element.prototype.addEventListener) {
  var oListeners = {};
  function runListeners(oEvent) {
    if (!oEvent) { oEvent = window.event; }
    for (var iLstId = 0, iElId = 0, oEvtListeners = oListeners[oEvent.type]; iElId < oEvtListeners.aEls.length; iElId++) {
      if (oEvtListeners.aEls[iElId] === this) {
        for (; iLstId < oEvtListeners.aEvts[iElId].length; iLstId++) { oEvtListeners.aEvts[iElId][iLstId].call(this, oEvent); }
        break;
      }
    }
  }
  Element.prototype.addEventListener = function (sEventType, fListener /*, useCapture (will be ignored!) */) {
    if (oListeners.hasOwnProperty(sEventType)) {
      var oEvtListeners = oListeners[sEventType];
      for (var nElIdx = -1, iElId = 0; iElId < oEvtListeners.aEls.length; iElId++) {
        if (oEvtListeners.aEls[iElId] === this) { nElIdx = iElId; break; }
      }
      if (nElIdx === -1) {
        oEvtListeners.aEls.push(this);
        oEvtListeners.aEvts.push([fListener]);
        this["on" + sEventType] = runListeners;
      } else {
        var aElListeners = oEvtListeners.aEvts[nElIdx];
        if (this["on" + sEventType] !== runListeners) {
          aElListeners.splice(0);
          this["on" + sEventType] = runListeners;
        }
        for (var iLstId = 0; iLstId < aElListeners.length; iLstId++) {
          if (aElListeners[iLstId] === fListener) { return; }
        }     
        aElListeners.push(fListener);
      }
    } else {
      oListeners[sEventType] = { aEls: [this], aEvts: [ [fListener] ] };
      this["on" + sEventType] = runListeners;
    }
  };
  Element.prototype.removeEventListener = function (sEventType, fListener /*, useCapture (will be ignored!) */) {
    if (!oListeners.hasOwnProperty(sEventType)) { return; }
    var oEvtListeners = oListeners[sEventType];
    for (var nElIdx = -1, iElId = 0; iElId < oEvtListeners.aEls.length; iElId++) {
      if (oEvtListeners.aEls[iElId] === this) { nElIdx = iElId; break; }
    }
    if (nElIdx === -1) { return; }
    for (var iLstId = 0, aElListeners = oEvtListeners.aEvts[nElIdx]; iLstId < aElListeners.length; iLstId++) {
      if (aElListeners[iLstId] === fListener) { aElListeners.splice(iLstId, 1); }
    }
  };
}

/*
 * getElementsByClassName.js: Cross-browser getElementsByClassName implementation
 *
 * From: http://www.webmuse.co.uk/blog/custom-getelementsbyclassname-function-for-all-browsers/
 */
if(!document.getElementsByClassName){
	document.getElementsByClassName = function(classname){
		var elArray = [];
		var tmp 	= document.getElementsByTagName("*");
		var regex 	= new RegExp("(^|\\s)" + classname + "(\\s|$)");
		for(var i = 0; i < tmp.length; i++){
			if(regex.test(tmp[i].className)){
				elArray.push(tmp[i]);
			}
		}

        return elArray;
    };
}

/* 
 * The MIT License
 *
 * Copyright (c) 2012 James Allardice
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), 
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, 
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

// Defines the global Placeholders object along with various utility methods
(function (global) {

    "use strict";

    // Cross-browser DOM event binding
    function addEventListener(elem, event, fn) {
        if (elem.addEventListener) {
            return elem.addEventListener(event, fn, false);
        }
        if (elem.attachEvent) {
            return elem.attachEvent("on" + event, fn);
        }
    }

    // Check whether an item is in an array (we don't use Array.prototype.indexOf so we don't clobber any existing polyfills - this is a really simple alternative)
    function inArray(arr, item) {
        var i, len;
        for (i = 0, len = arr.length; i < len; i++) {
            if (arr[i] === item) {
                return true;
            }
        }
        return false;
    }

    // Move the caret to the index position specified. Assumes that the element has focus
    function moveCaret(elem, index) {
        var range;
        if (elem.createTextRange) {
            range = elem.createTextRange();
            range.move("character", index);
            range.select();
        } else if (elem.selectionStart) {
            elem.focus();
            elem.setSelectionRange(index, index);
        }
    }

    // Attempt to change the type property of an input element
    function changeType(elem, type) {
        try {
            elem.type = type;
            return true;
        } catch (e) {
            // You can't change input type in IE8 and below
            return false;
        }
    }

    // Expose public methods
    global.Placeholders = {
        Utils: {
            addEventListener: addEventListener,
            inArray: inArray,
            moveCaret: moveCaret,
            changeType: changeType
        }
    };

}(this));

(function (global) {

    "use strict";

    var validTypes = [
            "text",
            "search",
            "url",
            "tel",
            "email",
            "password",
            "number",
            "textarea"
        ],

        // The list of keycodes that are not allowed when the polyfill is configured to hide-on-input
        badKeys = [

            // The following keys all cause the caret to jump to the end of the input value
            27, // Escape
            33, // Page up
            34, // Page down
            35, // End
            36, // Home

            // Arrow keys allow you to move the caret manually, which should be prevented when the placeholder is visible
            37, // Left
            38, // Up
            39, // Right
            40, // Down

            // The following keys allow you to modify the placeholder text by removing characters, which should be prevented when the placeholder is visible
            8, // Backspace
            46 // Delete
        ],

        // Styling variables
        placeholderStyleColor = "#ccc",
        placeholderClassName = "placeholdersjs",
        classNameRegExp = new RegExp("(?:^|\\s)" + placeholderClassName + "(?!\\S)"),

        // These will hold references to all elements that can be affected. NodeList objects are live, so we only need to get those references once
        inputs, textareas,

        // The various data-* attributes used by the polyfill
        ATTR_CURRENT_VAL = "data-placeholder-value",
        ATTR_ACTIVE = "data-placeholder-active",
        ATTR_INPUT_TYPE = "data-placeholder-type",
        ATTR_FORM_HANDLED = "data-placeholder-submit",
        ATTR_EVENTS_BOUND = "data-placeholder-bound",
        ATTR_OPTION_FOCUS = "data-placeholder-focus",
        ATTR_OPTION_LIVE = "data-placeholder-live",
        ATTR_MAXLENGTH = "data-placeholder-maxlength",

        // Various other variables used throughout the rest of the script
        test = document.createElement("input"),
        head = document.getElementsByTagName("head")[0],
        root = document.documentElement,
        Placeholders = global.Placeholders,
        Utils = Placeholders.Utils,
        hideOnInput, liveUpdates, keydownVal, styleElem, styleRules, placeholder, timer, form, elem, len, i;

    // No-op (used in place of public methods when native support is detected)
    function noop() {}

    // Avoid IE9 activeElement of death when an iframe is used.
    // More info:
    // http://bugs.jquery.com/ticket/13393
    // https://github.com/jquery/jquery/commit/85fc5878b3c6af73f42d61eedf73013e7faae408
    function safeActiveElement() {
        try {
            return document.activeElement;
        } catch (err) {}
    }

    // Hide the placeholder value on a single element. Returns true if the placeholder was hidden and false if it was not (because it wasn't visible in the first place)
    function hidePlaceholder(elem, keydownValue) {
        var type,
            maxLength,
            valueChanged = (!!keydownValue && elem.value !== keydownValue),
            isPlaceholderValue = (elem.value === elem.getAttribute(ATTR_CURRENT_VAL));

        if ((valueChanged || isPlaceholderValue) && elem.getAttribute(ATTR_ACTIVE) === "true") {
            elem.removeAttribute(ATTR_ACTIVE);
            elem.value = elem.value.replace(elem.getAttribute(ATTR_CURRENT_VAL), "");
            elem.className = elem.className.replace(classNameRegExp, "");

            // Restore the maxlength value
            maxLength = elem.getAttribute(ATTR_MAXLENGTH);
            if (parseInt(maxLength, 10) >= 0) { // Old FF returns -1 if attribute not set (see GH-56)
                elem.setAttribute("maxLength", maxLength);
                elem.removeAttribute(ATTR_MAXLENGTH);
            }

            // If the polyfill has changed the type of the element we need to change it back
            type = elem.getAttribute(ATTR_INPUT_TYPE);
            if (type) {
                elem.type = type;
            }
            return true;
        }
        return false;
    }

    // Show the placeholder value on a single element. Returns true if the placeholder was shown and false if it was not (because it was already visible)
    function showPlaceholder(elem) {
        var type,
            maxLength,
            val = elem.getAttribute(ATTR_CURRENT_VAL);
        if (elem.value === "" && val) {
            elem.setAttribute(ATTR_ACTIVE, "true");
            elem.value = val;
            elem.className += " " + placeholderClassName;

            // Store and remove the maxlength value
            maxLength = elem.getAttribute(ATTR_MAXLENGTH);
            if (!maxLength) {
                elem.setAttribute(ATTR_MAXLENGTH, elem.maxLength);
                elem.removeAttribute("maxLength");
            }

            // If the type of element needs to change, change it (e.g. password inputs)
            type = elem.getAttribute(ATTR_INPUT_TYPE);
            if (type) {
                elem.type = "text";
            } else if (elem.type === "password") {
                if (Utils.changeType(elem, "text")) {
                    elem.setAttribute(ATTR_INPUT_TYPE, "password");
                }
            }
            return true;
        }
        return false;
    }

    function handleElem(node, callback) {

        var handleInputsLength, handleTextareasLength, handleInputs, handleTextareas, elem, len, i;

        // Check if the passed in node is an input/textarea (in which case it can't have any affected descendants)
        if (node && node.getAttribute(ATTR_CURRENT_VAL)) {
            callback(node);
        } else {

            // If an element was passed in, get all affected descendants. Otherwise, get all affected elements in document
            handleInputs = node ? node.getElementsByTagName("input") : inputs;
            handleTextareas = node ? node.getElementsByTagName("textarea") : textareas;

            handleInputsLength = handleInputs ? handleInputs.length : 0;
            handleTextareasLength = handleTextareas ? handleTextareas.length : 0;

            // Run the callback for each element
            for (i = 0, len = handleInputsLength + handleTextareasLength; i < len; i++) {
                elem = i < handleInputsLength ? handleInputs[i] : handleTextareas[i - handleInputsLength];
                callback(elem);
            }
        }
    }

    // Return all affected elements to their normal state (remove placeholder value if present)
    function disablePlaceholders(node) {
        handleElem(node, hidePlaceholder);
    }

    // Show the placeholder value on all appropriate elements
    function enablePlaceholders(node) {
        handleElem(node, showPlaceholder);
    }

    // Returns a function that is used as a focus event handler
    function makeFocusHandler(elem) {
        return function () {

            // Only hide the placeholder value if the (default) hide-on-focus behaviour is enabled
            if (hideOnInput && elem.value === elem.getAttribute(ATTR_CURRENT_VAL) && elem.getAttribute(ATTR_ACTIVE) === "true") {

                // Move the caret to the start of the input (this mimics the behaviour of all browsers that do not hide the placeholder on focus)
                Utils.moveCaret(elem, 0);

            } else {

                // Remove the placeholder
                hidePlaceholder(elem);
            }
        };
    }

    // Returns a function that is used as a blur event handler
    function makeBlurHandler(elem) {
        return function () {
            showPlaceholder(elem);
        };
    }

    // Functions that are used as a event handlers when the hide-on-input behaviour has been activated - very basic implementation of the "input" event
    function makeKeydownHandler(elem) {
        return function (e) {
            keydownVal = elem.value;

            //Prevent the use of the arrow keys (try to keep the cursor before the placeholder)
            if (elem.getAttribute(ATTR_ACTIVE) === "true") {
                if (keydownVal === elem.getAttribute(ATTR_CURRENT_VAL) && Utils.inArray(badKeys, e.keyCode)) {
                    if (e.preventDefault) {
                        e.preventDefault();
                    }
                    return false;
                }
            }
        };
    }
    function makeKeyupHandler(elem) {
        return function () {
            hidePlaceholder(elem, keydownVal);

            // If the element is now empty we need to show the placeholder
            if (elem.value === "") {
                elem.blur();
                Utils.moveCaret(elem, 0);
            }
        };
    }
    function makeClickHandler(elem) {
        return function () {
            if (elem === safeActiveElement() && elem.value === elem.getAttribute(ATTR_CURRENT_VAL) && elem.getAttribute(ATTR_ACTIVE) === "true") {
                Utils.moveCaret(elem, 0);
            }
        };
    }

    // Returns a function that is used as a submit event handler on form elements that have children affected by this polyfill
    function makeSubmitHandler(form) {
        return function () {

            // Turn off placeholders on all appropriate descendant elements
            disablePlaceholders(form);
        };
    }

    // Bind event handlers to an element that we need to affect with the polyfill
    function newElement(elem) {

        // If the element is part of a form, make sure the placeholder string is not submitted as a value
        if (elem.form) {
            form = elem.form;

            // If the type of the property is a string then we have a "form" attribute and need to get the real form
            if (typeof form === "string") {
                form = document.getElementById(form);
            }

            // Set a flag on the form so we know it's been handled (forms can contain multiple inputs)
            if (!form.getAttribute(ATTR_FORM_HANDLED)) {
                Utils.addEventListener(form, "submit", makeSubmitHandler(form));
                form.setAttribute(ATTR_FORM_HANDLED, "true");
            }
        }

        // Bind event handlers to the element so we can hide/show the placeholder as appropriate
        Utils.addEventListener(elem, "focus", makeFocusHandler(elem));
        Utils.addEventListener(elem, "blur", makeBlurHandler(elem));

        // If the placeholder should hide on input rather than on focus we need additional event handlers
        if (hideOnInput) {
            Utils.addEventListener(elem, "keydown", makeKeydownHandler(elem));
            Utils.addEventListener(elem, "keyup", makeKeyupHandler(elem));
            Utils.addEventListener(elem, "click", makeClickHandler(elem));
        }

        // Remember that we've bound event handlers to this element
        elem.setAttribute(ATTR_EVENTS_BOUND, "true");
        elem.setAttribute(ATTR_CURRENT_VAL, placeholder);

        // If the element doesn't have a value and is not focussed, set it to the placeholder string
        if (hideOnInput || elem !== safeActiveElement()) {
            showPlaceholder(elem);
        }
    }

    Placeholders.nativeSupport = test.placeholder !== void 0;

    if (!Placeholders.nativeSupport) {

        // Get references to all the input and textarea elements currently in the DOM (live NodeList objects to we only need to do this once)
        inputs = document.getElementsByTagName("input");
        textareas = document.getElementsByTagName("textarea");

        // Get any settings declared as data-* attributes on the root element (currently the only options are whether to hide the placeholder on focus or input and whether to auto-update)
        hideOnInput = root.getAttribute(ATTR_OPTION_FOCUS) === "false";
        liveUpdates = root.getAttribute(ATTR_OPTION_LIVE) !== "false";

        // Create style element for placeholder styles (instead of directly setting style properties on elements - allows for better flexibility alongside user-defined styles)
        styleElem = document.createElement("style");
        styleElem.type = "text/css";

        // Create style rules as text node
        styleRules = document.createTextNode("." + placeholderClassName + " { color:" + placeholderStyleColor + "; }");

        // Append style rules to newly created stylesheet
        if (styleElem.styleSheet) {
            styleElem.styleSheet.cssText = styleRules.nodeValue;
        } else {
            styleElem.appendChild(styleRules);
        }

        // Prepend new style element to the head (before any existing stylesheets, so user-defined rules take precedence)
        head.insertBefore(styleElem, head.firstChild);

        // Set up the placeholders
        for (i = 0, len = inputs.length + textareas.length; i < len; i++) {
            elem = i < inputs.length ? inputs[i] : textareas[i - inputs.length];

            // Get the value of the placeholder attribute, if any. IE10 emulating IE7 fails with getAttribute, hence the use of the attributes node
            placeholder = elem.attributes.placeholder;
            if (placeholder) {

                // IE returns an empty object instead of undefined if the attribute is not present
                placeholder = placeholder.nodeValue;

                // Only apply the polyfill if this element is of a type that supports placeholders, and has a placeholder attribute with a non-empty value
                if (placeholder && Utils.inArray(validTypes, elem.type)) {
                    newElement(elem);
                }
            }
        }

        // If enabled, the polyfill will repeatedly check for changed/added elements and apply to those as well
        timer = setInterval(function () {
            for (i = 0, len = inputs.length + textareas.length; i < len; i++) {
                elem = i < inputs.length ? inputs[i] : textareas[i - inputs.length];

                // Only apply the polyfill if this element is of a type that supports placeholders, and has a placeholder attribute with a non-empty value
                placeholder = elem.attributes.placeholder;
                if (placeholder) {
                    placeholder = placeholder.nodeValue;
                    if (placeholder && Utils.inArray(validTypes, elem.type)) {

                        // If the element hasn't had event handlers bound to it then add them
                        if (!elem.getAttribute(ATTR_EVENTS_BOUND)) {
                            newElement(elem);
                        }

                        // If the placeholder value has changed or not been initialised yet we need to update the display
                        if (placeholder !== elem.getAttribute(ATTR_CURRENT_VAL) || (elem.type === "password" && !elem.getAttribute(ATTR_INPUT_TYPE))) {

                            // Attempt to change the type of password inputs (fails in IE < 9)
                            if (elem.type === "password" && !elem.getAttribute(ATTR_INPUT_TYPE) && Utils.changeType(elem, "text")) {
                                elem.setAttribute(ATTR_INPUT_TYPE, "password");
                            }

                            // If the placeholder value has changed and the placeholder is currently on display we need to change it
                            if (elem.value === elem.getAttribute(ATTR_CURRENT_VAL)) {
                                elem.value = placeholder;
                            }

                            // Keep a reference to the current placeholder value in case it changes via another script
                            elem.setAttribute(ATTR_CURRENT_VAL, placeholder);
                        }
                    }
                } else if (elem.getAttribute(ATTR_ACTIVE)) {
                    hidePlaceholder(elem);
                    elem.removeAttribute(ATTR_CURRENT_VAL);
                }
            }

            // If live updates are not enabled cancel the timer
            if (!liveUpdates) {
                clearInterval(timer);
            }
        }, 100);
    }

    Utils.addEventListener(global, "beforeunload", function () {
        Placeholders.disable();
    });

    // Expose public methods
    Placeholders.disable = Placeholders.nativeSupport ? noop : disablePlaceholders;
    Placeholders.enable = Placeholders.nativeSupport ? noop : enablePlaceholders;

}(this));

/*!
 * jsModal - A pure JavaScript modal dialog engine v1.0d
 * http://jsmodal.com/
 *
 * Author: Henry Rune Tang Kai <henry@henrys.se>
 *
 * (c) Copyright 2013 Henry Tang Kai.
 *
 * License: http://www.opensource.org/licenses/mit-license.php
 *
 * Date: 2013-7-11
 */

var Modal = (function () {
        "use strict";
        /*global document: false */
        /*global window: false */

         // create object method
        var method = {},
            settings = {},

            modalOverlay = document.createElement('div'),
            modalContainer = document.createElement('div'),
            modalHeader = document.createElement('div'),
            modalContent = document.createElement('div'),
            modalClose = document.createElement('div'),

            centerModal,

            closeModalEvent,

            defaultSettings = {
                width: 'auto',
                height: 'auto',
                lock: false,
                hideClose: false,
                draggable: false,
                closeAfter: 0,
                openCallback: false,
                closeCallback: false,
                hideOverlay: false
            };

        // Open the modal
        method.open = function (parameters) {
            settings.width = parameters.width || defaultSettings.width;
            settings.height = parameters.height || defaultSettings.height;
            settings.lock = parameters.lock || defaultSettings.lock;
            settings.hideClose = parameters.hideClose || defaultSettings.hideClose;
            settings.draggable = parameters.draggable || defaultSettings.draggable;
            settings.closeAfter = parameters.closeAfter || defaultSettings.closeAfter;
            settings.closeCallback = parameters.closeCallback || defaultSettings.closeCallback;
            settings.openCallback = parameters.openCallback || defaultSettings.openCallback;
            settings.hideOverlay = parameters.hideOverlay || defaultSettings.hideOverlay;

            centerModal = function () {
                method.center({});
            };

            if (parameters.content && !parameters.ajaxContent) {
                modalContent.innerHTML = parameters.content;
            } else if (parameters.ajaxContent && !parameters.content) {
                modalContainer.className = 'modal-loading';
                method.ajax(parameters.ajaxContent, function insertAjaxResult(ajaxResult) {
                    modalContent.innerHTML = ajaxResult;
                });
            } else {
                modalContent.innerHTML = '';
            }

            modalContainer.style.width = settings.width;
            modalContainer.style.height = settings.height;

            if (settings.lock || settings.hideClose) {
                modalClose.style.display = 'none';
            }
            if (!settings.hideOverlay) {
                modalOverlay.style.display = 'block';
            }
            modalContainer.style.display = 'block';
            
            method.center({});

            document.onkeypress = function (e) {
                if (e.keyCode === 27 && settings.lock !== true) {
                    method.close();
                }
            };

            modalClose.onclick = function () {
                if (!settings.hideClose) {
                    method.close();
                } else {
                    return false;
                }
            };
            modalOverlay.onclick = function () {
                if (!settings.lock) {
                    method.close();
                } else {
                    return false;
                }
            };

            if (window.addEventListener) {
                window.addEventListener('resize', centerModal, false);
            } else if (window.attachEvent) {
                window.attachEvent('onresize', centerModal);
            }

            if (settings.draggable) {
                modalHeader.style.cursor = 'move';
                modalHeader.onmousedown = function (e) {
                    method.drag(e);
                    return false;
                };
            } else {
                modalHeader.onmousedown = function () {
                    return false;
                };
            }
            if (settings.closeAfter > 0) {
                closeModalEvent = window.setTimeout(function () {
                    method.close();
                }, settings.closeAfter * 1000);
            }
            if (settings.openCallback) {
                settings.openCallback();
            }
        };

        // Drag the modal
        method.drag = function (e) {
            var xPosition = (window.event !== undefined) ? window.event.clientX : e.clientX,
                yPosition = (window.event !== undefined) ? window.event.clientY : e.clientY,
                differenceX = xPosition - modalContainer.offsetLeft,
                differenceY = yPosition - modalContainer.offsetTop;

            document.onmousemove = function (e) {
                xPosition = (window.event !== undefined) ? window.event.clientX : e.clientX;
                yPosition = (window.event !== undefined) ? window.event.clientY : e.clientY;

                modalContainer.style.left = ((xPosition - differenceX) > 0) ? (xPosition - differenceX) + 'px' : 0;
                modalContainer.style.top = ((yPosition - differenceY) > 0) ? (yPosition - differenceY) + 'px' : 0;

                document.onmouseup = function () {
                    window.document.onmousemove = null;
                };
            };
        };

        // Perform XMLHTTPRequest
        method.ajax = function (url, successCallback) {
            var i,
                XMLHttpRequestObject = false,
                XMLHttpRequestObjects = [
                    function () {
                        return new window.XMLHttpRequest();  // IE7+, Firefox, Chrome, Opera, Safari
                    },
                    function () {
                        return new window.ActiveXObject('Msxml2.XMLHTTP.6.0');
                    },
                    function () {
                        return new window.ActiveXObject('Msxml2.XMLHTTP.3.0');
                    },
                    function () {
                        return new window.ActiveXObject('Msxml2.XMLHTTP');
                    }
                ];

            for (i = 0; i < XMLHttpRequestObjects.length; i += 1) {
                try {
                    XMLHttpRequestObject = XMLHttpRequestObjects[i]();
                } catch (ignore) {
                }

                if (XMLHttpRequestObject !== false) {
                    break;
                }
            }

            XMLHttpRequestObject.open('GET', url, true);

            XMLHttpRequestObject.onreadystatechange = function () {
                if (XMLHttpRequestObject.readyState === 4) {
                    if (XMLHttpRequestObject.status === 200) {
                        successCallback(XMLHttpRequestObject.responseText);
                        modalContainer.removeAttribute('class');
                    } else {
                        successCallback(XMLHttpRequestObject.responseText);
                        modalContainer.removeAttribute('class');
                    }
                }
            };

            XMLHttpRequestObject.send(null);
        };


        // Close the modal
        method.close = function () {
            modalContent.innerHTML = '';
            modalOverlay.setAttribute('style', '');
            modalOverlay.style.cssText = '';
            modalOverlay.style.display = 'none';
            modalContainer.setAttribute('style', '');
            modalContainer.style.cssText = '';
            modalContainer.style.display = 'none';
            modalHeader.style.cursor = 'default';
            modalClose.setAttribute('style', '');
            modalClose.style.cssText = '';

            if (closeModalEvent) {
                window.clearTimeout(closeModalEvent);
            }

            if (settings.closeCallback) {
                settings.closeCallback();
            }

            if (window.removeEventListener) {
                window.removeEventListener('resize', centerModal, false);
            } else if (window.detachEvent) {
                window.detachEvent('onresize', centerModal);
            }
        };

        // Center the modal in the viewport
        method.center = function (parameters) {
            var documentHeight = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight),

                modalWidth = Math.max(modalContainer.clientWidth, modalContainer.offsetWidth),
                modalHeight = Math.max(modalContainer.clientHeight, modalContainer.offsetHeight),

                browserWidth = 0,
                browserHeight = 0,

                amountScrolledX = 0,
                amountScrolledY = 0;

            if (typeof (window.innerWidth) === 'number') {
                browserWidth = window.innerWidth;
                browserHeight = window.innerHeight;
            } else if (document.documentElement && document.documentElement.clientWidth) {
                browserWidth = document.documentElement.clientWidth;
                browserHeight = document.documentElement.clientHeight;
            }

            if (typeof (window.pageYOffset) === 'number') {
                amountScrolledY = window.pageYOffset;
                amountScrolledX = window.pageXOffset;
            } else if (document.body && document.body.scrollLeft) {
                amountScrolledY = document.body.scrollTop;
                amountScrolledX = document.body.scrollLeft;
            } else if (document.documentElement && document.documentElement.scrollLeft) {
                amountScrolledY = document.documentElement.scrollTop;
                amountScrolledX = document.documentElement.scrollLeft;
            }

            if (!parameters.horizontalOnly) {
                modalContainer.style.top = amountScrolledY + (browserHeight / 2) - (modalHeight / 2) + 'px';
            }

            modalContainer.style.left = amountScrolledX + (browserWidth / 2) - (modalWidth / 2) + 'px';

            modalOverlay.style.height = documentHeight + 'px';
            modalOverlay.style.width = '100%';
        };

        // Set the id's, append the nested elements, and append the complete modal to the document body
        modalOverlay.setAttribute('id', 'modal-overlay');
        modalContainer.setAttribute('id', 'modal-container');
        modalHeader.setAttribute('id', 'modal-header');
        modalContent.setAttribute('id', 'modal-content');
        modalClose.setAttribute('id', 'modal-close');
        modalHeader.appendChild(modalClose);
        modalContainer.appendChild(modalHeader);
        modalContainer.appendChild(modalContent);

        modalOverlay.style.display = 'none';
        modalContainer.style.display = 'none';

        if (window.addEventListener) {
            window.addEventListener('load', function () {
                document.body.appendChild(modalOverlay);
                document.body.appendChild(modalContainer);
            }, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', function () {
                document.body.appendChild(modalOverlay);
                document.body.appendChild(modalContainer);
            });
        }

        return method;
    }());
