<?php 
$style_array = get_sub_field('specification_style');

$margin_top = $style_array['margin_top'];
$margin_right = $style_array['margin_right']; 
$margin_bottom = $style_array['margin_bottom'];
$margin_left = $style_array['margin_left'];
$margin = $style_array['margin'];

$padding_top = $style_array['padding_top'];
$padding_right = $style_array['padding_right']; 
$padding_bottom = $style_array['padding_bottom'];
$padding_left = $style_array['padding_left'];
$padding = $style_array['padding'];

$border_top = $style_array['border_top'];
$border_right = $style_array['border_right']; 
$border_bottom = $style_array['border_bottom'];
$border_left = $style_array['border_left'];
$border = $style_array['border_width'];
$border_style = $style_array['border_style'];
$border_color = $style_array['border_color'];

$background_color = $style_array['background_color'];
$background_image = $style_array['background_image'];
$background_position = $style_array['background_position'];
$background_style = $style_array['background_style'];

$visible = get_sub_field('section_visibility');
$class = get_sub_field('section_class');
$section_id = get_sub_field('section_id');
$background_attachment = get_sub_field('background_attachment');
//$screenwidth = "<script>document.write(screen.width);</script>";

if($margin_top){
	$style .= "margin-top:".$margin_top.";";
}
if($margin_right){
	$style .= "margin-right:".$margin_right.";";
}
if($margin_bottom){
	$style .= "margin-bottom:".$margin_bottom.";";
}
if($margin_left){
	$style .= "margin-left:".$margin_left.";";
}
if($padding_top){
	$style .= "padding-top:".$padding_top.";";
}
if($padding_right){
	$style .= "padding-right:".$padding_right.";";
}
if($padding_bottom){
	$style .= "padding-bottom:".$padding_bottom.";";
}
if($padding_left){
	$style .= "padding-left:".$padding_left.";";
}

if(!empty($border_style)){
    $style .= "border-style: ".$border_style.";border-width:".$border.";";
}
else{
	if($border_top){
		$style .= "border-top-width:".$border_top.";";
	}
	if($border_right){
		$style .= "border-right-width:".$border_right.";";
	}
	if($border_bottom){
		$style .= "border-bottom-width:".$border_bottom.";";
	}
	if($border_left){
		$style .= "border-left-width:".$border_left.";";
	}
}
if(!empty($border_color)){
    $style .= "border-color: ".$border_color.";";
}
//$style = "margin:'".$margin."';";
//$style .= "padding:".$padding."; ";
// if(!empty($border_style)){
//     $style = $style."border-width:".$border."; border-style: ".$border_style."; border-color: ".$border_color."; ";
// }

if(!empty($background_color)){
	if(get_row_layout() != 'latest_videos'){
    $style = $style."background-color:".$background_color.";";
	}
}

if(!empty($background_image)){
    $style = $style."background:"."url(".$background_image['url']."); "."background-size:".$background_style."; background-position:".$background_position.";";
}

if(!empty($background_image)){
    $style = $style."background:"."url(".$background_image['url']."); "."background-size:".$background_style."; background-position:".$background_position."; background-attachment:". $background_attachment.";";
}
// if($visibiity == 'hide'){
// 	$style = "display: none";
// }
//echo $style;
//echo "<pre>";
//print_r($style_array);
//echo "</pre>";
 ?>