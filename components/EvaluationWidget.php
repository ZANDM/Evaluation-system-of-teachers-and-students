<?php 
namespace app\assets;

class StarAsset extends BaseAsset {
	public $css = ['evaluationWidgets/css/star.css'];
	public $js  = ['evaluationWidgets/js/star.js'];
}

class EvaluationAsset extends BaseAsset {
	public $css = ['evaluationWidgets/css/evaluation.css'];
	public $js  = ['evaluationWidgets/js/evaluation.js'];
}


namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class EvaluationWidget extends Widget {
	public $type;
	public $params = [];

	public function __set($key, $value){
		if(isset($this->$key))
			parent::__set($key, $value);
		else
			$this->params[$key] = $value;
	}

	public function run()
	{
		\app\assets\EvaluationAsset::register($this->getView());
		
		switch ($this->type) {
		case 'star':
			\app\assets\StarAsset::register($this->getView());
            $this->checkparams('level', 5);
			$this->checkparams('name', '');
			return $this->render('star', $this->params);

		case 'longtext':
			$this->checkparams('rows', 10);
			$this->params['params'] = $this->params;
			return $this->render('longtext', $this->params);

		case 'checkgroup':
			return $this->render('checkgroup', $this->params);
		}
	}

    private function checkparams($key, $default){
        if (!isset($this->params[$key]))
            $this->params[$key] = $default;
    }
}
?>