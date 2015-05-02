<?php get_header(); ?>
<?php

$content = '';
$args = array(
  'numberposts' => 10,
  'offset' => 0,
  'category' => 2,
  'orderby' => 'post_date',
  'order' => 'DESC',
  'post_type' => 'post',
  'post_status' => 'draft, publish, future, pending, private',
  'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts($args);

foreach ($recent_posts as $recent) {
  $content .= '<h3>' . $recent["post_title"] . '</h3>';
  $content .= '<br>' . wpautop($recent["post_content"]);
  // echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"].'</a> </li> ';
}

/*
 * if (have_posts()) {
 * while (have_posts()) {
 * $content .= the_title( '<h3>', '</h3>', FALSE );
 *
 * $content .= '<br>' . wpautop(get_the_content(), false);
 *
 * }
 * }
 */
 
 //TEMP
 $dossiers = '';

// DOSSIERS
/*
 * $dossiers = '';
 * $args = array(
 * 'type' => 'post',
 * 'child_of' => '3',
 * 'orderby' => 'name',
 * 'order' => 'ASC',
 * 'hide_empty' => 0,
 * 'hierarchical' => 1
 * );
 *
 * $categories = get_categories($args);
 *
 * foreach ($categories as $dossier) {
 * $dossiers .= $dossier->category_nicename . '<br>';
 * }
 */
/*
 * foreach ($categories as $category) {
 * $option = '<option value="/category/archives/'.$category->category_nicename.'">';
 * $option .= $category->cat_name;
 * $option .= ' ('.$category->category_count.')';
 * $option .= '</option>';
 * echo $option;
 * }
 */
?>
<main>
<div id="tblCenter">
	<div id="colLeft">
      <?php print $content; ?>
    </div>
	<div id="colRight">
		<h3>Dossiers</h3>
      <?php print $dossiers?>
    </div>
</div>
</main>
<?php get_footer(); ?>