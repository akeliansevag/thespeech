<section class="overflow-hidden relative flex max-lg:flex-col max-lg:justify-center items-center min-h-[calc(100vh-86px)] bg-black w-full">

    <img class="image-wrap absolute w-full h-full object-cover" src="<?= get_template_directory_uri() ?>/src/img/microphone.webp" alt="The Speech banner">
    <div class="container">

        <div class="text-white relative max-w-[500px] text-left">
            <!-- <a class="inline-block mb-3 z-10 relative" data-fancybox href="https://youtu.be/4D8S-mNlc8Y">
                <svg width="100" height="100" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="35" cy="35" r="34.5" stroke="#FFFFFF" />
                    <path d="M49.3174 34.6649L26.6469 47.7537L26.6469 21.5761L49.3174 34.6649Z" fill="#FFFFFF" />
                </svg>
            </a> -->
            <?php if (get_field('banner_title')): ?>
                <h1 class="max-lg:text-5xl text-[80px] leading-[86px]  mb-5 font-[700]">
                    <?= get_field('banner_title'); ?>
                </h1>
            <?php endif; ?>
            <?php if (get_field('banner_subtitle')): ?>
                <h2 class="max-lg:text-base text-[20px] uppercase mb-5">
                    <?= get_field('banner_subtitle'); ?>
                </h2>
            <?php endif; ?>

            <a data-fancybox class="s-button border-primary bg-primary" href="https://youtu.be/4D8S-mNlc8Y"><?php _e('Watch Video', 'thespeech'); ?></a>

        </div>
    </div>
</section>