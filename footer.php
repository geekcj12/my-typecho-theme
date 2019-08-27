<?php $this->footer(); ?>

                <div class="footer">
                    <?php if($this -> options -> social): ?>
                    <ul class="social-menu">
                        <?php $this -> options -> social() ?>
                    </ul>
                    <?php endif; ?>
                    <p>&copy; 2016-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.All Rights Reserved.</p>
                    <p>
                        <?php if ($this->options->icp): ?>
                        <a href="http://www.miitbeian.gov.cn/" target="_blank">
                            <?php $this->options->icp(); ?>
                        </a>
                        <?php endif; ?>

                        <?php if ($this->options->beian): ?>
                        <br>
                        <a href="<?php $this->options->beianurl(); ?>" target="_blank">
                            <img src="https://cdn.geekcj.com/beian.png"><?php $this->options->beian(); ?>
                        </a>
                        <?php endif; ?>
                    </p>
                    <p>网站已运行 <?php echo floor((time()-strtotime("2016-11-11"))/86400); ?> 天</p>
                </div>
            </div>
        </main>
        <div id="backdrop" class="hide"></div>
    </div>

    <script src="<?php $this->options->themeUrl('js/OwO.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/main.min.js'); ?>"></script>
    <script>
		var OwO = new OwO({
		    logo: 'OwO',
		    container: document.getElementsByClassName('OwO')[0],
		    target: document.getElementsByClassName('textarea')[0],
		    api: '<?php $this->options->themeUrl('js/OwO.json'); ?>',
		    position: 'bottom',
		    width: '100%',
		    maxHeight: '250px'
		});
    </script>

    <?php $this->options->tongji(); ?>
</body>
</html>