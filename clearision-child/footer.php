<footer id="footer" role="contentinfo">
<?php $clrs_tjt = get_option('clrs_tongji'); if ( !empty($clrs_tjt) ) { echo $clrs_tjt;}; ?>
Snowing<br />
Origin:<a href="http://dimpurr.com" title="Dimpurr (钉子)">Dimpurr</a><br />
Modified by <a herf="http://uinz.biz/" title="Yinz">Yinz</a><br />

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</footer>

</div>
</body>
</html>