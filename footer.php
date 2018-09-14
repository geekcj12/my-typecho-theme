<?php $this->footer(); ?>

    <footer>
        <div class="social-menu">
            <a rel="nofollow" title="新浪微博" href="http://weibo.com/u/6006370066" target="_blank">
                <i class="fa fa-weibo"></i>
            </a>
            <a rel="nofollow" title="Twitter" href="https://twitter.com/geekcj12" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
            <a rel="nofollow" title="Instagram" href="https://instagram.com/geekcj12" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>
            <a rel="nofollow" title="Telegram" href="http://t.me/geekcj12" target="_blank">
                <i class="fa fa-telegram"></i>
            </a>
            <a rel="nofollow" title="E-mail" href="mailto:geekcj@geekcj.com" target="_blank">
                <i class="fa fa-envelope"></i>
            </a>
        </div>
        <p>&copy; 2016-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.All Rights Reserved.</p>
        <p><a href="http://www.miitbeian.gov.cn/" target="_blank">皖ICP备17016228号-1</a><br><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44190002001762" target="_blank"><img src="https://cdn.geekcj.com/beian.png">粤公网安备 44190002001762号</a></p>
        <p>网站已运行 <?php echo floor((time()-strtotime("2016-11-11"))/86400); ?> 天</p>
    </footer>

    <script src="<?php $this->options->themeUrl('js/OwO.min.js'); ?>"></script>
    <script>
		//OWO
		var OwO = new OwO({
		    logo: 'QAQ',
		    container: document.getElementsByClassName('OwO')[0],
		    target: document.getElementsByClassName('textarea')[0],
		    api: '<?php $this->options->themeUrl('js/OwO.json'); ?>',
		    position: 'up',
		    width: '100%',
		    maxHeight: '250px'
		});
    </script>
    
    <script>
    var _hmt = _hmt || [];
    (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?3d31cf864a9064e67e93e33ff1269f17";
    var s = document.getElementsByTagName("script")[0]; 
    s.parentNode.insertBefore(hm, s);
    })();
    </script>

    <script>
    (function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
    })();
    </script>

</body>
</html>