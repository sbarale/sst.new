try {
	elements = document.getElementsByClassName("tcpa_disclaimer");
	
	for (var i = 0; i < elements.length; ++i) {  
		
		elements[i].innerHTML="<label><input type=\"hidden\" id=\"leadid_tcpa_disclosure\"/>By submitting this request for information, I hereby provide my signature, expressly consenting to receive information by email, auto-dialer and/or pre-recorded telephone calls, and/or SMS messages from or on behalf of savings-scanner.com and its <a href=\"#\" onclick=\"window.open('http://www.tcopou.com/fulfillment/tubs.php','','scrollbars=yes,width=800,height=500');return false;\" style=\"font-style: italic\">fulfillment partners</a> and may agree to receive other <a href=\"#\" onclick=\"window.open('http://www.tcopou.com/fulfillment/offers.php','','scrollbars=yes,width=800,height=500');return false;\" style=\"font-style: italic\">offers</a> on my telephone number I provided above, including my wireless number, even if I am on a State or Federal Do-Not-Call list.  I understand consent is not a condition of purchase and that I may revoke my consent at any time. If you do not expressly consent for up to 4 companies to contact you, you can call (877) 483-8161 to complete your request with 1 company.</label>";
	}
	
}catch(e)
{
	console.log(e);
}
