<?php
/*
Template Name: Paged Page
*/
?>
<?php get_header(); ?>

<!-- ↓投稿ランダム表示用 QueryPost↓ -->
<?php query_posts('orderby=rand');?>

<!-- 投稿ループ Start. -->
<?php query_posts('posts_per_page=20&paged='.$paged); if (have_posts()) : while (have_posts()) : the_post(); ?><!-- 表示数20件 -->

<!-- 投稿タイトル取得. -->
<?php the_title(); ?>
<!-- 投稿タイトル End. -->

<!-- 投稿アイキャッチ画像取得. -->
<?php if (has_post_thumbnail()) {
    echo the_post_thumbnail();
} ?>
<!-- 投稿アイキャッチ画像 End. -->

<!-- 投稿文章取得. -->
<?php the_content(); ?>
<!-- 投稿文章 End. -->

<!-- 個別投稿へのリンク取得 -->
<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
</a>
<!-- 個別投稿へのリンク End. -->

<!-- カテゴリ名取得. -->
<?php $category = get_the_category(); echo $category[0]->cat_name; ?>
<!-- カテゴリ名 End. -->

<?php endwhile;?>
<!-- 投稿ループ・while End.-->

<?php previous_posts_link('Prev'); ?><!-- Archive Page Previous Pagination -->
<?php next_posts_link('Next', ''); ?><!-- Archive Page Next Pagination -->

<?php endif; ?>
<!-- 投稿ループ・If End. -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
