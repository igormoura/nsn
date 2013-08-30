<?php

/**
 * This is the model class for table "RALSecrel.Cliente".
 *
 * The followings are the available columns in table 'RALSecrel.Cliente':
 * @property integer $NoCliente
 * @property string $NomeCliente
 * @property string $Endereco
 * @property string $Bairro
 * @property string $Cidade
 * @property string $Estado
 * @property string $CEP
 * @property string $CGF
 * @property string $CGC
 * @property string $CPF
 * @property string $Identidade
 * @property string $FoneResidencia
 * @property string $FoneComerical
 * @property string $FAX
 * @property string $Telex
 * @property string $Contato
 * @property string $Pager
 * @property string $Celular
 * @property string $EMail
 * @property string $PF_PJ
 * @property string $ECNomeCliente
 * @property string $ECEndereco
 * @property string $ECBairro
 * @property string $ECCidade
 * @property string $ECEstado
 * @property string $ECCEP
 * @property string $EmailCobr
 * @property string $ViaECT
 * @property string $InscricaoMunicipal
 * @property string $EmailFinanceiro
 *
 * The followings are the available model relations:
 * @property SoftwareMicrosoftContrato[] $softwareMicrosoftContratos
 * @property ClienteEndCobr $clienteEndCobr
 */
class Cliente extends CActiveRecord
{
   
        
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
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
		return 'RALSecrel.Cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NoCliente', 'required'),
			array('NoCliente', 'numerical', 'integerOnly'=>true),
			array('NomeCliente, Endereco, ECNomeCliente, ECEndereco', 'length', 'max'=>50),
			array('Bairro, CGF, CGC, CPF, Identidade, FoneResidencia, FoneComerical, FAX, Telex, Pager, Celular, ECBairro', 'length', 'max'=>20),
			array('Cidade, ECCidade', 'length', 'max'=>30),
			array('Estado, ECEstado', 'length', 'max'=>2),
			array('CEP, ECCEP', 'length', 'max'=>10),
			array('Contato', 'length', 'max'=>110),
			array('EMail, EmailFinanceiro', 'length', 'max'=>100),
			array('PF_PJ, EmailCobr, ViaECT', 'length', 'max'=>1),
			array('InscricaoMunicipal', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('NoCliente, NomeCliente, Endereco, Bairro, Cidade, Estado, CEP, CGF, CGC, CPF, Identidade, FoneResidencia, FoneComerical, FAX, Telex, Contato, Pager, Celular, EMail, PF_PJ, ECNomeCliente, ECEndereco, ECBairro, ECCidade, ECEstado, ECCEP, EmailCobr, ViaECT, InscricaoMunicipal, EmailFinanceiro', 'safe', 'on'=>'search'),
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
			'SoftwareMicrosoftContratos' => array(self::HAS_MANY, 'SoftwareMicrosoftContrato', 'noContrato'),
			'ClienteEndCobr' => array(self::HAS_ONE, 'ClienteEndCobr', 'NoCliente'),
            'Contrato' => array(self::HAS_ONE, 'Contrato', 'NoContrato'),
            'Duplicatas' => array(self::HAS_MANY, 'Duplicatas', 'NoCliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'NoCliente' =>                  Yii::t('main', 'cliente.NoCliente'),
			'NomeCliente' =>                Yii::t('main', 'cliente.NomeCliente'),
			'Endereco' =>                   Yii::t('main', 'cliente.Endereco'),
			'Bairro' =>                     Yii::t('main', 'cliente.Bairro'),
			'Cidade' =>                     Yii::t('main', 'cliente.Cidade'),
			'Estado' =>                     Yii::t('main', 'cliente.Estado'),
			'CEP' =>                        Yii::t('main', 'cliente.CEP'),
			'CGF' =>                        Yii::t('main', 'cliente.CGF'),
			'CGC' =>                        Yii::t('main', 'cliente.CGC'),
			'CPF' =>                        Yii::t('main', 'cliente.CPF'),
			'Identidade' =>                 Yii::t('main', 'cliente.Identidade'),
			'FoneResidencia' =>             Yii::t('main', 'cliente.FoneResidencia'),
			'FoneComerical' =>              Yii::t('main', 'cliente.FoneComerical'),
			'FAX' =>                        Yii::t('main', 'cliente.FAX'),
			'Telex' =>                      Yii::t('main', 'cliente.Telex'),
			'Contato' =>                    Yii::t('main', 'cliente.Contato'),
			'Pager' =>                      Yii::t('main', 'cliente.Pager'),
			'Celular' =>                    Yii::t('main', 'cliente.Celular'),
			'EMail' =>                      Yii::t('main', 'cliente.EMail'),
			'PF_PJ' =>                      Yii::t('main', 'cliente.PF_PJ'),
			'ECNomeCliente' =>              Yii::t('main', 'cliente.ECNomeCliente'),
			'ECEndereco' =>                 Yii::t('main', 'cliente.ECEndereco'),
			'ECBairro' =>                   Yii::t('main', 'cliente.ECBairro'),
			'ECCidade' =>                   Yii::t('main', 'cliente.ECCidade'),
			'ECEstado' =>                   Yii::t('main', 'cliente.ECEstado'),
			'ECCEP' =>                      Yii::t('main', 'cliente.ECCEP'),
			'EmailCobr' =>                  Yii::t('main', 'cliente.EmailCobr'),
			'ViaECT' =>                     Yii::t('main', 'cliente.ViaECT'),
			'InscricaoMunicipal' =>         Yii::t('main', 'cliente.InscricaoMunicipal'),
			'EmailFinanceiro' =>            Yii::t('main', 'cliente.EmailFinanceiro'),
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
                
		$criteria->compare('NoCliente',$this->NoCliente, true);
		$criteria->compare('NomeCliente',$this->NomeCliente,true);
		$criteria->compare('Endereco',$this->Endereco,true);
		$criteria->compare('Bairro',$this->Bairro,true);
		$criteria->compare('Cidade',$this->Cidade,true);
		$criteria->compare('Estado',$this->Estado,true);
		$criteria->compare('CEP',$this->CEP,true);
		$criteria->compare('CGF',$this->CGF,true);
		$criteria->compare('CGC',$this->CGC,true);
		$criteria->compare('CPF',$this->CPF,true);
		$criteria->compare('Identidade',$this->Identidade,true);
		$criteria->compare('FoneResidencia',$this->FoneResidencia,true);
		$criteria->compare('FoneComerical',$this->FoneComerical,true);
		$criteria->compare('FAX',$this->FAX,true);
		$criteria->compare('Telex',$this->Telex,true);
		$criteria->compare('Contato',$this->Contato,true);
		$criteria->compare('Pager',$this->Pager,true);
		$criteria->compare('Celular',$this->Celular,true);
		$criteria->compare('EMail',$this->EMail,true);
		$criteria->compare('PF_PJ',$this->PF_PJ,true);
		$criteria->compare('ECNomeCliente',$this->ECNomeCliente,true);
		$criteria->compare('ECEndereco',$this->ECEndereco,true);
		$criteria->compare('ECBairro',$this->ECBairro,true);
		$criteria->compare('ECCidade',$this->ECCidade,true);
		$criteria->compare('ECEstado',$this->ECEstado,true);
		$criteria->compare('ECCEP',$this->ECCEP,true);
		$criteria->compare('EmailCobr',$this->EmailCobr,true);
		$criteria->compare('ViaECT',$this->ViaECT,true);
		$criteria->compare('InscricaoMunicipal',$this->InscricaoMunicipal,true);
		$criteria->compare('EmailFinanceiro',$this->EmailFinanceiro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function tipoPessoa()
        {
            return array (
               'F' => 'Física',
               'J' => 'Jurídica'
            );
        }
        public function emailCobr()
        {
            return array (
               'S' => 'Sim',
               'N' => 'Não'
            );
        }
        
        
       
        
}