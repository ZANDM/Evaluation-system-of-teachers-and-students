<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentmark1".
 *
 * @property string $Sno
 * @property integer $zt
 * @property integer $jxhj
 * @property integer $zshj
 * @property integer $yshj
 */
class StudentMark1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentmark1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno'], 'required'],
            [['zt', 'jxhj', 'zshj', 'yshj'], 'integer'],
            [['Sno'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Sno' => 'Sno',
            'zt' => 'Zt',
            'jxhj' => 'Jxhj',
            'zshj' => 'Zshj',
            'yshj' => 'Yshj',
        ];
    }
}
