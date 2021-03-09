<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset
        xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?php echo base_url(); ?></loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>about-us</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>contact-us</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>privacy-policy</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>terms-and-policy</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>faq</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>
    <url>
        <loc><?php echo base_url(); ?>blog</loc>
        <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>

    <!-- Sitemap -->

    <?php foreach ($blogs as $value) { ?>
        <url>
            <loc><?php echo base_url(); ?>blog/view/<?php echo $value->blog_slug; ?>/<?php echo $value->blog_id; ?></loc>
            <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
            <priority>0.5</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>

    <?php foreach ($posts as $post) { ?>
        <url>
            <loc><?php echo base_url(); ?>post/view/<?php echo $post->post_slug; ?>/<?php echo $post->post_id; ?></loc>
            <lastmod><?php echo date('Y-m-d') ?>T<?php echo date('h:i:s') ?>+00:00</lastmod>
            <priority>0.5</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>


</urlset>