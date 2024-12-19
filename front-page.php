<?php get_header(); ?>
<section class="relative flex items-center min-h-[calc(100vh-92px)] bg-black w-full">
    <img class="absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/thespeech-banner.webp" alt="The Speech banner">
    <div class="container">
        <div class="text-white relative lg:w-1/3">
            <h1 class="max-lg:text-5xl text-[80px] leading-none">
                THE VOICE OF TRUTH
            </h1>
            <h2 class="max-lg:text-base text-[20px] uppercase">
                Lorem ipsum dolor sit amet adipiscing
                elitNulla ornare vestibulums
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
        <h2 class="section-title text-center">THE TEAM</h2>
        <div id="team-slider" class="team swiper mt-8">
            <div class="swiper-wrapper">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <div class="swiper-slide">
                        <img class="absolute w-full h-full object-cover -z-10" src="<?= get_template_directory_uri() ?>/src/img/mountasser-hachem.webp" alt="">
                        <div class="flex flex-col justify-between relative w-full aspect-square overlay p-10">
                            <div></div>
                            <div class="flex flex-col justify-center items-center gap-4 text-center relative z-10">
                                <?php get_template_part("components/assets/play-button"); ?>
                                <h3 class="uppercase mt-4 text-xl font-[700]">Mountasser Hachem</h3>
                                <h4>Founder of Monty Mobile</h4>
                            </div>
                            <div class="max-lg:flex-col flex justify-between items-center gap-6 relative z-10">
                                <a href="" class="s-button">
                                    Learn More
                                </a>
                                <a href="" class="s-button">
                                    Watch Video
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev after:text-white"></div>
            <div class="swiper-button-next after:text-white"></div>
        </div>
    </div>
</section>

<?php get_template_part('components/CalendarSection', null, ['category_name' => 'open-mic']); ?>

<?php get_footer(); ?>