<?php

class m130912_173302_translatedMessageTable extends CDbMigration
{
public function safeUp()
  {
    $this->createTable(
      'SourceMessage', 
      array(
        'id' => 'INTEGER PRIMARY KEY',
        'category' => 'VARCHAR(32)',
        'message' => 'TEXT',
      )
    );
 
    $this->createTable(
      'Message', 
      array(
        'id' => 'INTEGER',
        'language' => 'VARCHAR(16)',
        'translation' => 'TEXT',
      )
    );
 
    $this->addPrimaryKey('PK_Message','Message','id, language');
 
    $this->addForeignKey(
      'FK_Message_SourceMessage',
      'Message',
      'id',
      'SourceMessage',
      'id',
      'CASCADE',
      'RESTRICT'
    );
 
  public function safeDown()
  {
    $this->dropForeignKey('FK_Message_SourceMessage','Message');
    $this->dropTable('SourceMessage');
    $this->dropTable('Message');
  }
}