<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dia".
 *
 * @property string $id
 * @property string $data
 *
 * @property DiaUtilizador[] $diaUtilizadors
 * @property RefeicaoDia[] $refeicaoDias
 */
class Dia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'required'],
            [['data'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'data' => 'Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaUtilizadors()
    {
        return $this->hasMany(DiaUtilizador::className(), ['id_dia' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefeicaoDias()
    {
        return $this->hasMany(RefeicaoDia::className(), ['id_dia' => 'id']);
    }
}
