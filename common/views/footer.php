<div id="footer" align="center"><a href="about.php">About This Site</a> &#0160; &#0160;
    <a href="copyright.php">&copy; Copyright Info</a> &#0160; &#0160;
    <a href="contact_us.php">Contact Us</a> &#0160; &#0160;
    <a href="other_links.php">Other Links</a>
</div>

<?php if (getUserId()): ?>
<script type="text/javascript" language="javascript">
    (function loopsiloop() {
        setTimeout(function () {
            $.ajax({
                url:'/login.php',
                data:{action:'poll'},
                success:function (response) {
                    // do something with the response

                    loopsiloop(); // recurse
                },
                error:function () {
                    // do some error handling.  you
                    // should probably adjust the timeout
                    // here.

                    loopsiloop(); // recurse, if you'd like.
                }
            });
        }, 60000);
    })();
</script>
<?php endif ?>