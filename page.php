<?php get_header() ?>

<div class="page">
    <div class="container">
        <?php get_template_part('menu') ?>
        
        <div class="page-content">
            <div class="post">
                <div class="post-content">
                    <?php 
                        the_post();
                        the_content();
                    ?> 
                </div>
                <?php get_template_part('inc/post-footer') ?>
            </div>
        </div>

        <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer() ?>