<footer class="footer">

    <hr>

    <h1>
        Footer
    </h1>

    <?php
    wp_nav_menu(
        [
            'theme_location' => 'extra_nav',
            'fallback_cb' => false
        ]
    );
    ?>

</footer>

</div>

<?php wp_footer() ?>

</body>

</html>