<?php
/**
 * Single Page template.
 */
get_header();
?>
<!-- #primary.content-area -->
<div id="primary" class="content-area">
    <!-- main#main.site-main -->
    <main id="main" class="site-main">
        <?php
            while(have_posts()) :
                the_post();
                the_title();
                the_content();
                //get_template_part('template-parts/post/content');
            endwhile;
        ?>
    </main>
</div>