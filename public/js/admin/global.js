$(function(){

	$('button[type=reset]').on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		var $form = $this.closest('form');
		$form.find('input:text, select').val('');
		$form.submit();
		return false;
	});
	
	$('section.content .input-daterange').datepicker({
    });
});