<footer>
        <div class="footer-logo"><?php the_custom_logo( ); ?></div>
        <?php the_widget( 'WP_Nav_Menu_Widget', array('nav_menu' => 'Footer menu') ); ?>
        <div class="copyright">Copyright © 2021 All right reserved</div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>