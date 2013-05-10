function logTime()
{
    $.get( '/scripts/scripts.php?action=logTime' );
        
    setTimeout( 'logTime()', 6000000000 );
}
    
$(document).ready( function() {
    
    
//    setTimeout( 'logTime()', 6000000000 );
    
    var timeout = 100000;
    
    $(document).bind("idle.idleTimer", function(){
        $.post( '/scripts/scripts.php', {
            action: 'changeStatus', 
            status: 'idle'
        });
    });
    
    $(document).bind("active.idleTimer", function(){
        $.post( '/scripts/scripts.php', {
            action: 'changeStatus', 
            status: 'active'
        });
    });
        
    $.idleTimer(timeout);
    
    
})