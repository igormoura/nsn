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
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'LoginUsuario' => 'Login Usuario',
            'Campo_S' => 'Campo S',
            'CodigoMotivoCanc' => 'Codigo Motivo Canc',
            'Campo_D' => 'Campo D',
            'Campo_H' => 'Campo H',
            'NoContrato' => 'No Contrato',
            'NomeUsuario' => 'Nome Usuario',
            'CodigoEstadoAcesso' => 'Codigo Estado Acesso',
            'VersaoKit' => 'Versao Kit',
            'NoCliente' => 'No Cliente',
            'DataCancAces' => 'Data Canc Aces',
            'Campo_SM' => 'Campo Sm',
            'Campo_DM' => 'Campo Dm',
            'Campo_HM' => 'Campo Hm',
            'IndMailAcesso' => 'Ind Mail Acesso',
            'Dominio' => 'Dominio',
            'QtSimult' => 'Qt Simult',
            'seqdestino' => 'Seqdestino',
            'seq' => 'Seq',
            'TipoRedir' => 'Tipo Redir',
            'grupo' => 'Grupo',
            'referencia' => 'Referencia',
            'cdemail' => 'Cdemail',
            'nomePainel' => 'Nome Painel',
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
}