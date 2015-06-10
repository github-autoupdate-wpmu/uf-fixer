<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$region_5 = upfront_create_region(
			array(
"name" => "region-5", 
"title" => "Region 5", 
"type" => "wide", 
"scope" => "local", 
"container" => "region-5", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 60, 
"breakpoint" => array(
	"tablet" => array(
		"edited" => true, 
		"row" => 790
		), 
	"mobile" => array(
		"edited" => true, 
		"row" => 757
		), 
	"custom-1410783666947" => array(
		"edited" => true, 
		"row" => 483
		)
	), 
"background_type" => "color", 
"use_padding" => 0, 
"sub_regions" => array(false), 
"background_color" => "#ffffff"
)
			);

$region_5->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "13", 
"margin_bottom" => "0", 
"id" => "module-1407244369178-1770", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h2 class=\"\" style=\"text-align: center;\">Blog</h2>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407244369177-1062", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 6, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "rgba(0, 0, 0, 0)", 
	"bg_color" => "rgba(0, 0, 0, 0)", 
	"theme_style" => "u-sub-heading", 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1419540281671-1659", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$region_5->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407244383572-1176", 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">Latest News &amp; Tips</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407244383571-1575", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 28, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"anchor" => ""
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1419540279374-1064", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$region_5->add_element("Posts", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1418582907947-1246", 
"options" => array(
	"type" => "PostsModel", 
	"view_class" => "PostsView", 
	"has_settings" => 1, 
	"class" => "c24 uposts-object", 
	"id_slug" => "posts", 
	"display_type" => "list", 
	"list_type" => "generic", 
	"offset" => 1, 
	"taxonomy" => "", 
	"term" => "", 
	"content" => "excerpt", 
	"limit" => "9", 
	"pagination" => "numeric", 
	"sticky" => "prepend", 
	"posts_list" => "", 
	"post_parts" => array("featured_image", "date_posted", "title", "content"), 
	"enabled_post_parts" => array("date_posted", "featured_image", "title", "content"), 
	"default_parts" => array("date_posted", "author", "gravatar", "comment_count", "featured_image", "title", "content", "read_more", "tags", "categories"), 
	"date_posted_format" => "d M", 
	"categories_limit" => 3, 
	"tags_limit" => 3, 
	"comment_count_hide" => 0, 
	"content_length" => 120, 
	"resize_featured" => "1", 
	"gravatar_size" => 200, 
	"post-part-date_posted" => "<div class=\"uposts-part date_posted\">
    <a href=\"{{permalink}}\"><span class=\"date-day\">{{date_1}}</span> <span class=\"date-month\">{{date_2}}</span></a>
</div>", 
	"post-part-author" => "<div class=\"uposts-part author\">
	By <a href=\"{{url}}\">{{name}}</a></div>", 
	"post-part-gravatar" => "<div class=\"uposts-part gravatar\">
	{{gravatar}}
</div>", 
	"post-part-comment_count" => "<div class=\"uposts-part comment_count\">
	{{comment_count}}
</div>", 
	"post-part-featured_image" => "<div class=\"uposts-part thumbnail\" data-resize=\"{{resize}}\">
	<a href=\"{{permalink}}\">{{thumbnail}}</a>
</div>", 
	"post-part-title" => "<div class=\"uposts-part title\">
	<h3><a href=\"{{permalink}}\" title=\"{{title}}\">{{title}}</a></h3>
</div>", 
	"post-part-content" => "<div class=\"uposts-part content\">
	{{content}}
</div>", 
	"post-part-read_more" => "<div class=\"uposts-part read_more\">
	<a href=\"{{permalink}}\">Read more</a></div>", 
	"post-part-tags" => "<div class=\"uposts-part post_tags\">
	{{tags}}
</div>", 
	"post-part-categories" => "<div class=\"uposts-part post_categories\">
	{{categories}}
</div>", 
	"post-part-meta" => "<div class=\"uposts-part meta\">
	
</div>
", 
	"element_id" => "posts-object-1418582907944-1365", 
	"anchor" => "", 
	"theme_style" => "u-posts-grid", 
	"breakpoint" => array(
		"custom-1410783666947" => array(
			"theme_style" => "u-posts-grid-big-tablet"
			), 
		"tablet" => array(
			"theme_style" => "u-posts-grid-tablet"
			), 
		"mobile" => array(
			"theme_style" => "u-posts-grid-mobile"
			)
		)
	), 
"row" => 6, 
"sticky" => false, 
"wrapper_id" => "wrapper-1419540276903-1477", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"col" => 18, 
		"order" => 0
		)
	), 
"breakpoint" => array(
	"tablet" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 12, 
		"order" => 0
		), 
	"mobile" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 7, 
		"order" => 0
		), 
	"custom-1410783666947" => array(
		"edited" => false, 
		"left" => 0, 
		"col" => 18, 
		"order" => 0
		)
	)
));

$regions->add($region_5);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'prefooter.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

