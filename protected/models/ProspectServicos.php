<?php

/**
 * This is the model class for table "ProspectServicos".
 *
 * The followings are the available columns in table 'ProspectServicos':
 * @property integer $cdservico
 * @property integer $NoProspect
 * @property string $Servico
 * @property string $Valor
 * @property string $Freq
 * @property string $historico
 * @property string $vencimento
 * @property integer $IdVend
 * @property integer $IdIndic
 * @property string $DtVend
 * @property string $DtIndic
 * @property string $status
 * @property string $FidelidadePredial
 * @property string $DtFidelidadePredial
 * @property string $PlanoFidelidadePredial
 */
class ProspectServicos extends CActiveRecord
{
        public $sizeChart;
        public $totalChart;
        
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProspectServicos the static model class
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
		return 'ProspectServicos';
	}
        
        /**
         *  @return primary Key
         */
        public function primaryKey()
        {
            return 'cdservico';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoProspect, IdVend, IdIndic', 'numerical', 'integerOnly'=>true),
			array('Servico', 'length', 'max'=>15),
			array('Valor', 'length', 'max'=>11),
			array('Freq, status, FidelidadePredial', 'length', 'max'=>1),
			array('historico', 'length', 'max'=>70),
			array('PlanoFidelidadePredial', 'length', 'max'=>12),
			array('vencimento, DtVend, DtIndic, DtFidelidadePredial', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sizeChart, totalChart, cdservico, NoProspect, Servico, Valor, Freq, historico, vencimento, IdVend, IdIndic, DtVend, DtIndic, status, FidelidadePredial, DtFidelidadePredial, PlanoFidelidadePredial', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cdservico' =>              Yii::t('main','prospectServicos.cdservico'),
			'NoProspect' =>             Yii::t('main','prospectServicos.NoProspect'),
			'Servico' =>                Yii::t('main','prospectServicos.Servico'),
			'Valor' =>                  Yii::t('main','prospectServicos.Valor'),
			'Freq' =>                   Yii::t('main','prospectServicos.Freq'),
			'historico' =>              Yii::t('main','prospectServicos.historico'),
			'vencimento' =>             Yii::t('main','prospectServicos.vencimento'),
			'IdVend' =>                 Yii::t('main','prospectServicos.IdVend'),
			'IdIndic' =>                Yii::t('main','prospectServicos.IdIndic'),
			'DtVend' =>                 Yii::t('main','prospectServicos.DtVend'),
			'DtIndic' =>                Yii::t('main','prospectServicos.DtIndic'),
			'status' =>                 Yii::t('main','prospectServicos.status'),
			'FidelidadePredial' =>      Yii::t('main','prospectServicos.FidelidadePredial'),
			'DtFidelidadePredial' =>    Yii::t('main','prospectServicos.DtFidelidadePredial'),
			'PlanoFidelidadePredial' => Yii::t('main','prospectServicos.PlanoFidelidadePredial'),
                        'sizeChart' =>              Yii::t('main','prospectServicos.sizeChart'),
                        'totalChart' =>             Yii::t('main','prospectServicos.totalChart'), 
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
                
		$criteria->compare('cdservico',$this->cdservico);
		$criteria->compare('NoProspect',$this->NoProspect);
		$criteria->compare('Servico',$this->Servico,true);
		$criteria->compare('Valor',$this->Valor,true);
		$criteria->compare('Freq',$this->Freq,true);
		$criteria->compare('historico',$this->historico,true);
		$criteria->compare('vencimento',$this->vencimento,true);
		$criteria->compare('IdVend',$this->IdVend);
		$criteria->compare('IdIndic',$this->IdIndic);
		$criteria->compare('DtIndic',$this->DtIndic,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('FidelidadePredial',$this->FidelidadePredial,true);
		$criteria->compare('DtFidelidadePredial',$this->DtFidelidadePredial,true);
		$criteria->compare('PlanoFidelidadePredial',$this->PlanoFidelidadePredial,true);
                
                // BUSCAR POR PERÍODO [DATAOCORRENCIA]       
                $helper = new Helpers();
                $aux = $helper->buscarPorPeriodo($this->DtVend);
                $criteria->addBetweenCondition('DtVend', $aux['0'] , $aux['1'], true);   
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function dashboardVendas($views, $valor){
            
             // BUSCA POR PERÍODO
            $helper = new Helpers();
            $aux = $helper->buscarPorPeriodo($this->DtVend);
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
                     ->from($view."('".$aux['0']."','".$aux['1']."'".$null.")")
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
                 ->where("DtIndic >= '".$aux['0']."' and dtIndic < dateadd(day,1, '".$aux['1']."') and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
                 ->queryAll();
                
                foreach ($sqlRelatorios as $relatorio){
                    $relatorio = (object)$relatorio;
                    $relatorios[trim($grafico->$columnName)][] = array('Contrato' => $relatorio->Contrato, 'NomeProspect' => $relatorio->NomeProspect, 'Cliente' => $relatorio->Cliente, 'NmGrupoServ' => $relatorio->NmGrupoServ, 'Servico'=>$relatorio->NmServico,'DtVend' => $relatorio->DtVend, 'Valor' => $relatorio->Valor);
                }
                
             }
            
            }elseif(($views == 'totalVenda') || ($views == 'tipoAluno')){
                // CONSTULTA TOTAL VENDAS 
                $graficos2 = Yii::app()->thirdb->createCommand()
                    ->select('Convertido_VrServ_Cli_Antigo, Convertido_VrServ_Cli_Novo')
                    ->from($view." ('".$aux['0']."','".$aux['1']."')" )
                    ->queryAll();

                    $geral = array();
                    $geralBar = array();

                    $geral[] = array('Clientes Antigos', intval($graficos2[0]['Convertido_VrServ_Cli_Antigo']));
                    $geral[] = array('Clientes Novos', intval($graficos2[0]['Convertido_VrServ_Cli_Novo']));

                    // BARRA
                    $geralBar[] = array('name' => 'Clientes Antigos', 'type'=>'column', 'data' => array(intval($graficos2[0]['Convertido_VrServ_Cli_Antigo'])));
                    $geralBar[] = array('name' => 'Clientes Novos', 'type'=>'column', 'data' => array(intval($graficos2[0]['Convertido_VrServ_Cli_Novo'])));


                // CONSULTA TOTAL TIPOS ALUNOS VENDAS
                $graficos3 = Yii::app()->thirdb->createCommand()
                    ->select('Convertido_VrServ_Cli_Antigo, Convertido_VrServ_Cli_Novo')
                    ->from($view." ('".$aux['0']."','".$aux['1']."')" )
                    ->queryAll();

                    $geralProspectCursos = array();
                    $geralProspectCursosBar = array();
                    
                    //PIZZA
                    $geralProspectCursos[] = array('Alunos Antigos', intval($graficos3[0]['Convertido_VrServ_Cli_Antigo']));
                    $geralProspectCursos[] = array('Alunos Novos', intval($graficos3[0]['Convertido_VrServ_Cli_Novo']));

                    // BARRA
                    $geralProspectCursosBar[] = array('name' => 'Alunos Antigos', 'type'=>'column', 'data' => array(intval($graficos3[0]['Convertido_VrServ_Cli_Antigo'])));
                    $geralProspectCursosBar[] = array('name' => 'Alunos Novos', 'type'=>'column', 'data' => array(intval($graficos3[0]['Convertido_VrServ_Cli_Novo'])));
            }
                  
            
            // CONSULTA POR CLIENTE VENDAS
            $graficos4 = Yii::app()->thirdb->createCommand()
                    ->select($selectTop.'NomeProspect, (Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo) as Valor ')
                    ->from('dashboardVendas_1_View')
                    ->where("DtIndic >= '".$aux['0']."' and dtIndic < dateadd(day,1, '".$aux['1']."') and Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 ")
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
            }elseif ($valor == 'relatorioTotal' || 'relatorioMenor72' || 'relatorioMaior72') {
                return $relatorios;
            }
        }

}

