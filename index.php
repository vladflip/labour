<?php get_header(); ?>

<?php get_template_part('slider'); ?>

    <div class="page">
        <div class="container">
            <div class="menu-container">
                <div class="page-header">Головне Меню</div>
                <ul class="menu" id="menu">
                    <li class="menu-item current-menu-item">
                        <a href="#" class="menu-item-link">Головна сторінка</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Актуально</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Новини</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Про Департамент</a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Структура</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Керівництво</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Положення</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Графік прийому</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Основні напрямки діяльності</a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Управління праці та соціальних питань</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Управління Служб у справах дітей</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Управління праці та соціального захисту населення</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Підвідомчі установи</a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Дислокація</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Територіальні центри надання соціальних послуг</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Центри соціальних служб для сім'ї, дітей та молоді</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">«Промінь» міський центр реінтеграції бездомних осіб</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Міський центр комплексної реабілітації осіб з інвалідністю</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Комунальний заклад соціального захисту дітей «Центр соціально – психологічної реабілітації дітей»</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Соціальні права та гарантії</a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-item-link">Державні соціальні стандарти</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Нормативні акти Харківської міської ради</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Міжтериторіальне співробітництво</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Доступ до публічної інформації</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Запобігання корупції</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" class="menu-item-link">Громадські обговорення</a>
                    </li>
                </ul>
            </div>
            
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