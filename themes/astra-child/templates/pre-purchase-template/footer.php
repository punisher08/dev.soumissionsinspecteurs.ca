<?php
$footer = get_sub_field('fields');
$page = get_the_title();
if($page == "presale-inspection"){
	echo '</div></div></div>';
}
elseif($page == "Pre-purchase inspection"){
	echo '</div></div></div></div>';
}
else{
	echo '</div></div></div></div>';
}
// echo get_custom_footer($footer);

?>