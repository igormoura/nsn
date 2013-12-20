<?php

class Helpers
{       
    
        // BUSCAR POR PERIODO DA DATA INFORMADA
        public function buscarPorPeriodo($data){
             if(isset($data) && $data != ''){
                    $inicio = explode('/', substr($data,0,10));
                    $fim = explode('/', substr($data,13,10));
                    $inicioData = $inicio[2]. '-'. $inicio[1]. '-'. $inicio[0]. ' 00:00:00';
                    $fimData = $fim[2]. '-'. $fim[1]. '-'. $fim[0]. ' 23:59:59';  
                    return array($inicioData, $fimData);
                }else{
                    $aux = mktime (0, 0, 0, date("m"), date("d")-3, date("Y"));
                    $fimData = date('Y-m-d');
                    $inicioData = date('Y-m-d', $aux);
                    
                    return array($inicioData, $fimData);
                }
        }
        
        public function selectTop($sizeChart, $totalChart){
            $selectTop;
            if($totalChart == 0){
                $top = intval($sizeChart);
                if ($sizeChart > 0){
                    $selectTop = 'top '.$top;
                }else{
                   $selectTop = 'top 10';
                }
                }else{
                    $selectTop = '';
                }
             return $selectTop;
        }



        // TEMPO DE CARREGAMENTO DA PÁGINA 



        function calcElapsedTime($time) 
        { 
          $mtime=microtime(); 
          $mtime=explode(' ',$mtime); 
          $mtime=$mtime[1]+$mtime[0];  

          $smtime=$time; 
          $smtime=explode(' ',$smtime); 
          $smtime=$smtime[1]+$smtime[0]; 

          $diff = $mtime-$smtime; 

          $daysDiff = floor($diff/60/60/24); 
          $diff -= $daysDiff*60*60*24; 
          $hrsDiff = floor($diff/60/60); 
          $diff -= $hrsDiff*60*60/1000; 
          $minsDiff = floor($diff/60); 
          $diff -= $minsDiff*60; 
          $secsDiff = floor($diff); 
          $diff-=$secsDiff; 
          $msDiff=round($diff*1000); 
          return ($daysDiff.'d '.$hrsDiff.'h '.$minsDiff.'m '.$secsDiff.'s ' . $msDiff .'ms'); 

        } 

        /*$starttime=microtime(); 
        //Do some work.. 
        usleep(2555000); //idle for 2.55 secs. 
        $elapsed=calcElapsedTime($starttime); 
        printf("Elapsed: %s",$elapsed); */


        
	
        
}