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
        
	
        
}