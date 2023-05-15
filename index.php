<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Computer Chill</title>
	<?php wp_head();?>
</head>
<body>
<?php get_header()?>
<main>
<?php
	$category_name = "Останні пости";

	if (isset($_GET['category'])) {
		$slug = $_GET['category'];
		$category = get_category_by_slug($slug);

		if ($category) {
			$category_name = $category->name;
		}
	}

	echo '<h2 class="post-title">' . $category_name . '</h2>';

	$category_filter = $_GET['category'] ?? '';

	?><div class="post-container"><?php

	$args = array(
		'numberposts'      => -1,
		'category_name'    => $category_filter,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'include'          => array(),
		'exclude'          => array(),
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'suppress_filters' => true,
	);

	if (isset($_GET['s'])) {
		$args['s'] = sanitize_text_field($_GET['s']);
	}

	$posts = get_posts($args);

	if (empty($posts)) {
		echo "Немає постів у цій категорії :(";
	} else {
		foreach ($posts as $post) {
			setup_postdata($post);
			?>
			<div class="post">
				<img src="<?php the_field("main_image"); ?>" alt="Post 1">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<?php
		}
		wp_reset_postdata();
	}
	?>
</div>
</main>
<?php get_footer()?>
</body>
</html>