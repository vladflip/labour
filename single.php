<?php get_header() ?>

<div class="page">
    <div class="container">

        <div class="post">
            <div class="post-content">
                <?php
                    the_post();
                    the_content();
                ?>
            </div>
            <div class="post-footer">
                <?= getTheDate($post->ID); ?>
            </div>
        </div>

        <?php get_template_part('sidebar') ?>
    </div>
</div>