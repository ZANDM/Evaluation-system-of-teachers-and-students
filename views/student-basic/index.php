<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\assets\AppAsset;
use app\components\MarkStart;
use app\components\MarkWenZi;
use app\components\teacherMark;
use app\components\EvaluationWidget;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentbasicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学生板块';
$this->params['breadcrumbs'][] = $this->title;
AppAsset::register($this);
$imgUrl = $this->assetBundles[AppAsset::className()]->baseUrl . '/image/';
?>
<?php echo $student->Sclass;?>
<div class="studentbasic-table-index" >
    <form action="<?= Url::toRoute(['student-basic/create'])?>" name="star" method="post">
        <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <h1 class="biaoti">2015-2016学年  上学期总评</h1>
    <div class="sekuai"></div>
    <div class="container" style="">
        <!-- 学期总评-->
        <div class="row">
            <div class="col-lg-10   col-xs-8 xueqizongping">
                <div class=row>
                    <div class="col-lg-4  col-xs-6 biaoti1">
                        <span class="span1">学期总评</span>
                    </div>
                    <div class="col-lg-8 col-xs-6 sekuai1"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10   col-xs-8 sekuai2"></div>
        </div>
        <div class="row zongti">
            <div class="col-lg-4 col-xs-4 col-lg-offset-2 col-xs-offset-2 ">
                <span class="span2">总体评价：</span><?=EvaluationWidget::widget(['type'=>'star', 'name'=>'zt'])?>
            </div>
            <div class="col-lg-3 col-xs-5 col-lg-offset-0" style="height: 40px;">
                <span class="miaoshuwenzi">学校整体怎么样</span>
            </div>
        </div>
        <div class="row jj1">
            <div class="col-lg-4 col-xs-4 col-lg-offset-2 col-xs-offset-2 ">
                <span class="span2"> 教学环境：</span><?=EvaluationWidget::widget(['type'=>'star', 'name'=>'jxhj'])?>
            </div>
            <div class="col-lg-3 col-xs-4 col-lg-offset-0" style="height: 40px;">
                <span class="miaoshuwenzi">教学设施，教学内容，师资力量等 <a  href="#" onclick="open_w('jxhj')">文字评价</a></span>
            </div>   
        </div>
    </div>
     <?= MarkWenZi::widget(['dafen'=>'jxhj','buju'=>'boxt'])?>
    <div class="container">
        <div class="row jj2">
            <div class="col-lg-4 col-xs-4 col-lg-offset-2 col-xs-offset-2 ">
                <span class="span2">住宿环境：</span> <?=EvaluationWidget::widget(['type'=>'star', 'name'=>'zshj'])?>
            </div>
            <div class="col-lg-4 col-xs-4 col-lg-offset-0" >
                <span class="miaoshuwenzi">寝室安保，家具质量，水电网络系统，舒适度<a href="#" onclick="open_w('zshj')" >文字评价</a></span>
            </div>
        </div>
    </div>
    <?= MarkWenZi::widget(['dafen'=>'zshj','buju'=>'boxt'])?>
    <div class="container">
        <div class="row jj2">
            <div class="col-lg-4 col-xs-4 col-lg-offset-2 col-xs-offset-2 ">
                <span class="span2">饮食环境：</span><?=EvaluationWidget::widget(['type'=>'star', 'name'=>'yshj'])?>
            </div>
            <div class="col-lg-4 col-xs-4 col-lg-offset-0" >
                <span class="miaoshuwenzi">饭菜质量、卫生安全，贩卖价格，地域照顾，<a href="#" onclick="open_w('yshj')" >文字评价</a></span>
            </div>
        </div>
    </div>
    <?= MarkWenZi::widget(['dafen'=>'yshj','buju'=>'boxt'])?>
    <div class="container"style="position: relative;">
        <div class="row jj3">
            <div class="col-lg-11 " style="background-color:#e1e1e1;height: 2px;"></div>
        </div>
        <div class="row jj4">
            <div class="col-lg-9 " style="height: 80px;">
               
            </div>
        </div>
        <!--课程评价-->
        <div class="row">
            <div class="col-lg-10   col-xs-8 kcpj">
                <div class=row>
                    <div class="col-lg-4  col-xs-6 biaoti1">
                        <span class="span1">课程评价</span>
                    </div>
                    <div class="col-lg-8 col-xs-6 sekuai1"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10   col-xs-8 sekuai2"></div>
        </div>
        <!--教师信息 -->
        <div class="row">
            <div class="col-lg-9   col-xs-8" style="margin-left: 10%;margin-top:7%; ">
                <div class="row">
                    <?php foreach ($courses as $course){ ?>
                    <div class="col-md-3 " style="margin-top: 40px;" >
                        <a href="#"class="jsxx mt" Cname="<?php echo '课程：'.$course->Cname;?>" Tname="<?php echo '教师：'.$course->Tname;?>">
                            <img src="<?php  echo $imgUrl.'js.png';?>">
                            <p class="jskc"> <?=$course->Cname?></p>
                            <p class="jsxm"> <?=$course->Tname?></p>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
  
    <!-- 教师评价模态框 -->
	<?php Modal::begin([
		'header' => '<h2 id="a">Hello world</h2> <h2 id="b"> <h2>',
		'id' => 'evalClassDialog',
		'footer' => '
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>',
	])?>
            <div class="container">
                <div class="col-md-3 jj8" >
                    <div class="row jj6">
                        <div class="col-md-12">
                            课堂风采：<?=EvaluationWidget::widget(['type'=>'star', 'name'=>'ktfc'])?>
                        </div>  
                    </div>
                    <div class="row jj6 ">
                        <div class="col-md-12">
                            课后辅导:<?=EvaluationWidget::widget(['type'=>'star', 'name'=>'khfd'])?>
                        </div>
                    </div>
                    <div class="row jj6">
                        <div class="col-md-12">
                            人物魅力:<?=EvaluationWidget::widget(['type'=>'star', 'name'=>'rwml'])?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 jj7" >
                    <textarea type="text" name="totw"   placeholder="意见反馈" rows="8" cols="60" autofocus ></textarea>  </br> 
                    <input type="text" name="totr" placeholder="热词"/>      
                </div>
            </div>

	<?php 
	Modal::end();
	
	?>
    <div class="container">
       
        <div class="row jj5">
            <div class="col-lg-11 " style="background-color:#e1e1e1;height: 2px;"></div>
        </div>
        <!-- 补充评价-->
        <div class="row" >
            <div class="col-lg-10   col-xs-8 bcpj">
                <div class=row>
                    <div class="col-lg-4  col-xs-6 biaoti1">
                        <span class="span1">补充评价</span>
                    </div>
                    <div class="col-lg-8 col-xs-6 sekuai1"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10   col-xs-8 sekuai2"></div>
        </div>
        <div class="row">
            <div class="col-md-10 "style="margin-left: 74px; margin-top: 40px;">
                
                <?=EvaluationWidget::widget(['type'=>'longtext', 'name'=>'bcpj', 'rows'=>15, 'placeholder'=>'请填写意见'])?>
            </div>
        </div>
        <div class="row jj5">
            <div class="col-md-11" style="background-color:#e1e1e1;height: 2px;"
                
            </div>
        </div>
        <div class="row jj1">
            <div class="col-md-3 col-md-offset-4 ">
                <button type="submit" class="tj"><span class="span2">完成评价，提交</span></button>
            </div>
        </div>
    </div>
</div>
    </form>
 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Studentbasic Table', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Sno',
            'Sname',
            'Ssex',
            'Sdept',
            'Sclass',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
