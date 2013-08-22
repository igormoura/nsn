<?php

/**
 * This is the model class for table "RALSecrel.Duplicatas".
 *
 * The followings are the available columns in table 'RALSecrel.Duplicatas':
 * @property string $NumeroDup
 * @property string $NumeroConta
 * @property string $FormaPaga
 * @property string $NumeroLote
 * @property string $CodigoVendedor
 * @property integer $NoContrato
 * @property integer $NoCliente
 * @property string $CodigoColegio
 * @property string $DataEmisDup
 * @property string $DataVencDup
 * @property string $AgenciaDup
 * @property string $PagamentoDup
 * @property string $BaixaDup
 * @property string $ValorDup
 * @property string $ValorJurosDup
 * @property string $ValorMultaDup
 * @property string $ValorDespDup
 * @property string $ValorDescDup
 * @property string $ValorAdicDup
 * @property string $Observacao
 * @property string $NFEmitida
 * @property string $NoCobr
 * @property string $CH_Banco
 * @property string $CH_No
 * @property integer $NoNF
 * @property string $localpag
 * @property string $DataAutentPag
 * @property string $DataEfetivacaoPagam
 * @property string $VencOriginal
 * @property string $FlagOrigem
 * @property integer $NoNf2
 * @property string $SerieNF
 * @property string $EmpNF
 */
class Duplicatas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Duplicatas the static model class
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
		return Yii::app()->secondb;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'RALSecrel.Duplicatas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NumeroDup, DataEmisDup, DataVencDup', 'required'),
			array('NoContrato, NoCliente, NoNF, NoNf2', 'numerical', 'integerOnly'=>true),
			array('NumeroDup', 'length', 'max'=>20),
			array('NumeroConta, AgenciaDup, FlagOrigem', 'length', 'max'=>10),
			array('FormaPaga, CodigoVendedor, CodigoColegio, localpag, SerieNF', 'length', 'max'=>2),
			array('NumeroLote', 'length', 'max'=>18),
			array('BaixaDup, NFEmitida, NoCobr, EmpNF', 'length', 'max'=>1),
			array('ValorDup, ValorJurosDup, ValorMultaDup, ValorDespDup, ValorDescDup, ValorAdicDup', 'length', 'max'=>11),
			array('Observacao', 'length', 'max'=>40),
			array('CH_Banco', 'length', 'max'=>5),
			array('CH_No', 'length', 'max'=>25),
			array('PagamentoDup, DataAutentPag, DataEfetivacaoPagam, VencOriginal', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NumeroDup, NumeroConta, FormaPaga, NumeroLote, CodigoVendedor, NoContrato, NoCliente, CodigoColegio, DataEmisDup, DataVencDup, AgenciaDup, PagamentoDup, BaixaDup, ValorDup, ValorJurosDup, ValorMultaDup, ValorDespDup, ValorDescDup, ValorAdicDup, Observacao, NFEmitida, NoCobr, CH_Banco, CH_No, NoNF, localpag, DataAutentPag, DataEfetivacaoPagam, VencOriginal, FlagOrigem, NoNf2, SerieNF, EmpNF', 'safe', 'on'=>'search'),
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
                        'Vendedores' => array(self::BELONGS_TO, 'Vendedores', 'CodigoVendedor'),
                        'FormaPaga' => array(self::HAS_MANY, 'FormaPagamento', 'FormaPaga'),
                        'NumeroConta' => array(self::HAS_MANY, 'Bancos', 'NumeroConta'),
                        'Cliente' => array(self::BELONGS_TO, 'Cliente', 'NoCliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NumeroDup' => 'Duplicata',
			'NumeroConta' => 'Conta',
			'FormaPaga' => 'Pagamento',
			'NumeroLote' => 'Lote',
			'CodigoVendedor' => 'Cod. Vendedor',
			'NoContrato' => 'Cod. Contrato',
			'NoCliente' => 'Cod. Cliente',
			'CodigoColegio' => 'Codigo Colegio',
			'DataEmisDup' => 'Emissão',
			'DataVencDup' => 'Vencimento',
			'AgenciaDup' => 'Agência',
			'PagamentoDup' => 'Pagamento',
			'BaixaDup' => 'Baixa',
			'ValorDup' => 'Valor',
			'ValorJurosDup' => 'Valor Juros',
			'ValorMultaDup' => 'Valor Multa',
			'ValorDespDup' => 'Valor Desp',
			'ValorDescDup' => 'Valor Desc Dup',
			'ValorAdicDup' => 'Valor Adic Dup',
			'Observacao' => 'Observacao',
			'NFEmitida' => 'Nfemitida',
			'NoCobr' => 'No Cobr',
			'CH_Banco' => 'Ch Banco',
			'CH_No' => 'Ch No',
			'NoNF' => 'No Nf',
			'localpag' => 'Localpag',
			'DataAutentPag' => 'Data Autent Pag',
			'DataEfetivacaoPagam' => 'Efetivação',
			'VencOriginal' => 'Venc Original',
			'FlagOrigem' => 'Flag Origem',
			'NoNf2' => 'No Nf2',
			'SerieNF' => 'Serie Nf',
			'EmpNF' => 'Emp Nf',
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

		$criteria->compare('NumeroDup',$this->NumeroDup,true);
		$criteria->compare('NumeroConta',$this->NumeroConta,true);
		$criteria->compare('FormaPaga',$this->FormaPaga,true);
		$criteria->compare('NumeroLote',$this->NumeroLote,true);
		$criteria->compare('CodigoVendedor',$this->CodigoVendedor,true);
		$criteria->compare('NoContrato',$this->NoContrato);
		$criteria->compare('NoCliente',$this->NoCliente);
		$criteria->compare('CodigoColegio',$this->CodigoColegio,true);
		$criteria->compare('DataEmisDup',$this->DataEmisDup,true);
		$criteria->compare('DataVencDup',$this->DataVencDup,true);
		$criteria->compare('AgenciaDup',$this->AgenciaDup,true);
		$criteria->compare('PagamentoDup',$this->PagamentoDup,true);
		$criteria->compare('BaixaDup',$this->BaixaDup,true);
		$criteria->compare('ValorDup',$this->ValorDup,true);
		$criteria->compare('ValorJurosDup',$this->ValorJurosDup,true);
		$criteria->compare('ValorMultaDup',$this->ValorMultaDup,true);
		$criteria->compare('ValorDespDup',$this->ValorDespDup,true);
		$criteria->compare('ValorDescDup',$this->ValorDescDup,true);
		$criteria->compare('ValorAdicDup',$this->ValorAdicDup,true);
		$criteria->compare('Observacao',$this->Observacao,true);
		$criteria->compare('NFEmitida',$this->NFEmitida,true);
		$criteria->compare('NoCobr',$this->NoCobr,true);
		$criteria->compare('CH_Banco',$this->CH_Banco,true);
		$criteria->compare('CH_No',$this->CH_No,true);
		$criteria->compare('NoNF',$this->NoNF);
		$criteria->compare('localpag',$this->localpag,true);
		$criteria->compare('DataAutentPag',$this->DataAutentPag,true);
		$criteria->compare('DataEfetivacaoPagam',$this->DataEfetivacaoPagam,true);
		$criteria->compare('VencOriginal',$this->VencOriginal,true);
		$criteria->compare('FlagOrigem',$this->FlagOrigem,true);
		$criteria->compare('NoNf2',$this->NoNf2);
		$criteria->compare('SerieNF',$this->SerieNF,true);
		$criteria->compare('EmpNF',$this->EmpNF,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function numeroDup(){
            $model = new Cliente;
            
            foreach($model->NumeroDup as $numeroDup) 
            $numeroDup[]=$numeroDup->NumeroDup; 
        }
}