<?php
/**
 * The template for displaying all single posts for realty type.
 * @package understrap
 */

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
<div <?php post_class('container'); ?> id="post-<?php the_ID(); ?>">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php echo get_the_post_thumbnail( $post->ID, 'large'); ?>
    <div>
        Общая <?php the_field('square') ?> м<sup>2</sup>
        Жилая <?php the_field('living_sq') ?> м<sup>2</sup>
        Этаж <?php the_field('floor') ?> из <?php the_field('floor_total') ?>
        Цена <?php number_format((float) the_field('price'), 2, ',', ' ') ?> руб.
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
