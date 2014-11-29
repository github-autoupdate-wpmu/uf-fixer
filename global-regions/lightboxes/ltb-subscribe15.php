<?php
$ltb_subscribe15 = upfront_create_region(
			array(
"name" => "ltb-subscribe15", 
"title" => "subscribe", 
"type" => "lightbox", 
"scope" => "local", 
"container" => "lightbox", 
"sub" => "lightbox", 
"position" => 1, 
"allow_sidebar" => true
),
			array(
"col" => 10, 
"height" => "450", 
"click_out_close" => "yes", 
"show_close" => "yes", 
"overlay_color" => "rgba(38,58,77,0.75)", 
"lightbox_color" => "rgb(255, 226, 98)", 
"background_type" => "", 
"delete" => false
)
			);

$ltb_subscribe15->add_element("Ucontact", array(
"columns" => "8", 
"margin_left" => "1", 
"margin_right" => "0", 
"margin_top" => "5", 
"margin_bottom" => "0", 
"id" => "module-1417244527218-1054", 
"rows" => 87, 
"options" => array(
	"form_add_title" => array(), 
	"form_title" => "Contact form", 
	"form_name_label" => "Your name:", 
	"form_email_label" => "Your email:", 
	"form_email_to" => "sergey@incsub.com", 
	"show_subject" => array(), 
	"form_subject_label" => "Your subject:", 
	"form_default_subject" => "Sent from the website", 
	"form_message_label" => "Your message:", 
	"form_button_text" => "Send", 
	"form_validate_when" => "submit", 
	"form_label_position" => "above", 
	"type" => "UcontactModel", 
	"view_class" => "UcontactView", 
	"class" => "c24 upfront-contact-form", 
	"has_settings" => 1, 
	"id_slug" => "ucontact", 
	"element_id" => "ucontact-object-1417244527211-1482", 
	"row" => 87, 
	"anchor" => "", 
	"theme_style" => "ucontact-subscribe-style"
	), 
"wrapper_id" => "wrapper-1417244574245-1646", 
"new_line" => "true", 
"wrapper_breakpoint" => array(
	"tablet" => array(
		"col" => 9
		), 
	"mobile" => array(
		"col" => 9
		)
	)
));

$regions->add($ltb_subscribe15);

