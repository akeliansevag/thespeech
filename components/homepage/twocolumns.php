<?php
$category_name = isset($args['category_name']) ? $args['category_name'] : 'protalk';
$category = get_category_by_slug($category_name); // Replace 'protalk' with your category slug.

$args = array(
    'category_name' => $category_name, // Category slug
    'post_status'   => 'publish', // Only published posts
    'posts_per_page' => 4,       // Retrieve all posts (or set a specific number)
);

$posts = get_posts($args);

?>
<?php if ($posts): ?>
    <div>
        <h2 class="section-title"><?= $category->name ?></h2>
        <div class="grid grid-cols-4 gap-3 mt-4">
            <div class="col-span-3">
                <?php get_template_part("components/post/thumb-large", null, ['post' => $posts[0]]); ?>
            </div>

            <div class="flex flex-col gap-3">
                <?php foreach ($posts as $key => $post): ?>
                    <?php if ($key == 0) continue; ?>
                    <div>
                        <?php get_template_part("components/post/thumb-small", null, ['post' => $post]); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>