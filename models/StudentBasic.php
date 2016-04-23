<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentbasic".
 *
 * @property integer $id
 * @property string $Sno
 * @property string $Sname
 * @property string $Ssex
 * @property string $Sdept
 * @property string $Sclass
 */
class StudentBasic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentbasic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Sno'], 'string', 'max' => 10],
            [['Sname'], 'string', 'max' => 15],
            [['Ssex'], 'string', 'max' => 2],
            [['Sdept', 'Sclass'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Sno' => 'Sno',
            'Sname' => 'Sname',
            'Ssex' => 'Ssex',
            'Sdept' => 'Sdept',
            'Sclass' => 'Sclass',
        ];
    }
    public function getUser()
    {
        return $this->hasOne(User::className(),['id'=>'id']);
    }
}
