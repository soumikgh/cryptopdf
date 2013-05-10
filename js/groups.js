$(document).ready( function() {
   
//    $("input[name=groupName]").blur(function(){
//        if( $("input[name=groupName]").val().length > 0 && $("input[name=accessId]").val().length == 0 ) {
//            var groupName = $("input[name=groupName]").val();
//            groupName = $.trim( groupName );
//            groupName = $.trim( groupName.replace(/[^a-z0-9\s]/gi, '') );
//            groupName = groupName.replace(/[_\s]/g, '-');
//            
//            $.get( )
//            $("input[name=accessId]").val( groupName );
//        }
//    })

    $('table').rotateTableCellContent();

    $(".makeAdmin").click( function(e){
        e.preventDefault();
        
        var src = $(this).children('img').attr("src");
        var pieces = src.split( '/' );
        var img = pieces[(pieces.length -1)];
        var isAdmin;
        
        switch( img ) {
            case "btn_checkmark2_off.gif":
                $(this).children('img').attr("src", '/images/btn_checkmark2_on.gif');
                var isAdmin = true;
                break;
            case "btn_checkmark2_on.gif":
                $(this).children('img').attr("src", '/images/btn_checkmark2_off.gif');
                var isAdmin = false;
                break;
        }
        
        var data = {action:'changeAdminStatus', makeAdmin: isAdmin, groupId: gup( 'groupId' ), userId: $(this).attr("rel" ) }
        
        $.post( '/groups/process.php', data, function(){
            
        })
        
    })
    
    $( '.edit').editable('/groups/process.php?action=updateValue');
    
    $("#allow_editing, #auto_approve").click( function(e ){
        e.preventDefault();
        
        var action;
        
        switch( $(this).attr("id" ) ) {
            case "allow_editing":
                action = 'allowEditing';
                break;
            case "auto_approve":
                action = 'autoApprove';
                break;
        }
        
        var src = $(this).attr("src");
        var pieces = src.split( '/' );
        var img = pieces[(pieces.length -1)];
        var allowEditing;
        var autoApprove;
        
        switch( img ) {
            case "btn_checkmark2_off.gif":
                $(this).attr("src", '/images/btn_checkmark2_on.gif');
                allowEditing = true;
                autoApprove = true;
                break;
            case "btn_checkmark2_on.gif":
                $(this).attr("src", '/images/btn_checkmark2_off.gif');
                allowEditing = false;
                autoApprove = false;
                break;
        }
        
        $.post( '/groups/process.php', { action: action, allowEditing: allowEditing, autoApprove: autoApprove, groupId: gup( 'groupId' ) }, function(){
            
        })
    });
    
    $("#auto_approve" ).click( function (e){
        e.preventDefault();
    })
    
    $(".delete").click( function(e) {
        return confirm( 'Are you sure you want to delete?' );
    })
    
})