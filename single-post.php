<?php get_header(); ?>
<?php
$post = get_post();
$cat = get_the_category($post->ID);
$time = human_time_diff(get_the_time('U', $post->ID), current_time('timestamp'));
$author = get_the_author_meta('display_name', $post->post_author);

//$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID)));
$youtube_link = get_field("post_youtube_url");

$next_post = get_next_post(true);
$prev_post = get_previous_post(true);
?>
<main class="lg:pt-[50px]">
    <div class="container">
        <div class="flex max-lg:flex-col gap-10 py-20">
            <div class="w-full lg:w-3/4">
                <?php if ($youtube_link): ?>
                    <?= generate_youtube_iframe($youtube_link); ?>
                <?php endif; ?>
                <div class="py-6">
                    <div class="mb-2">
                        <h1 class="section-title"><?= $post->post_title; ?></h1>
                    </div>
                    <div>
                        <?php if ($post->post_content) : ?>
                            <?= the_content(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">

            </div>
        </div>


    </div>
</main>
<!-- <div class="main-container container mt-5" id="main-container">
    <div class="row">

        <div class="col-lg-8 blog__content mb-72">
            <div class="content-box">

                <article class="entry mb-0">

                    <div class="single-post__entry-header entry__header">
                        <a class="entry__meta-category entry__meta-category--label" href="<?= get_category_link($cat[0]) ?>"><?= $cat[0]->name; ?></a>
                        <h1 class="single-post__entry-title">
                            <?= $post->post_title; ?>
                        </h1>

                        <div class="entry__meta-holder">
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <span>by</span>
                                    <a href="<?= get_author_posts_url($post->post_author) ?>"><?= $author; ?></a>
                                </li>
                                <li class="entry__meta-date">
                                    <?= date("F d, Y", strtotime($post->post_date)); ?>
                                </li>
                            </ul>

                            <ul class="entry__meta">
                                <li class="entry__meta-views">
                                    <span>Reading time: 12</span>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="entry__img-holder">
                        <?= get_the_post_thumbnail($post->ID, 'banner-image', ['class' => 'entry__img']); ?>
                        <?= get_the_post_thumbnail_caption($post->ID); ?>
                    </div>

                    <div class="entry__article-wrap">

                        <div class="entry__share">
                            <div class="sticky-col">
                                <?php $url = get_permalink(); ?>
                                <div class="socials socials--rounded socials--large">
                                    <a class="social social-whatsapp" title="whatsapp" aria-label="whatsapp" href="https://api.whatsapp.com/send?text=<?= $url ?>" data-action="share/whatsapp/share" target="_blank">
                                        <i class="ui-whatsapp"></i>
                                    </a>
                                    <a class="social social-facebook" href="http://www.facebook.com/sharer/sharer.php?u=<?= $url ?>" title="facebook" target="_blank" aria-label="facebook">
                                        <i class="ui-facebook"></i>
                                    </a>
                                    <a class="social social-x" href="https://x.com/intent/tweet?url=<?= $url ?>" title="twitter" target="_blank" aria-label="twitter">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="20px" height="20px">
                                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <g transform="scale(5.12,5.12)">
                                                    <path d="M5.91992,6l14.66211,21.375l-14.35156,16.625h3.17969l12.57617,-14.57812l10,14.57813h12.01367l-15.31836,-22.33008l13.51758,-15.66992h-3.16992l-11.75391,13.61719l-9.3418,-13.61719zM9.7168,8h7.16406l23.32227,34h-7.16406z"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a class="social social-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $url ?>" title="linkedin" target="_blank" aria-label="linkedin">
                                        <i class="ui-linkedin"></i>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="entry__article">
                            <?php if ($post->post_content) : ?>
                                <?= the_content(); ?>
                            <?php endif; ?>

                            <?php $tags = wp_get_post_tags($post->ID); ?>
                            <?php if ($tags) : ?>
                                <div class="entry__tags">
                                    <i class="ui-tags"></i>
                                    <span class="entry__tags-label">Tags:</span>
                                    <?php foreach ($tags as $tag) : ?>
                                        <a rel="tag" href="<?= get_tag_link($tag) ?>"><?= $tag->name; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>



                    <nav class="entry-navigation">
                        <div class="clearfix">
                            <div class="entry-navigation--left">
                                <i class="ui-arrow-left"></i>
                                <span class="entry-navigation__label">Previous Post</span>
                                <div class="entry-navigation__link">
                                    <a href="<?= get_permalink($prev_post->ID) ?>" rel="next"><?= $prev_post->post_title; ?></a>
                                </div>
                            </div>
                            <div class="entry-navigation--right">
                                <span class="entry-navigation__label">Next Post</span>
                                <i class="ui-arrow-right"></i>
                                <div class="entry-navigation__link">
                                    <a href="<?= get_permalink($next_post->ID) ?>" rel="prev"><?= $next_post->post_title; ?></a>
                                </div>
                            </div>
                        </div>
                    </nav>

                </article>

            </div>
        </div>



    </div>
</div> -->

<?php get_footer(); ?>