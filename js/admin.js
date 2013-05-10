$(document).ready( function() {
    $('.selectAll').click( function(e){
        e.preventDefault();
        
        switch( $(this).attr("rel" ) ) {
            case "all":
                $("input[type=checkbox]").each( function(){
                    $(this).prop( "checked", true );
                })
                break;
            default:
                $('.'+$(this).attr("rel")).prop("checked", true );
                break;
        }
        
    })

    $('.deselectAll').click( function(e) {
        e.preventDefault();
        switch( $(this).attr("rel" ) ) {
            case "all":
                 $("input[type=checkbox]").each( function(){
                    $(this).prop( "checked", false );
                })
                break;
            default:
                $('.'+$(this).attr("rel")).prop("checked", false );
                break;
        }
    })
    
    $(".download").click( function(){
        $("#download_form").submit();
    })
})