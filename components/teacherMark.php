<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\components;
use yii\base\Widget;
class teacherMark extends Widget{
    public $teacherN,$qy;
    public function init() {
        parent::init();
    }
    public function run() {
        parent::run();
        return $this->render('teacherMarkV',['teacherN'=>  $this->teacherN,'qy'=>  $this->qy,]);
    }
}
