<?php if ( function_exists('register_sidebar') ) { register_sidebar();register_sidebar();}

function xcollapse($atts, $content=null){
	extract(shortcode_atts(array("title"=>"","class"=>""),$atts));
	return '<div style="margin:0.5em 0;width:98%"><div class="xControl"><span class="xTitle"><span class="'.$class.'">'.$title.'</span></span><a href="javascript:void(0)" class="collapseButton xButton"> detail</a><div style="clear:both"></div></div><div class="xContent" style="display:none">'.$content.'</div></div>';
}
 
add_shortcode('dee','xcollapse');

?>
