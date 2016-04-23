<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentcourse".
 *
 * @property string $Cno
 * @property string $Cname
 * @property string $Tname
 * @property string $Tno
 * @property string $Sno
 */
class StudentCourse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentcourse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cno', 'Tno', 'Sno'], 'required'],
            [['Cno', 'Sno'], 'string', 'max' => 10],
            [['Cname'], 'string', 'max' => 30],
            [['Tname'], 'string', 'max' => 20],
            [['Tno'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cno' => 'Cno',
            'Cname' => 'Cname',
            'Tname' => 'Tname',
            'Tno' => 'Tno',
            'Sno' => 'Sno',
        ];
    }
}
