<?php 
    get_header();
    the_post();
?>

<div class="page">
    <div class="container">
        <?php get_template_part('menu') ?>

        <div class="page-content">
            <div class="post">
                <h3 class="post-header">
                    <?= $post->post_title ?>
                </h3>
                <div class="post-content">
                    <?php
                        the_content();
                    ?>
                </div>
                <?php get_template_part('inc/post-footer') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>