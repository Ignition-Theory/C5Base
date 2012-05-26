ccmValidateBlockForm = function() {
	
	if ($('#field_1_textbox_text').val() == '') {
		ccm_addError('Missing required text: First Name');
	}
	
	return false;
}


refreshTypeControls = function() {
	var cardType = $('#cardType').val();
	$('#orgName').toggle(cardType == 0);
	$('#psnName').toggle(cardType == 1);
	$('#psnMobile').toggle(cardType == 1);
	$('#psnRole').toggle(cardType == 1);
}

$(document).ready(function() {
	$('#cardType').change(refreshTypeControls);
	refreshTypeControls();
});