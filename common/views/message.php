<?php if (!empty($_SESSION['msg'])): ?>
    <script type="text/javascript">
        $(document).ready(function(){
            tb_show("","/message.php?TB_iframe=true&width=320&height=156&modal=true")
        })
    </script>
<?php endif; ?>
    