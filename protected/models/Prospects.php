<?php

/**
 * This is the model class for table "Prospects".
 *
 * The followings are the available columns in table 'Prospects':
 * @property integer $NoProspect
 * @property string $NomeProspect
 * @property string $Endereco
 * @property string $Bairro
 * @property string $FoneResidencia
 * @property string $FoneComercial
 * @property string $Contato
 * @property string $Cidade
 * @property string $Estado
 * @property string $CEP
 * @property string $CGF
 * @property string $CGC
 * @property string $CPF
 * @property string $Identidade
 * @property string $Vendedor
 * @property string $Provedor
 * @property string $StatusVenda
 * @property integer $MtNaoAssina
 * @property integer $Origem
 * @property string $EMail
 * @property string $Servico
 * @property integer $Condo
 * @property string $PF_PJ
 * @property string $FAX
 * @property string $Telex
 * @property string $Pager
 * @property string $Celular
 * @property integer $Diavenc
 * @property string $TipoLogradouro
 * @property string $NomeLogradouro
 * @property string $NumeroLogradouro
 * @property string $Numeroapto
 * @property string $Complemento
 * @property integer $nocliente
 * @property string $observacao
 * @property integer $idVend
 * @property string $empresa
 */
class Prospects extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prospects the static model class
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
		return 'Prospects';
	}
        
        /**
         *  @return primary Key
         */
        public function primaryKey()
        {
            return 'NoProspect';
        }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoProspect', 'required'),
			array('NoProspect, MtNaoAssina, Origem, Condo, Diavenc, nocliente, idVend', 'numerical', 'integerOnly'=>true),
			array('NomeProspect, Endereco, Contato, Vendedor, NomeLogradouro, Complemento', 'length', 'max'=>50),
			array('Bairro, FoneResidencia, FoneComercial, CGF, CGC, CPF, Identidade, Provedor, FAX, Telex, Pager, Celular', 'length', 'max'=>20),
			array('Cidade, Servico', 'length', 'max'=>30),
			array('Estado, TipoLogradouro', 'length', 'max'=>2),
			array('CEP', 'length', 'max'=>10),
			array('StatusVenda, PF_PJ, empresa', 'length', 'max'=>1),
			array('EMail', 'length', 'max'=>100),
			array('NumeroLogradouro, Numeroapto', 'length', 'max'=>5),
			array('observacao', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoProspect, NomeProspect, Endereco, Bairro, FoneResidencia, FoneComercial, Contato, Cidade, Estado, CEP, CGF, CGC, CPF, Identidade, Vendedor, Provedor, StatusVenda, MtNaoAssina, Origem, EMail, Servico, Condo, PF_PJ, FAX, Telex, Pager, Celular, Diavenc, TipoLogradouro, NomeLogradouro, NumeroLogradouro, Numeroapto, Complemento, nocliente, observacao, idVend, empresa', 'safe', 'on'=>'search'),
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
			'NoProspect' => 'No Prospect',
			'NomeProspect' => 'Nome Prospect',
			'Endereco' => 'Endereco',
			'Bairro' => 'Bairro',
			'FoneResidencia' => 'Fone Residencia',
			'FoneComercial' => 'Fone Comercial',
			'Contato' => 'Contato',
			'Cidade' => 'Cidade',
			'Estado' => 'Estado',
			'CEP' => 'Cep',
			'CGF' => 'Cgf',
			'CGC' => 'Cgc',
			'CPF' => 'Cpf',
			'Identidade' => 'Identidade',
			'Vendedor' => 'Vendedor',
			'Provedor' => 'Provedor',
			'StatusVenda' => 'Status Venda',
			'MtNaoAssina' => 'Mt Nao Assina',
			'Origem' => 'Origem',
			'EMail' => 'Email',
			'Servico' => 'Servico',
			'Condo' => 'Condo',
			'PF_PJ' => 'Pf Pj',
			'FAX' => 'Fax',
			'Telex' => 'Telex',
			'Pager' => 'Pager',
			'Celular' => 'Celular',
			'Diavenc' => 'Diavenc',
			'TipoLogradouro' => 'Tipo Logradouro',
			'NomeLogradouro' => 'Nome Logradouro',
			'NumeroLogradouro' => 'Numero Logradouro',
			'Numeroapto' => 'Numeroapto',
			'Complemento' => 'Complemento',
			'nocliente' => 'Nocliente',
			'observacao' => 'Observacao',
			'idVend' => 'Id Vend',
			'empresa' => 'Empresa',
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

		$criteria->compare('NoProspect',$this->NoProspect);
		$criteria->compare('NomeProspect',$this->NomeProspect,true);
		$criteria->compare('Endereco',$this->Endereco,true);
		$criteria->compare('Bairro',$this->Bairro,true);
		$criteria->compare('FoneResidencia',$this->FoneResidencia,true);
		$criteria->compare('FoneComercial',$this->FoneComercial,true);
		$criteria->compare('Contato',$this->Contato,true);
		$criteria->compare('Cidade',$this->Cidade,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('CEP',$this->CEP,true);
		$criteria->compare('CGF',$this->CGF,true);
		$criteria->compare('CGC',$this->CGC,true);
		$criteria->compare('CPF',$this->CPF,true);
		$criteria->compare('Identidade',$this->Identidade,true);
		$criteria->compare('Vendedor',$this->Vendedor,true);
		$criteria->compare('Provedor',$this->Provedor,true);
		$criteria->compare('StatusVenda',$this->StatusVenda,true);
		$criteria->compare('MtNaoAssina',$this->MtNaoAssina);
		$criteria->compare('Origem',$this->Origem);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('Servico',$this->Servico,true);
		$criteria->compare('Condo',$this->Condo);
		$criteria->compare('PF_PJ',$this->PF_PJ,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('Telex',$this->Telex,true);
		$criteria->compare('Pager',$this->Pager,true);
		$criteria->compare('Celular',$this->Celular,true);
		$criteria->compare('Diavenc',$this->Diavenc);
		$criteria->compare('TipoLogradouro',$this->TipoLogradouro,true);
		$criteria->compare('NomeLogradouro',$this->NomeLogradouro,true);
		$criteria->compare('NumeroLogradouro',$this->NumeroLogradouro,true);
		$criteria->compare('Numeroapto',$this->Numeroapto,true);
		$criteria->compare('Complemento',$this->Complemento,true);
		$criteria->compare('nocliente',$this->nocliente);
		$criteria->compare('observacao',$this->observacao,true);
		$criteria->compare('idVend',$this->idVend);
		$criteria->compare('empresa',$this->empresa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}