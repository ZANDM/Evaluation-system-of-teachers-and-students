<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentmark2".
 *
 * @property string $Sno
 * @property string $jxhjw
 * @property string $jxhjr
 * @property string $zshjw
 * @property string $zshjr
 * @property string $yshjw
 * @property string $yshjr
 */
class StudentMark2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentmark2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno'], 'required'],
            [['Sno'], 'string', 'max' => 10],
            [['jxhjw', 'jxhjr', 'zshjw', 'zshjr', 'yshjw', 'yshjr'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Sno' => 'Sno',
            'jxhjw' => 'Jxhjw',
            'jxhjr' => 'Jxhjr',
            'zshjw' => 'Zshjw',
            'zshjr' => 'Zshjr',
            'yshjw' => 'Yshjw',
            'yshjr' => 'Yshjr',
        ];
    }
}
