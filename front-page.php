<?php get_header(); ?>
<section class="relative flex items-center min-h-[calc(100vh-92px)] bg-black w-full">
    <img class="absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/assets/img/thespeech-banner.webp" alt="The Speech banner">
    <div class="container">
        <div class="text-white relative md:w-1/3">
            <h1 class="text-[80px] leading-none">
                THE VOICE OF TRUTH
            </h1>
            <h2 class="text-[20px] uppercase">
                Lorem ipsum dolor sit amet adipiscing
                elitNulla ornare vestibulums
            </h2>
        </div>
    </div>
</section>
<section class="py-10 bg-white">
    <div class="container">
        <?php get_template_part("components/homepage/twocolumns", null, ['category_name' => 'protalk']); ?>
    </div>
</section>
<?php get_footer(); ?>