<?php get_header(); ?>
<?php
$member = get_post();
$youtube_link = get_field('youtube_link');
$title = get_field('title');
$degree = get_field('degree');
?>
<main class="lg:pt-[50px]">
    <div class="container">
        <div class="flex max-lg:flex-col gap-10 pt-5 pb-20">
            <div class="w-full lg:w-3/4">
                <div class="py-6">
                    <div>
                        <?php if ($youtube_link): ?>
                            <?= generate_youtube_iframe($youtube_link); ?>
                        <?php endif; ?>
                    </div>
                    <div class="my-5">
                        <div class="mb-2">
                            <h1 class="section-title"><?= $member->post_title; ?></h1>
                            <?php if ($title): ?>
                                <h2><?= $title ?></h2>
                            <?php endif; ?>
                            <?php if ($degree): ?>
                                <h3><?= $degree ?></h3>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full lg:w-1/4">

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>