<?php
namespace app\components;
use yii\base\Widget;
use yii\helpers\Html;
class MarkStart extends Widget{
    public $XiangMu;
    public function init(){
        parent::init();
        if ($this->XiangMu === null) {
            $this->XiangMu = 'Hello World';
        }
    }
    public function  run(){
      return $this->render('start',['XiangMu'=> $this->XiangMu,]); 
    }
}
