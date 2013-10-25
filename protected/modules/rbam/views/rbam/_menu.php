<?php
/* SVN FILE: $Id: _menu.php 9 2010-12-17 13:21:39Z Chris $*/
/**
* RBAM menu partial view.
*
* @copyright	Copyright &copy; 2010 PBM Web Development - All Rights Reserved
* @package		RBAM
* @since			V1.0.0
* @version		$Revision: 9 $
* @license		BSD License (see documentation)
*/
$this->widget('bootstrap.widgets.TbMenu', array(
	'id'=>'rbam-menu',
        'type' => 'tabs', // pills, tabs, list
	'firstItemCssClass'=>'first',
	'items'=>$this->getModule()->getMenuItems()
));

// show and hide auth items sub-menu
/*Yii::app()->getClientScript()->registerScript('rbamMenu', 'jQuery("#rbam-menu li").hover(
	function() {
		jQuery("ul:first", this).slideDown("fast");
	},
	function() {
		jQuery("ul:first", this).slideUp("fast");
	}
);');*/

?>


<script>
$(function(){
  function stripTrailingSlash(str) {
    if(str.substr(-1) == '/') {
      return str.substr(0, str.length - 1);
    }
    return str;
  }

  var url = window.location.pathname;  
  var activePage = stripTrailingSlash(url);

  $('.nav li a').each(function(){  
    var currentPage = stripTrailingSlash($(this).attr('href'));

    if (activePage == currentPage) {
      $(this).parent().addClass('active'); 
    } 
  });
});
</script>

