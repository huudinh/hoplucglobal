<?php get_template_part('Module/control/module_footer'); ?>   
</div>
    <div id="loading"></div>
    <script>
        <?php
            include(locate_template('Module/assets/js/lib.min.js')); 
            include(locate_template('Module/assets/js/module.min.js')); 
            include(locate_template('Module/Header/header_lhl_1_0_0/js/header_lhl_1_0_0.min.js')); 
        ?>
    </script>
    <?php wp_footer(); ?>
</body>

</html>