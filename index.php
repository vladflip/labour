<?php get_header(); ?>

<?php get_template_part('slider'); ?>

    <div class="page">
        <div class="container">
            
            <?php get_template_part('menu') ?>
            
            <div class="page-content">
                <div class="page-header">Останнi Новини</div>

                <div class="news">

                    <?php
                        while (have_posts()):
                        the_post();
                    ?> 

                        <a href="<?= get_permalink($post->ID) ?>" class="news-item">
                            <div class="news-picture">
                                <img src="<?= getThumbSrc($post->ID) ?>" alt="News image">
                            </div>
                            <div class="news-content">
                                <h3 class="news-header">
                                    <?= $post->post_title ?>
                                </h3>
                                <div class="news-excerpt">
                                    <?= $post->post_excerpt ?>
                                </div>
                                <div class="news-date">
                                    <?= the_date() ?>
                                </div>
                            </div>
                        </a>

                    <?php endwhile ?>

                </div>
            </div>
            <?php get_template_part('sidebar') ?>
        </div>
    </div>
    
<?php get_footer(); ?>