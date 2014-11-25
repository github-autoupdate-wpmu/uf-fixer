<?php
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$cases_region = upfront_create_region(
			array(
"name" => "cases_region", 
"title" => "Cases Region", 
"type" => "wide", 
"scope" => "local", 
"container" => "cases_region", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 140, 
"background_type" => "color", 
"background_color" => "#c5d0db", 
"nav_region" => ""
)
			);

$cases_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "8", 
"margin_bottom" => "0", 
"id" => "module-1407250114380-1665-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 14, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\" style=\"text-align: center;\">Case Study</h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250114379-1090", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 8, 
	"is_edited" => true
	), 
"wrapper_id" => "module-1407250114380-1665-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$cases_region->add_element("PlainTxt", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "0", 
"margin_bottom" => "0", 
"id" => "module-1407250139415-1897-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 10, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h1 class=\"\" style=\"text-align: center;\">Issue Resolved!</h1>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1407250139414-1484", 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"row" => 4, 
	"is_edited" => true
	), 
"wrapper_id" => "module-1407250139415-1897-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$cases_region->add_element("Ugallery", array(
"columns" => "24", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "11", 
"margin_bottom" => "0", 
"id" => "module-1407250114394-1623-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module", 
"rows" => 48, 
"options" => array(
	"type" => "UgalleryModel", 
	"view_class" => "UgalleryView", 
	"has_settings" => 1, 
	"class" => "c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 c24 upfront-gallery", 
	"id_slug" => "ugallery", 
	"status" => "ok", 
	"images" => array(array(
			"id" => "4009", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-210x210-1861.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4009, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image3-210x210-1861.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "<p>This is Case</p>", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4010", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-210x210-4359.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4010, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image4-210x210-4359.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4011", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-210x210-4712.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4011, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image5-210x210-4712.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4012", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-210x210-4674.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4012, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image6-210x210-4674.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4014", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-210x210-4688.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4014, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image7-210x210-4688.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4015", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-210x210-3938.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4015, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image8-210x210-3938.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4017", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-210x210-3034.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4017, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image9-210x210-3034.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4019", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-210x210-8979.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4019, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image10-210x210-8979.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4021", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-210x210-3368.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4021, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11-210x210-3368.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4023", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-210x210-4128.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4023, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image12-210x210-4128.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4024", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-210x210-6797.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4024, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image13-210x210-6797.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4027", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-210x210-3561.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4027, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image15-210x210-3561.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Roofing"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4029", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-210x210-8695.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4029, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image14-210x210-8695.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4007", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 210, 213, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-210x210-7027.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1.jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 213
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 1
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 213
							), 
						"id" => 4007, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 213
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 1
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image1-210x210-7027.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array("All", "Plumping"), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			), array(
			"id" => "4035", 
			"srcFull" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 
			"sizes" => array(
				"thumbnail" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-150x150.jpg", 150, 150, true), 
				"medium" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"large" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"full" => array("" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 210, 210, false), 
				"custom" => array(
					"error" => false, 
					"url" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-210x210-2311.jpg", 
					"urlOriginal" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1).jpg", 
					"full" => array(
						"width" => 210, 
						"height" => 210
						), 
					"crop" => array(
						"width" => 210, 
						"height" => 210
						), 
					"editdata" => array(
						"rotate" => 0, 
						"crop" => array(
							"width" => "210", 
							"height" => "210", 
							"left" => 0, 
							"top" => 0
							), 
						"resize" => array(
							"width" => 210, 
							"height" => 210
							), 
						"id" => 4035, 
						"element_id" => "ugallery-object-1407250114391-1191"
						)
					)
				), 
			"size" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropSize" => array(
				"width" => 210, 
				"height" => 210
				), 
			"cropOffset" => array(
				"width" => "210", 
				"height" => "210", 
				"left" => 0, 
				"top" => 0
				), 
			"src" => "" . get_stylesheet_directory_uri() . "/images/single-page-cases/gal-image11 (1)-210x210-2311.jpg", 
			"loading" => false, 
			"status" => "ok", 
			"element_id" => "ugallery-object-1407250114391-1191", 
			"rotation" => 0, 
			"link" => "original", 
			"url" => "", 
			"title" => "Image caption", 
			"caption" => "Image description", 
			"alt" => "", 
			"tags" => array(), 
			"margin" => array(
				"left" => 0, 
				"top" => 0
				), 
			"urlType" => false
			)), 
	"elementSize" => array(
		"width" => 0, 
		"height" => 0
		), 
	"labelFilters" => array("true"), 
	"thumbProportions" => "1", 
	"thumbWidth" => "210", 
	"thumbHeight" => 210, 
	"captionType" => "none", 
	"captionColor" => "#ffffff", 
	"captionUseBackground" => 0, 
	"captionBackground" => "#000000", 
	"showCaptionOnHover" => array("true"), 
	"linkTo" => "image", 
	"even_padding" => array("false"), 
	"thumbPadding" => 15, 
	"captionPosition" => "below", 
	"captionWhen" => "never", 
	"no_padding" => array("true"), 
	"element_id" => "ugallery-object-1407250114391-1191", 
	"theme_style" => "case-study-ugallery-style", 
	"anchor" => ""
	), 
"wrapper_id" => "module-1407250114394-1623-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-module-wrapper", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 24
		), 
	"mobile" => array(
		"col" => 24
		)
	)
));

$regions->add($cases_region);

$prefooter = upfront_create_region(
			array(
"name" => "prefooter", 
"title" => "Pre-footer", 
"type" => "wide", 
"scope" => "local", 
"container" => "prefooter", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"row" => 42, 
"background_type" => "color", 
"nav_region" => "", 
"background_color" => "rgba(51,51,51,1)"
)
			);

$prefooter->add_element("PlainTxt", array(
"columns" => "11", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "6", 
"margin_bottom" => "0", 
"id" => "module-1406205224243-1651", 
"rows" => 26, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h3 class=\"\"></h3><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\"><h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Spread the word.</span></h4><h4><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Share it with some friends.</span></h4></span><h3 class=\"\"></h3><h3 class=\"\"><span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(87, 85, 85)\"><a href=\"http://facebook.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">o</span></a> </span></span> <span class=\"uf_font_icon\" style=\"line-height: 30px; color: rgb(0, 0, 0); font-size: 27px; top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://twitter.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">p</span></a></span> <span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://plus.google.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">q</span></a></span>&nbsp;</span><span class=\"uf_font_icon\" style=\"top: 0px;\"><span class=\"inline_color\" style=\"color: rgb(84, 84, 84)\"><a href=\"http://pinterest.com\" rel=\"external\"><span class=\"inline_color\" style=\"color: rgb(86, 86, 86)\">r</span></a></span></span></span></h3>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406205224243-1348", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"row" => 20
	), 
"wrapper_id" => "wrapper-1406205224243-1651", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 11
		), 
	"mobile" => array(
		"col" => 11
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "5", 
"margin_left" => "0", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406209692911-1852", 
"rows" => 16, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"position: relative; font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(156, 203, 216)\">n</span></span><span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Get</span>&nbsp;</h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">A Quote</span></h4>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406209692910-1396", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"row" => 10, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"style" => "
		.upfront-plain_txt h4{
		    margin:0;
		}
	"
	), 
"wrapper_id" => "wrapper-1406209692911-1852", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 5
		), 
	"mobile" => array(
		"col" => 5
		)
	)
));

$prefooter->add_element("PlainTxt", array(
"columns" => "7", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "3", 
"margin_bottom" => "0", 
"id" => "module-1406210660792-1159", 
"rows" => 25, 
"options" => array(
	"view_class" => "PlainTxtView", 
	"id_slug" => "plain_text", 
	"content" => "<h4 class=\"\"><span class=\"uf_font_icon\" style=\"font-size: 65px; top: 35px;\"><span class=\"inline_color\" style=\"color: rgb(255, 225, 94)\">a</span></span> <span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">Call us now</span></h4><h4 class=\"\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span class=\"inline_color\" style=\"color: rgb(255, 255, 255)\">1300 Fixer</span></h4>", 
	"type" => "PlainTxtModel", 
	"element_id" => "text-object-1406210660791-1219", 
	"class" => "c24 upfront-plain_txt", 
	"has_settings" => 1, 
	"is_edited" => true, 
	"border_style" => "none", 
	"border_width" => 1, 
	"border_color" => "", 
	"bg_color" => "", 
	"theme_style" => "footer-text-boxes", 
	"anchor" => "", 
	"row" => 19, 
	"style" => "
		.upfront-plain_txt h4{
		    margin:0;
		}
	"
	), 
"wrapper_id" => "wrapper-1406210660792-1159", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 8
		), 
	"mobile" => array(
		"col" => 8
		)
	)
));

$regions->add($prefooter);

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

