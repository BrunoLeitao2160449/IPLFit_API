<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "refeicao".
 *
 * @property string $id
 * @property string $nome
 *
 * @property RefeicaoDia[] $refeicaoDias
 */
class Refeicao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'refeicao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['nome'], 'string', 'max' => 110],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefeicaoDias()
    {
        return $this->hasMany(RefeicaoDia::className(), ['id_refeicao' => 'id']);
    }
}
