<?php

use yii\db\Migration;

class m171105_094845_personnel extends Migration
{
    public $tableName = "personnel";
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName == 'mysql') {
            $tableOptions = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        }

        $this->createTable("{{%$this->tableName}}", [

            'id'=>$this->primaryKey()->unsigned(),
            'username'=>$this->string(20)->notNull()->unique()->comment("用户名"),
            'nickname'=>$this->string(20)->notNull()->unique()->comment("昵称"),
            'mobile'=>$this->integer()->notNull()->unique()->comment("手机")->unsigned(),
            'status'=>$this->integer()->notNull()->defaultValue(1)->unsigned(),
            'qq'=>$this->integer()->notNull()->unsigned(),
            'func_id'=>$this->integer()->notNull()->unsigned(),
            'created_at'=>$this->integer()->notNull()->unsigned(),
            'updated_at'=>$this->integer()->notNull()->unsigned(),
            'FOREIGN KEY ([[func_id]]) REFERENCES {{%func}} ([[id]])'.
            $this->buildFkClause('ON DELETE SET NULL', 'ON UPDATE CASCADE')

        ]);
    }

    public function safeDown()
    {
        echo "m171105_094845_personnel cannot be reverted.\n";

        return false;
    }


    /**
     * @return bool
     */
    protected function isMSSQL()
    {
        return $this->db->driverName === 'mssql' || $this->db->driverName === 'sqlsrv' || $this->db->driverName === 'dblib';
    }

    protected function isOracle()
    {
        return $this->db->driverName === 'oci';
    }

    protected function buildFkClause($delete = '', $update = '')
    {
        if ($this->isMSSQL()) {
            return '';
        }

        if ($this->isOracle()) {
            return ' ' . $delete;
        }

        return implode(' ', ['', $delete, $update]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171105_094845_personnel cannot be reverted.\n";

        return false;
    }
    */
}
