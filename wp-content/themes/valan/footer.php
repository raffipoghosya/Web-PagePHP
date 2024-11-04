<?php?>
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logofooter.png" alt="Footer Logo">
            </a>
        </div>  
        <nav class="footer-navigation">
            <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container' => false)); ?>
        </nav>
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?> Valan Group. All Rights Reserved.</p>
            <p><a href="mailto:contact@valangroup.com">contact@valangroup.com</a> | <a href="tel:+1234567890">+1 (234) 567-890</a></p>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
