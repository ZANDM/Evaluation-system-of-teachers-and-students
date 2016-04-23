<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use app\components\MarkWenZi;

use app\components\EvaluationWidget;
?>
<div class="row jspj" id="<?php echo $qy;?>">
            <div class="col-md-3 col-lg-offset-3 jj1" >
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
                <div  class="boxt1">
                    <textarea type="text" name="totw"   placeholder="意见反馈" rows="8" cols="60" autofocus ></textarea>  </br> 
                    <input type="text" name="totr" placeholder="热词"/>
                    <a class="btn btn-danger" style="padding:6px 9px;" onclick="close_t(<?php echo "'".$qy."'";?>)">关闭</a>
                    <a class="btn btn-success" style="padding:6px 9px;" onclick="open_t(<?php echo "'".$qy."'";?>)">提交</a>
                </div>
            </div>
        </div>