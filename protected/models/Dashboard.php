<?php

class Dashboard extends CActiveRecord
{
    public $sizeChart;
    public $totalChart;
    public $dataGrafico;
    public $corporativo;
    public $condominioPredial = 'Belvedere Park';
    
    //GETTER AND SETTER
    public function getSizeChart(){
        return $this->sizeChart;
    }
    
    public function setSizeChart($sizeChart) {
        $this->sizeChart = $sizeChart;
    }
        
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Ocorrencia the static model class
     */
	public static function model($className=__CLASS__)
	{
            return parent::model($className);
	}

        /**
	* @return CDbConnection database connection
	*/
	public function getDbConnection()
	{
		return Yii::app()->thirdb;
	}
        
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Ocorrencia';
	}
    
        /**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
                        'sizeChart'         =>    Yii::t('main','dashboard.sizeChart'),
                        'totalChart'        =>    Yii::t('main','dashboard.totalChart'),
                        'dataGrafico'       =>    Yii::t('main','dashboard.dataGrafico'),
                        'corporativo'       =>    Yii::t('main','dashboard.corporativo'),
                        'condominioPredial' =>    Yii::t('main','dashboard.condominioPredial'),
		);
	}
        public function rules()
        {
            // NOTE: you should only define rules for those attributes that
            // will receive user inputs.
            return array(
                //array('DataOcorrenciaF, Ocorrencia, dt_hr_ini_atendimento, dt_hr_fim_atendimento', 'safe'),
                //The following rule is used by search().
                //The following rule is used by search().
                //array('condominioPredial, corporativo, dataGrafico, totalChart, sizeChart', 'required'),
                array('condominioPredial, corporativo, dataGrafico, totalChart, sizeChart', 'safe', 'on'=>'search'),

            );
        }
        
        public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('sizeChart',$this->sizeChart);
		$criteria->compare('totalChart',$this->totalChart);
		$criteria->compare('dataGrafico',$this->dataGrafico);
		$criteria->compare('corporativo',$this->corporativo);
		$criteria->compare('sizeChart',$this->sizeChart);
		$criteria->compare('condominioPredial',$this->condominioPredial);

		return new CArrayDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                                  //'defaultOrder'=>'stamp DESC',
                                    'attributes'=>array('')
                                )
		));
	}
        
        public function ocorrenciaCorporativa(){
            return array (
                '' => 'Todos Clientes',
               'N' => 'Corporativos',
               'S' => 'Sem Corporativos'
            );
        }
        
        public function listCondominios(){
            $sqlCondominios = Yii::app()->thirdb->createCommand()
                         ->select("Condominio")
                         ->from("PredialCondoView")
                         ->group("Condominio")
                         ->order("Condominio")
                         ->queryAll();
           foreach ($sqlCondominios as $condominio) {
                $condominio = (object)$condominio;
                $condominios[$condominio->Condominio] = $condominio->Condominio;
            }
            return $condominios;
        }

        
        /**
         *   MÉTODOS PARA GERAR GRÁFICOS E RELATÓRIOS  
         **/
        
	// GRÁFICOS OCORRÊNCIA POR TIPO DE SERVIÇO
        public function dashboardOcorrencias($nomeGrafico, $valor){
            
            $total = array();
            $totalBar = array();
            $menor = array();
            $menorBar = array();
            $maior = array();
            $maiorBar = array();            
            $relatorios = array();
            
            if($nomeGrafico == null){$nomeGrafico = '';}
            
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->dataGrafico);
            $dataInicio = $aux['0'];
            $dataFim = $aux['1'];
            $selectTop = $helper->selectTop($this->sizeChart,$this->totalChart);
            $corporativo = $this->corporativo;

            // OCORRENCIA POR TIPO DE FECHAMENTO [MENOR-MAIOR]
            $menorMaiorTotal = Yii::app()->thirdb->createCommand()
            ->select($selectTop.' sum(Case when HorasFinalizadas <= 72 then 1
                                    Else 0 end) Menor72Horas,
                              sum(Case when HorasFinalizadas > 72 then 1
                                    Else 0 end) Maior72Horas')
            ->from('dashboardOcorrenciasView');
            
            $menorMaiorTotal = $menorMaiorTotal->where("DataOcorrencia >= '".$dataInicio."' and DataOcorrencia < dateadd(day,1,'".$dataFim."') and (Corporativo = '".$corporativo."' or '' = '".$corporativo."')");
            $menorMaiorTotal = $menorMaiorTotal->order('Count(*) desc');
            $menorMaiorTotal = $menorMaiorTotal->queryAll();

            $menorMaior[] = array('Menor72Horas', intval($menorMaiorTotal[0]['Menor72Horas'])); 
            $menorMaior[] = array('Maior72Horas', intval($menorMaiorTotal[0]['Maior72Horas']));          
            $menorMaiorBar[] = array('name' => 'Menor72Horas', 'type'=>'column', 'data' => array(intval($menorMaiorTotal[0]['Menor72Horas'])));
            $menorMaiorBar[] = array('name' => 'Maior72Horas', 'type'=>'column', 'data' => array(intval($menorMaiorTotal[0]['Maior72Horas'])));
            
            // TIPO: TOTAL - MAIOR72 - MENOR72
            if(($nomeGrafico == 'nmServico') || ($nomeGrafico == 'dsProblema') || ($nomeGrafico == 'ds_setor')){
                $sqlGraficos = Yii::app()->thirdb->createCommand()
                ->select($selectTop.' '.$nomeGrafico.' , sum(Case when HorasFinalizadas <= 72 then 1
                                            Else 0 end) Menor72Horas,
                                      sum(Case when HorasFinalizadas > 72 then 1
                                            Else 0 end) Maior72Horas,
                                    Count(*) Total')
                ->from('dashboardOcorrenciasView')
                ->where("DataOcorrencia >= '".$dataInicio."' and DataOcorrencia < dateadd(day,1,'".$dataFim."') and (Corporativo = '".$corporativo."' or '' = '".$corporativo."')"); 
                
                 if($valor == 'total' || 'totalBar'){
                    $sqlGraficos = $sqlGraficos->order('Total desc');
                }elseif($valor == 'maior' || 'maiorBar'){
                    $sqlGraficos = $sqlGraficos->order('Maior72Horas desc');
                }elseif($valor == 'menor' || 'menorBar'){
                    $sqlGraficos = $sqlGraficos->order('Menor72Horas desc');
                }

                $sqlGraficos = $sqlGraficos->group($nomeGrafico)
                                            ->queryAll();
                /*  
                 *  Foreach irá gerar gráficos de acordo com a referência da variavel $nomeGrafico sendo, 
                 *  nmServico que ira gerar pelo Tipo de Serviço, 
                 *  dsProblema que ira gerar pelo Tipo de Problema,
                 *  ds_setor que ira gerar pelo Tipo de Setor,
                 */
                foreach ($sqlGraficos as $grafico) {
                    $grafico = (object) $grafico;

                    //Pizza
                    $total[] = array($grafico->$nomeGrafico, intval($grafico->Total));
                    $maior[] = array($grafico->$nomeGrafico, intval($grafico->Maior72Horas));
                    $menor[] = array($grafico->$nomeGrafico, intval($grafico->Menor72Horas));
                    
                    //Barra
                    $maiorBar[] = array('name' => $grafico->$nomeGrafico, 'type' => 'column', 'data' => array(intval($grafico->Maior72Horas)));
                    $menorBar[] = array('name' => $grafico->$nomeGrafico, 'type' => 'column', 'data' => array(intval($grafico->Menor72Horas)));
                    $totalBar[] = array('name' => $grafico->$nomeGrafico, 'type' => 'column', 'data' => array(intval($grafico->Total)));
                    
                    if(($nomeGrafico == 'nmServico') || ($nomeGrafico == 'dsProblema')){
                        /* Query para trazer valores para grafico e geração do relatório.*/
                        $sqlRelatorios = Yii::app()->thirdb->createCommand()
                       ->select('NoOcorrencia, NoContrato, Nomecliente, minFinalizadas')
                       ->from('dashboardOcorrenciasView d')
                       ->join('RALSecrel.Cliente c','d.NoContrato = c.NoCliente');

                       if($valor == 'relatorioMenor72'){
                           $HorasFinalizadas = " and HorasFinalizadas <= 72 ";
                       }elseif($valor == 'relatorioMaior72'){
                           $HorasFinalizadas = " and HorasFinalizadas > 72 ";
                       }else{
                           $HorasFinalizadas='';
                       }
                       $sqlRelatorios = $sqlRelatorios->where($nomeGrafico." = '".$grafico->$nomeGrafico."' ".$HorasFinalizadas."and DataOcorrencia >= '".$dataInicio."' and DataOcorrencia < dateadd(day,1,'".$dataFim."') and (Corporativo = '".$corporativo."' or '' = '".$corporativo."')")                                           
                                                      ->order($nomeGrafico.' asc')
                                                      ->order('minFinalizadas desc')
                                                      ->queryAll();
                       /*
                         * Gera relatórios por cada "fatia" do gráfico.
                         */
                        foreach ($sqlRelatorios as $relatorio){
                            $relatorio = (object)$relatorio;
                            $relatorios[trim($grafico->$nomeGrafico)][] = array('Nº Ocorrencia' => $relatorio->NoOcorrencia, 'Nº Contrato' => $relatorio->NoContrato, 'Cliente' => $relatorio->Nomecliente, 'Minutos' => $relatorio->minFinalizadas);
                        }
                        
                    }elseif($nomeGrafico == 'ds_setor'){
                        $sqlRelatorios = Yii::app()->thirdb->createCommand()
                        ->select('ds_Setor,convert(decimal(11,2),(100.00*(count(*) - count(DataOcorrenciaF)))/count(*)) Abertas,convert(decimal(11,2),count(DataOcorrenciaF)*100.00/count(*)) Fechadas, count(*) qtTotal ')
                        ->from('dashboardOcorrenciasView')
                        ->where("DataOcorrencia >= '".$dataInicio."' and DataOcorrencia < dateadd(day,1,'".$dataFim."') and (Corporativo = '".$corporativo."' or '' = '".$corporativo."')")
                        ->group('ds_Setor')
                        ->order('qtTotal desc')
                        ->queryAll();
                        
                        foreach ($sqlRelatorios as $relatorio){
                            $relatorio = (object)$relatorio;
                            $relatorios[trim($grafico->$nomeGrafico)][] = array('Setor' => $relatorio->ds_Setor, 'Abertas' => $relatorio->Abertas.' %', 'Fechadas' => $relatorio->Fechadas.' %', 'Quantidade Total' => $relatorio->qtTotal);
                        }
                    }
                }
            }
            
            if($valor == 'menorMaior'){
                return $menorMaior;
            }elseif($valor == 'menorMaiorBar'){
                return $menorMaiorBar;
            }elseif ($valor == 'menor'){
                return $menor;
            }elseif($valor == 'maior'){
                return $maior;
            }elseif ($valor == 'menorBar'){
                return $menorBar;
            }elseif ($valor == 'maiorBar'){
                return $maiorBar;
            }elseif ($valor == 'total'){
                return $total;
            }elseif ($valor == 'totalBar'){
                return $totalBar;
            }elseif ($valor == 'relatorioTotal' || 'relatorioMenor72' || 'relatorioMaior72'){
                return $relatorios;
            }
        }
        
         // GRÁFICOS VENDAS
        public function dashboardVendas($views, $valor){
            
            // BUSCA POR PERÍODO
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->dataGrafico);
            $dataInicio = $aux['0'];
            $dataFim = $aux['1'];
            $selectTop = $helper->selectTop($this->sizeChart, $this->totalChart);
            
            // VARIAVEIS SELECT
            $view = '';
            $columnName = '';
            $null = '';
            
            if ($views == 'grupoServicos'){
                $view = 'dashboardGrupoServVendas_Func' and $columnName = 'NmGrupoServ';
            }elseif($views == 'servicos'){
                $view = 'dashboardServicoVendas_Func' and $columnName = 'NmServico' and $null = ', null';
            }elseif($views == 'cursos'){
                $view = 'dashboardCursoTurmaVendas_Func' and $columnName = 'NomeTreinamento';
            }elseif($views == 'cliente'){
                $view = 'dashboardVendas_1_View';
            }elseif($views == 'totalVenda'){
                $view = 'dashboardGeralVendas_Func'; 
            }elseif($views == 'tipoAluno'){
                $view = 'dashboardGeralVendas_CursoTurma_Func ';
            }
            
            if(($views == 'grupoServicos') || ($views == 'servicos') || ($views == 'cursos')){ 
             // CONSULTA GRUPO SERVIÇO - SERVICOS - CURSOS
             $graficos = Yii::app()->thirdb->createCommand()
                     ->select($selectTop.' '.$columnName.', (Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo) as Valor ')
                     ->from($view."('".$dataInicio."','".$dataFim."'".$null.")")
                     ->where('Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ')
                     ->order('Valor desc')
                     ->queryAll();
             
             // GRÁFICOS
             $grupoServicos = array();
             $grupoServicosBar = array();
             
             $servicos = array();
             $servicosBar = array();
             
             $cursosTurmas = array();
             $cursosTurmasBar = array();
             
             //RELATÓRIOS
             $relatorios = array();
             
             foreach ($graficos as $grafico) { 
                 $grafico = (object) $grafico;
                 //Pizza
                 $grupoServicos[] =  array($grafico->$columnName, intval($grafico->Valor));
                 $servicos[]      =  array($grafico->$columnName, intval($grafico->Valor));
                 $cursosTurmas[]  =  array($grafico->$columnName, intval($grafico->Valor));
                 
                 // Barra
                 $grupoServicosBar[] = array('name' => $grafico->$columnName, 'type' => 'column', 'data' => array(intval($grafico->Valor)));
                 $servicosBar[]      = array('name' => $grafico->$columnName, 'type' => 'column', 'data' => array(intval($grafico->Valor)));
                 $cursosTurmasBar[]  = array('name' => $grafico->$columnName, 'type' => 'column', 'data' => array(intval($grafico->Valor))); 

                         
                 $sqlRelatorios = Yii::app()->thirdb->createCommand()
                 ->select('NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor')
                 ->from('dashboardVendas_1_View')
                 ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."') and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                 ->queryAll();
                
                foreach ($sqlRelatorios as $relatorio){
                    $relatorio = (object)$relatorio;
                    $relatorios[trim($grafico->$columnName)][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Grupo Serviço' => $relatorio->NmGrupoServ, 'Serviço'=>$relatorio->NmServico,'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);
                }
             }
            
            }elseif(($views == 'totalVenda') || ($views == 'tipoAluno')){
                // CONSTULTA TOTAL VENDAS
                $graficos2 = Yii::app()->thirdb->createCommand()
                    ->select('Convertido_VrServ_Cli_Antigo, Convertido_VrServ_Cli_Novo')
                    ->from($view." ('".$dataInicio."','".$dataFim."')" )
                    ->queryAll();
                    
                    $geral = array();
                    $geralBar = array();
                    
                    $geral[] = array('Clientes Antigos', intval($graficos2[0]['Convertido_VrServ_Cli_Antigo']));
                    $geral[] = array('Clientes Novos', intval($graficos2[0]['Convertido_VrServ_Cli_Novo']));
                    
                    // BARRA
                    $geralBar[] = array('name' => 'Clientes Antigos', 'type'=>'column', 'data' => array(intval($graficos2[0]['Convertido_VrServ_Cli_Antigo'])));
                    $geralBar[] = array('name' => 'Clientes Novos', 'type'=>'column', 'data' => array(intval($graficos2[0]['Convertido_VrServ_Cli_Novo'])));
                    
                    
                    
                    $sqlclienteAntigo = Yii::app()->thirdb->createCommand()
                    ->select('NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor')
                    ->from('dashboardVendas_1_View')
                    ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."')and Cliente = 'Cliente Antigo' and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                    ->queryAll();
                    
                     foreach ($sqlclienteAntigo as $relatorio){
                        $relatorio = (object)$relatorio;
                        $relatorios[trim('Clientes Antigos')][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Grupo Serviço' => $relatorio->NmGrupoServ, 'Serviço'=>$relatorio->NmServico,'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);                       
                    }
                    
                    $sqlclienteNovo = Yii::app()->thirdb->createCommand()
                    ->select('NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor')
                    ->from('dashboardVendas_1_View')
                    ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."')and Cliente = 'Cliente Novo' and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                    ->queryAll();
                    
                    foreach ($sqlclienteNovo as $relatorio){
                        $relatorio = (object)$relatorio;
                        $relatorios[trim('Clientes Novos')][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Grupo Serviço' => $relatorio->NmGrupoServ, 'Serviço'=>$relatorio->NmServico,'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);
                    }
                    
                    // CONSULTA TOTAL TIPOS ALUNOS VENDAS
                    $graficos3 = Yii::app()->thirdb->createCommand()
                    ->select('Convertido_VrServ_Cli_Antigo, Convertido_VrServ_Cli_Novo')
                    ->from($view." ('".$dataInicio."','".$dataFim."')" )
                    ->queryAll();
                    
                                 
                         
                    $geralProspectCursos = array();
                    $geralProspectCursosBar = array();
                    
                    //PIZZA
                    $geralProspectCursos[] = array('Alunos Antigos', intval($graficos3[0]['Convertido_VrServ_Cli_Antigo']));
                    $geralProspectCursos[] = array('Alunos Novos', intval($graficos3[0]['Convertido_VrServ_Cli_Novo']));
                    
                    // BARRA
                    $geralProspectCursosBar[] = array('name' => 'Alunos Antigos', 'type'=>'column', 'data' => array(intval($graficos3[0]['Convertido_VrServ_Cli_Antigo'])));
                    $geralProspectCursosBar[] = array('name' => 'Alunos Novos', 'type'=>'column', 'data' => array(intval($graficos3[0]['Convertido_VrServ_Cli_Novo'])));                         
            
                    $sqlclienteAntigo = Yii::app()->thirdb->createCommand()
                    ->select('NoCLiente Contrato,NomeProspect,Cliente,NomeTreinamento,DtVend,Valor')
                    ->from('dashboardVendas_CursoTurma_View')
                    ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."')and Cliente = 'Cliente Antigo' and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                    ->queryAll();
                    
                     foreach ($sqlclienteAntigo as $relatorio){
                        $relatorio = (object)$relatorio;
                        $relatorios[trim('Alunos Antigos')][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Treinamento' => $relatorio->NomeTreinamento, 'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);                       
                    }
                    
                    $sqlclienteNovo = Yii::app()->thirdb->createCommand()
                    ->select('NoCLiente Contrato,NomeProspect,Cliente,NomeTreinamento,DtVend,Valor')
                    ->from('dashboardVendas_CursoTurma_View')
                    ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."')and Cliente = 'Cliente Novo' and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                    ->queryAll();
                    
                    foreach ($sqlclienteNovo as $relatorio){
                        $relatorio = (object)$relatorio;
                        $relatorios[trim('Alunos Novos')][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Treinamento' => $relatorio->NomeTreinamento, 'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);
                    }
                    
            }
                  
            
            // CONSULTA POR CLIENTE VENDAS
            $graficos4 = Yii::app()->thirdb->createCommand()
                    ->select($selectTop.'NomeProspect, (Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo) as Valor ')
                    ->from('dashboardVendas_1_View')
                    ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."') and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                    ->order('Valor desc')
                    ->queryAll();

            
            $prospect = array();
            $prospectBar = array();
            
            foreach ($graficos4 as $grafico) {
                $grafico = (object) $grafico;
                //Pizza
                $prospect[] = array($grafico->NomeProspect, intval($grafico->Valor));
                // Barra
                $prospectBar[] = array('name' => $grafico->NomeProspect, 'type' => 'column', 'data' => array(intval($grafico->Valor)));
            
                $sqlRelatorios = Yii::app()->thirdb->createCommand()
                 ->select('NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor')
                 ->from('dashboardVendas_1_View')
                 ->where("DtIndic >= '".$dataInicio."' and dtIndic < dateadd(day,1, '".$dataFim."') and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                 ->queryAll();
                
                foreach ($sqlRelatorios as $relatorio){
                    $relatorio = (object)$relatorio;
                    $relatorios[trim($grafico->NomeProspect)][] = array('Nº Contrato' => $relatorio->Contrato, 'Cliente' => $relatorio->NomeProspect, 'Tipo' => $relatorio->Cliente, 'Grupo Serviço' => $relatorio->NmGrupoServ, 'Serviço'=>$relatorio->NmServico,'Data Venda' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);
                }
                
            }

             if($valor == 'geral'){
                return $geral;
            }elseif($valor == 'geralBar'){
                return $geralBar;
            }elseif($valor == 'grupoServicos'){
                return $grupoServicos;
            }elseif($valor == 'grupoServicosBar'){
                return $grupoServicosBar;
            }elseif($valor == 'servicos'){
                return $servicos;
            }elseif($valor == 'servicosBar'){
                return $servicosBar;
            }elseif($valor == 'prospect'){
                return $prospect;
            }elseif($valor == 'prospectBar'){
                return $prospectBar;
            }elseif($valor == 'geralProspectCursos'){
                return $geralProspectCursos;
            }elseif($valor == 'geralProspectCursosBar'){
                return $geralProspectCursosBar;
            }elseif($valor == 'cursosTurmas'){
                return $cursosTurmas;
            }elseif($valor == 'cursosTurmasBar'){
                return $cursosTurmasBar;
            }elseif($valor == 'relatorio') {
                return $relatorios;
            }
        }
        
        // GRÁFICOS CANCELAMENTO CONTRATOS
        public function dashboardCancelamentos($valor, $idRelational){           
            
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->dataGrafico);
            $dataInicio = $aux['0'];
            $dataFim = $aux['1'];
            
            $selectTop = $helper->selectTop($this->sizeChart,$this->totalChart);
            
            /*  GRÁFICOS E RELATORIOS GRUPO DE SERVIÇOS  */
            $grupoServicos = Yii::app()->thirdb->createCommand()
            ->select($selectTop."Case when sum(Valor) > 0 then NmGrupoServ else NmGrupoServ+' (Negativo)' end NmGrupoServ,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal")
            ->from('dashboardServicosCanceladosView')
            ->where("dtCanc >= '".$dataInicio."' and dtCanc < dateadd(day,1,'".$dataFim."')")
            ->group('NmGrupoServ')
            ->order('sum(Valor) desc')
            ->queryAll();
            
            $grupoServico = array();
            $grupoServicoBar = array();
            
            $relatorios = array ();
            $relatorios2 = array ();
            $relatorios3 = array ();
            
            foreach ($grupoServicos as $grafico) { 
                $grafico = (object) $grafico;
                //Pizza
                $grupoServico[] = array($grafico->NmGrupoServ, intval($grafico->vrTotal));
                // Barra
                $grupoServicoBar[] = array('name' => $grafico->NmGrupoServ, 'type' => 'column', 'data' => array(intval($grafico->vrTotal)));
                // Relatorios Grupo de Serviço                
                
                $sqlRelatorios2 = Yii::app()->thirdb->createCommand()
                ->select('TipoCobrAdic servico,nmservico,count(*) qtTotal,sum(Valor) vrTotal')
                ->from('dashboardServicosCanceladosView')
                ->where("dtCanc >= '".$dataInicio."' and dtCanc < dateadd(day,1,'".$dataFim."') and NmGrupoServ = '".$grafico->NmGrupoServ."'")
                ->group('TipoCobrAdic,Nmservico')
                ->order('vrTotal desc')
                ->queryAll();
                foreach ($sqlRelatorios2 as $relatorio2){
                    $relatorio2 = (object)$relatorio2;
                    $relatorios2[trim($grafico->NmGrupoServ)][] = array('id'            => $relatorio2->servico.'-'.$dataInicio.'-'.$dataFim, 
                                                                        'Servico'       => $relatorio2->servico, 
                                                                        'NomeServico'   => $relatorio2->nmservico, 
                                                                        'Quantidade'    => $relatorio2->qtTotal, 
                                                                        'Valor'         => $relatorio2->vrTotal);
                }
                
                if($idRelational!=null){                
                    $explode = explode("-", $idRelational);
                    $servico = $explode[0];
                    $dataListInicio = $explode[1].'-'.$explode[2].'-'.$explode[3];
                    $dataListFim = $explode[4].'-'.$explode[5].'-'.$explode[6];                    

                    $sqlRelatorios3 = Yii::app()->thirdb->createCommand()
                    ->select('Seq NoProspect,NoContrato,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor')
                    ->from('dashboardServicosCanceladosView')
                    ->where("dtCanc >= '".$dataListInicio."' and dtCanc < dateadd(day,1,'".$dataListFim."') and TipoCobrAdic = '".$servico."'")
                    ->queryAll();
                    foreach ($sqlRelatorios3 as $relatorio3){
                       $relatorio3 = (object)$relatorio3;
                       $relatorios[trim($relatorio2->nmservico)][] = array('id'            => $relatorio3->nmServico, 
                                                                           'Cliente'       => $relatorio3->NoProspect, 
                                                                           'Nº Contrato'   => $relatorio3->NoContrato, 
                                                                           'Nome Cliente'  => $relatorio3->NomeProspect, 
                                                                           'Observação'    => $relatorio3->Observacao,
                                                                           'Data Venda'    => $relatorio3->DtVend,
                                                                           'Serviço'       => $relatorio3->nmServico,
                                                                           'Valor'         => $relatorio3->valor);
                    }
                }
           }
               
            /* GRÁFICOS E RELATORIOS MOTIVOS CANCELAMENTOS */
            $motivos = Yii::app()->thirdb->createCommand()
            ->select($selectTop."Case when sum(Valor) > 0 then DescrMotivo else DescrMotivo+' (Negativo)' end DescrMotivo,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal")
            ->from('dashboardServicosCanceladosView')
            ->where("dtCanc >= '".$dataInicio."' and dtCanc < dateadd(day,1,'".$dataFim."')")
            ->group('DescrMotivo')
            ->order('sum(Valor) desc')
            ->queryAll();
            
            $motivo = array();
            $motivoBar = array();
            
            foreach ($motivos as $grafico) { 
                $grafico = (object) $grafico;
                // Pizza
                $motivo[] = array($grafico->DescrMotivo, intval($grafico->vrTotal));
                // Barra
                $motivoBar[] = array('name' => $grafico->DescrMotivo, 'type' => 'column', 'data' => array(intval($grafico->vrTotal)));
                
                $sqlRelatorios2 = Yii::app()->thirdb->createCommand()
                ->select('TipoCobrAdic servico,nmservico,count(*) qtTotal,sum(Valor) vrTotal')
                ->from('dashboardServicosCanceladosView')
                ->where("dtCanc >= '".$dataInicio."' and dtCanc < dateadd(day,1,'".$dataFim."') and DescrMotivo = '".$grafico->DescrMotivo."'")
                ->group('TipoCobrAdic,Nmservico')
                ->order('vrTotal desc')
                ->queryAll();
                
                foreach ($sqlRelatorios2 as $relatorio2){
                    $relatorio2 = (object)$relatorio2;
                    $relatorios2[trim($grafico->DescrMotivo)][] = array('id'            => $relatorio2->servico.'-'.$dataInicio.'-'.$dataFim, 
                                                                        'Servico'       => $relatorio2->servico, 
                                                                        'NomeServico'   => $relatorio2->nmservico, 
                                                                        'Quantidade'    => $relatorio2->qtTotal, 
                                                                        'Valor'         => $relatorio2->vrTotal);                                              
                }                                 
            }
            
            if($idRelational!=null){    
                    $idRelational = trim($idRelational); 
                    $explode = explode("-",$idRelational);
                    $servico = $explode[0];
                    $dataListInicio = $explode[1].'-'.$explode[2].'-'.$explode[3];
                    $dataListFim = $explode[4].'-'.$explode[5].'-'.$explode[6];  
                    
                    $sqlRelatorios3 = Yii::app()->thirdb->createCommand()
                    ->select('DISTINCT Seq NoProspect,NoContrato,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor, getDate() data')
                    ->from('dashboardServicosCanceladosView')
                    ->where("dtCanc >= '".$dataListInicio."' and dtCanc < dateadd(day,1,'".$dataListFim."') and TipoCobrAdic = '".$servico."'")
                    ->queryAll();      
                    
                    foreach ($sqlRelatorios3 as $relatorio3) {
                        $relatorio3 = (object)$relatorio3;
                        $relatorios3[trim($relatorio2->nmservico)][] = array('id'         => $relatorio3->nmServico, 
                                                                            'Cliente'     => $relatorio3->NoProspect, 
                                                                            'Data'        => $relatorio3->data, 
                                                                            'NoContrato'  => $relatorio3->NoContrato, 
                                                                            'NomeCliente' => $relatorio3->NomeProspect, 
                                                                            'Observacao'  => $relatorio3->Observacao,
                                                                            'DataVenda'   => $relatorio3->DtVend,
                                                                            'Servico'     => $relatorio3->nmServico,
                                                                            'Valor'       => $relatorio3->valor );
                    }
                }
                
                  
            
            
            // RETORNO DE ACORDO COM O PARÂMETRO $VALOR
            if($valor == 'grupoServico'){
                return $grupoServico;
            }elseif($valor == 'grupoServicoBar'){
                return $grupoServicoBar;
            }elseif($valor == 'motivo'){
                return $motivo;
            }elseif($valor == 'motivoBar'){
                return $motivoBar;
            }elseif($valor == 'relatorio'){
                return $relatorios;
            }elseif($valor == 'relatorio2'){
                return $relatorios2;
            }elseif($valor == 'relatorio3'){
                return $relatorios3;
            }

        }
               
        // GRÁFICOS PREDIAL FIBRA
       public function dashboardPredial($valor, $idRelational)
       {
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->dataGrafico);            
            $dataInicio = $aux['0'];
            $dataFim = $aux['1'];

            $periodos = array();
            $series = array();

            $sql = Yii::app()->thirdb->createCommand()
             ->select("Condominio,CodigoEstadoContr, 
                     Count(*) QtAtivos, 
                     sum(isnull(Valor,0)) ValorAtivo, 
                     (Select count(*) 
                     from [SNETD].[dbo].[PredialCondoView] dc1 
                     where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'C' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)) as qtCanc, 
                     isnull((Select sum(Valor) vrCanc 
                     from [SNETD].[dbo].[PredialCondoView] dc1 
                     where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'C' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)),0) as vrCanc, 
                     (Select count (*)
                     from [SNETD].[dbo].[PredialCondoView] dc1 
                     where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'S' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)) as qtSusp, 
                     isnull((Select sum(Valor) vrSusp 
                     from [SNETD].[dbo].[PredialCondoView] dc1 
                     where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'S' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)),0) as vrSusp, 
                     month(Vencimento) me_, 
                     year(Vencimento) an_,(cast(month(Vencimento) as varchar(50))+'-'+cast(year(Vencimento) as varchar(50))) mean ")

             ->from('SNETD.dbo.PredialCondoView dc ')
             ->where("Condominio = '".$this->condominioPredial."' and CodigoEstadoContr = 'A' and Vencimento >= '".$dataInicio."' and Vencimento < dateadd(month,0,'".$dataFim."') ")
             ->group("Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento),cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar)")
             ->order('an_ ,me_ ')
             ->queryAll();
           
           foreach ($sql as $predial) {
               $predial = (object)$predial;
               
               $periodos[] = array ($predial->mean);                               
               
               $series[] = array(
                   'name' => $predial->mean, 
                   'data' => array(intval($predial->ValorAtivo),intval($predial->vrCanc),intval($predial->vrSusp)));              
           }
           
           $sqlGrid = Yii::app()->thirdb->createCommand()
             ->select("year(Vencimento) ano, Condominio,CodigoEstadoContr,Count(*) Quant, sum(Valor) Valor,month(Vencimento) mes,year(Vencimento) ano ")
             ->from('SNETD.dbo.PredialCondoView dc ')         
             ->where("Vencimento >= '".$dataInicio."' and Vencimento < dateadd(month,1,'".$dataFim."') and Condominio = '".$this->condominioPredial."' ")            
             ->group("Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento)")
             ->order('mes,ano,Condominio')
             ->queryAll();
           
           $relatorios = array();
           
            foreach ($sqlGrid as $relatorio) {
                $relatorio = (object)$relatorio;
                
                $id = $relatorio->mes.'-'.$relatorio->ano;
                
                $relatorios[$id][] = array(
                                'id'                => $id.'-'.$relatorio->CodigoEstadoContr.'-'.$dataInicio.'-'.$dataFim.'-'.$this->condominioPredial,
                                'Condominio'        => $relatorio->Condominio,
                                'CodigoEstadoContr' => $relatorio->CodigoEstadoContr,
                                'Quantidade'        => $relatorio->Quant,
                                'Valor'             => 'R$ '.$relatorio->Valor,
                                'Mes'               => $relatorio->mes,
                                'Ano'               => $relatorio->ano
                        );
            }
            
            

            if($idRelational!=null){                
                $explode = explode("-", $idRelational);
                $mean = $explode[0].'-'.$explode[1];
                $status =  $explode[2];   
                $dataListInicio = $explode[3].'-'.$explode[4].'-'.$explode[5];
                $dataListFim = $explode[6].'-'.$explode[7].'-'.$explode[8];
                $condominio = $explode[9];
                
               $sqlList = Yii::app()->thirdb->createCommand()
                ->select("cl.NomeCliente, CONVERT(VARCHAR(24),DataCancContr,103) DataCanc,CONVERT(VARCHAR(24),Vencimento,103) Venc, NoContrato,Valor,Seq,DescrTipo,NomeCondo + ' | ' + cl.Endereco NomeCond,cast(CodigoEstadoContr as varchar(10)) Estado ")
                ->from('SNETD.dbo.PredialCondoView pc ')     
                ->join('SNETD.Ralsecrel.Cliente cl', 'cl.NoCliente = pc.NoContrato ')
                ->join('SNETD.dbo.ListServicosView l', 'pc.TipoCobrAdic = l.TipoCobrAdic ')
                ->where("Vencimento >= '".$dataListInicio."' and Vencimento < dateadd(month,1,'".$dataListFim."') and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '".$mean."' and Condominio = '".$condominio."' and CodigoEstadoContr = '".$status."'")            
                ->queryAll();
               
                $relatorioList = array();

                
                foreach ($sqlList as $list) {
                    $list = (object)$list;
                    $relatorioList[$id][] = array(
                                'id'=>$list->NomeCliente, 
                                'NomeCliente'=>$list->NomeCliente, 
                                'DataCanc'=>$list->DataCanc,  
                                'Venc'=>$list->Venc,        
                                'NoContrato'=>$list->NoContrato,  
                                'Valor'=>'R$ '.$list->Valor,       
                                'Seq'=>$list->Seq,        
                                'DescrTipo'=>$list->DescrTipo,  
                                'NomeCond'=>$list->NomeCond,  
                                'Estado'=>$list->Estado,    
                    );
                }
            }
            
           if($valor == 'relatorio'){
               return $relatorios;
           }elseif($valor == 'series'){
               return $series;
           }elseif($valor == 'list'){
               return $relatorioList;
           }
           

       }
        
}