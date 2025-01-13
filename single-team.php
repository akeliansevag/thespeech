<?php get_header(); ?>
<?php
$member = get_post();
$youtube_link = get_field('youtube_link');
?>
<main class="lg:pt-[50px]">
    <div class="container">
        <div class="flex max-lg:flex-col gap-10 py-20">
            <div class="w-full lg:w-3/4">
                <div class="py-6">
                    <div class="mb-2">
                        <h1 class="section-title"><?= $member->post_title; ?></h1>
                    </div>
                    <div>
                        <?php if ($youtube_link): ?>
                            <?= generate_youtube_iframe($youtube_link); ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/4">

            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>