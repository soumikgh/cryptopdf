
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/admin.js"></script>
<?php if (isset($js)): ?>
    <?php foreach ($js as $file): ?>
        <script src="<?php echo $file ?>"></script>
    <?php endforeach ?>
<?php endif ?>
</body>
</html>
