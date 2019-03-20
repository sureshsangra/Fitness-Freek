<script type="text/javascript">
var tag_name = '<?php echo $tag_name; ?>';

var feed = new Instafeed({
        get: 'tagged',
        tagName: tag_name,
        limit:'14',
        accessToken: '1323742782.e94d4a2.b776b830a45a4428844ee46ede4cc636'
    });
    feed.run(); 
</script>