$(document).ready( function() {
	$("#downloadPdf").click( function(e) {
		var url = '/teachers/pdf.js';
		var success;
        var pdfTitle = $('#step1_name').val();
        
		$("#downloadPdf").unbind('click');
		$.ajax({
			url: url,
			dataType: 'script',
			success: success
		});
		
        
		$.post( '/teachers/process.php', {
				action: 'process', 
				clues: clues,
                pdfTitle: pdfTitle
			}, function( fileName ) {
				window.location.href = '/teachers/process.php?action=download&fileName=' + fileName
			})
		
			e.preventDefault();
		})
})