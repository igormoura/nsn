<?php

/**
 * This is the model class for table "RALSecrel.NetAcessos".
 *
 * The followings are the available columns in table 'RALSecrel.NetAcessos':
 * @property string $LoginUsuario
 * @property string $Campo_S
 * @property string $CodigoMotivoCanc
 * @property string $Campo_D
 * @property string $Campo_H
 * @property integer $NoContrato
 * @property string $NomeUsuario
 * @property string $CodigoEstadoAcesso
 * @property string $VersaoKit
 * @property integer $NoCliente
 * @property string $DataCancAces
 * @property string $Campo_SM
 * @property string $Campo_DM
 * @property string $Campo_HM
 * @property string $IndMailAcesso
 * @property string $Dominio
 * @property integer $QtSimult
 * @property integer $seqdestino
 * @property integer $seq
 * @property string $TipoRedir
 * @property string $grupo
 * @property string $referencia
 * @property integer $cdemail
 * @property string $nomePainel
 */
class NetAcessos extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return NetAcessos the static model class
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
        return 'RALSecrel.NetAcessos';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('LoginUsuario, NoContrato, NomeUsuario, CodigoEstadoAcesso, NoCliente', 'required'),
            array('NoContrato, NoCliente, QtSimult, seqdestino, seq, cdemail', 'numerical', 'integerOnly'=>true),
            array('LoginUsuario, nomePainel', 'length', 'max'=>100),
            array('Campo_S, Campo_D, Campo_H, Campo_SM, Campo_DM, Campo_HM', 'length', 'max'=>150),
            array('CodigoMotivoCanc', 'length', 'max'=>2),
            array('NomeUsuario', 'length', 'max'=>40),
            array('CodigoEstadoAcesso, IndMailAcesso, TipoRedir', 'length', 'max'=>1),
            array('VersaoKit', 'length', 'max'=>3),
            array('Dominio', 'length', 'max'=>60),
            array('grupo', 'length', 'max'=>50),
            array('referencia', 'length', 'max'=>20),
            array('DataCancAces', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('LoginUsuario, Campo_S, CodigoMotivoCanc, Campo_D, Campo_H, NoContrato, NomeUsuario, CodigoEstadoAcesso, VersaoKit, NoCliente, DataCancAces, Campo_SM, Campo_DM, Campo_HM, IndMailAcesso, Dominio, QtSimult, seqdestino, seq, TipoRedir, grupo, referencia, cdemail, nomePainel', 'safe', 'on'=>'search'),
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
            'Contrato' => array(self::BELONGS_TO, 'Contrato', 'NoContrato'),
            'EstadoAcesso' => array(self::BELONGS_TO, 'EstadoAcesso', 'CodigoEstadoAcesso')
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'LoginUsuario' =>       Yii::t('main', 'NetAcessos.LoginUsuario'),
            'Campo_S' =>            Yii::t('main', 'NetAcessos.Campo_S'),
            'CodigoMotivoCanc' =>   Yii::t('main', 'NetAcessos.CodigoMotivoCanc'),
            'Campo_D' =>            Yii::t('main', 'NetAcessos.Campo_D'),
            'Campo_H' =>            Yii::t('main', 'NetAcessos.Campo_H'),
            'NoContrato' =>         Yii::t('main', 'NetAcessos.NoContrato'),
            'NomeUsuario' =>        Yii::t('main', 'NetAcessos.NomeUsuario'),
            'CodigoEstadoAcesso' => Yii::t('main', 'NetAcessos.CodigoEstadoAcesso'),
            'VersaoKit' =>          Yii::t('main', 'NetAcessos.VersaoKit'),
            'NoCliente' =>          Yii::t('main', 'NetAcessos.NoCliente'),
            'DataCancAces' =>       Yii::t('main', 'NetAcessos.DataCancAces'),
            'Campo_SM' =>           Yii::t('main', 'NetAcessos.Campo_SM'),
            'Campo_DM' =>           Yii::t('main', 'NetAcessos.Campo_DM'),
            'Campo_HM' =>           Yii::t('main', 'NetAcessos.Campo_HM'),
            'IndMailAcesso' =>      Yii::t('main', 'NetAcessos.IndMailAcesso'),
            'Dominio' =>            Yii::t('main', 'NetAcessos.Dominio'),
            'QtSimult' =>           Yii::t('main', 'NetAcessos.QtSimult'),
            'seqdestino' =>         Yii::t('main', 'NetAcessos.seqdestino'),
            'seq' =>                Yii::t('main', 'NetAcessos.seq'),
            'TipoRedir' =>          Yii::t('main', 'NetAcessos.TipoRedir'),
            'grupo' =>              Yii::t('main', 'NetAcessos.grupo'),
            'referencia' =>         Yii::t('main', 'NetAcessos.referencia'),
            'cdemail' =>            Yii::t('main', 'NetAcessos.cdemail'),
            'nomePainel' =>         Yii::t('main', 'NetAcessos.nomePainel'),
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

        $criteria->compare('LoginUsuario',$this->LoginUsuario,true);
        $criteria->compare('Campo_S',$this->Campo_S,true);
        $criteria->compare('CodigoMotivoCanc',$this->CodigoMotivoCanc,true);
        $criteria->compare('Campo_D',$this->Campo_D,true);
        $criteria->compare('Campo_H',$this->Campo_H,true);
        $criteria->compare('NoContrato',$this->NoContrato);
        $criteria->compare('NomeUsuario',$this->NomeUsuario,true);
        $criteria->compare('CodigoEstadoAcesso',$this->CodigoEstadoAcesso,true);
        $criteria->compare('VersaoKit',$this->VersaoKit,true);
        $criteria->compare('NoCliente',$this->NoCliente);
        $criteria->compare('DataCancAces',$this->DataCancAces,true);
        $criteria->compare('Campo_SM',$this->Campo_SM,true);
        $criteria->compare('Campo_DM',$this->Campo_DM,true);
        $criteria->compare('Campo_HM',$this->Campo_HM,true);
        $criteria->compare('IndMailAcesso',$this->IndMailAcesso,true);
        $criteria->compare('Dominio',$this->Dominio,true);
        $criteria->compare('QtSimult',$this->QtSimult);
        $criteria->compare('seqdestino',$this->seqdestino);
        $criteria->compare('seq',$this->seq);
        $criteria->compare('TipoRedir',$this->TipoRedir,true);
        $criteria->compare('grupo',$this->grupo,true);
        $criteria->compare('referencia',$this->referencia,true);
        $criteria->compare('cdemail',$this->cdemail);
        $criteria->compare('nomePainel',$this->nomePainel,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    
    // GERA BUG NA VIEW DO CLIENTE
    /*public function behaviors()
    { 
        return array( 'LoggableBehavior'=> 'application.modules.auditTrail.behaviors.LoggableBehavior', );
    }*/
}