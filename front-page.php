<?php get_header(); ?>
<section class="relative flex items-center min-h-[calc(100vh-92px)] bg-black w-full">
    <img class="absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/thespeech-banner.webp" alt="The Speech banner">
    <div class="container">
        <div class="text-white relative lg:w-1/3">
            <h1 class="max-lg:text-5xl text-[80px] leading-none">
                THE VOICE OF TRUTH
            </h1>
            <h2 class="max-lg:text-base text-[20px] uppercase">
                Decentralization Debate: Could It Solve Lebanon’s Governance Issues?
            </h2>
        </div>
    </div>
</section>
<?php get_template_part('components/FullPostsSlider', null, ['category_name' => 'stories']); ?>
<section class="py-12 bg-white">
    <div class="container">
        <?php get_template_part("components/homepage/twocolumns", null, ['category_name' => 'protalk']); ?>

    </div>
</section>
<section class="bg-black py-12 text-white">
    <div class="container">
        <div class="text-center max-w-[900px] mx-auto">
            <h2 class="section-title mt-4">WHO WE ARE</h2>
            <div class="py-8">
                <h2 class="text-xl uppercase mb-4">The Speech is an independent media platform, that values transparency and integrity.</h2>
                <p>A space where we share reliable information and deep analysis.<br />
                    We are faithfully committed to supporting people's rights and advocating justice and equality. <br />
                    We aim to spark social awareness, promote accountability, for each person to make informed decisions to drive meaningful change.</p>
            </div>

        </div>
        <?php get_template_part('components/TeamSlider'); ?>
    </div>
</section>

<?php get_template_part('components/CalendarSection', null, ['category_name' => 'open-mic']); ?>

<?php get_footer(); ?>