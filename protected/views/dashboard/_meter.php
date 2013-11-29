<div id="meter"></div>
<?php 
Yii::app()->clientScript->registerScript('meter',"
$(document).ready(function(){
   s1 = [350];
 
   plot3 = $.jqplot('meter',[s1],{
       seriesDefaults: {
           renderer: $.jqplot.MeterGaugeRenderer,
           rendererOptions: {
               min: 50,
               max: 1000,
               intervals:[250, 500, 750, 1000],
               intervalColors:['#66cc66', '#93b75f', '#E7E658', '#cc6666']
           }
       }
   });
});
");

?>
