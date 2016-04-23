<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentmarkt".
 *
 * @property string $Sno
 * @property integer $ktfc
 * @property integer $khfd
 * @property integer $rwml
 * @property string $totw
 * @property string $ottr
 * @property string $Tno
 */
class StudentMarkt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentmarkt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno', 'Tno'], 'required'],
            [['ktfc', 'khfd', 'rwml'], 'integer'],
            [['Sno'], 'string', 'max' => 10],
            [['totw', 'ottr'], 'string', 'max' => 300],
            [['Tno'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Sno' => 'Sno',
            'ktfc' => 'Ktfc',
            'khfd' => 'Khfd',
            'rwml' => 'Rwml',
            'totw' => 'Totw',
            'ottr' => 'Ottr',
            'Tno' => 'Tno',
        ];
    }
}
