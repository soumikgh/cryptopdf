$(document).ready( function() {
    
    if( $("input[name=optin]" ).val() == 1 ) {
        $( "#toggle_newsletter > img").attr( 'src', '/images/btn_checkmark2_on.gif' );
        $("#parentEmailContainer").show();
    }
    else {
        $("#parentEmail").val('');
    }
    
    if( $("#codename").val().length > 0 ) {
        $('#codenameDescription').html( $("#codename").val() );
    }
    
    
    $("#btn_choose").click( function(e) {
        e.preventDefault();
        $("#codename_choose").toggle();
    })
    
    $("#toggle_newsletter").click( function(e){
        e.preventDefault();
        if( $("#toggle_newsletter > img").attr( 'src' ) == '/images/btn_checkmark2_off.gif' ) {
            $( "#toggle_newsletter > img").attr( 'src', '/images/btn_checkmark2_on.gif' );
            $("input[name=optin]" ).val( '1' );
            
            var age = $("#age").val();
            
            if( age == 'none' || age == '1-8' || age == '9-12' ) {
                $("#parentEmailContainer").show();
            }
        }
        else {
            $( "#toggle_newsletter > img").attr( 'src', '/images/btn_checkmark2_off.gif' );
            $("input[name=optin]" ).val( '' );
            $("#parentEmailContainer").hide();
            $("#parentEmail").val('');
        }
    })
    
    $("#submitForm" ).hover( function(){
        $(this).attr( 'src', '/images/btn_submit_over.gif' );
    },function(){
        $(this).attr( 'src', '/images/btn_submit.gif' );
    })
    
    $(".codename").click( function(e){
        e.preventDefault();
//        $("#codename").val( $(this).html() );
//        $("#codenameDescription").html( $(this).html() );
//        $("#codename_choose").hide();

        var codename =  $(this).html();

        $.get( '/process.php?action=codename&codename='+$(this).html(), function(number) {
            $("#codenameCounter").val( number );

            $("#codename" ).val( codename+'-'+number );
            $("#codenameDescription").html( $("#codename").val() );
            $("input[name=codename]").val( codename );
            $("#encrypted_text").val('');
            $("#encrypted_status").html('<em>Not Encrypted</em>');
            $("input[name=current_cipher]").val('');
            $("#encrypted").val( 'false' );
            $("#codename_choose").hide();
        });
    })
    
     $("#age").change( function(e){
        switch( $(this).val() ) {
            case "1-8":
            case "9-12":
                if( $("#parentEmailContainer").is( ":hidden" ) ) {
                    $("#parentEmailContainer").show();
                }
                break;
            default:
                if( $("#parentEmailContainer").is(":visible") ) {
                    $("#parentEmailContainer").hide();
                }
                break;
        }
    })
})