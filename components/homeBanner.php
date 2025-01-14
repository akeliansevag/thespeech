<section class="relative flex items-center min-h-[calc(100vh-92px)] bg-black w-full">
    <img class="absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/home-banner.webp" alt="The Speech banner">
    <div class="container">
        <div class="text-white relative lg:w-1/3">
            <h1 class="max-lg:text-5xl text-[80px] leading-none">
                <?= get_field('banner_title'); ?>
            </h1>
            <h2 class="max-lg:text-base text-[20px] uppercase mb-5">
                <?= get_field('banner_subtitle'); ?>
            </h2>
            <a data-fancybox class="s-button border-primary bg-primary" href="https://youtu.be/4D8S-mNlc8Y">Watch Video</a>
        </div>
    </div>
</section>