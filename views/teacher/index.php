<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\assets\AppAsset;
use yii\jui\DatePicker;
use app\components\MarkStart;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '学生板块';
$this->params['breadcrumbs'][] =$this->title;
AppAsset::register($this);
$baseUrl = $this->assetBundles[AppAsset::className()]->baseUrl . '/';
?> 
<?= DatePicker::widget(['name' => 'date']) ?>
<?= MarkStart::widget(['XiangMu'=>'学校整体',]) ?>
<div class="containder">
    <div class="row">
        <div class="col-md-8 mark">
            <table  class="mark_tab" border="2">
                <tr>
                    <td><span class="mark_w">学校整体：</span></td>
                    <td>
                        <section id="starBg" class="star_bg">  
                            <input type="radio" id="starScore1" class="score score_1" value="1" name="score1">
                            <a href="#starScore1" class="star star_1" title="差"><label for="starScore1">差</label></a>
                            <input type="radio" id="starScore2" class="score score_2" value="2" name="score1">
                            <a href="#starScore2" class="star star_2" title="较差"><label for="starScore2">较差</label></a>
                            <input type="radio" id="starScore3" class="score score_3" value="3" name="score1">
                            <a href="#starScore3" class="star star_3" title="普通"><label for="starScore3">普通</label></a>
                            <input type="radio" id="starScore4" class="score score_4" value="4" name="score1">
                            <a href="#starScore4" class="star star_4" title="较好"><label for="starScore4">较好</label></a>
                            <input type="radio" id="starScore5" class="score score_5" value="5" name="score1">
                            <a href="#5" class="star star_5" title="好"><label for="starScore5">好</label></a>
                       </section>
                    </td>
                    <td>
                        <input type="button" id="more"  class="btn btn-info" value="更多"onclick="open_w(1);void(0)" /> 
                    </td>
                 </tr> 
                 <tr>
                     <td>
                         <span class="mark_w">环境设施： </span>
                     </td>
                     <td>
                          <section id="starBg" class="star_bg">  
                            <input type="radio" id="starScore21" class="score score_1" value="2-1" name="scor">
                            <a href="#starScore1" class="star star_1" title="差"><label for="starScore21">差</label></a>
                            <input type="radio" id="starScore22" class="score score_2" value="2-2" name="scor">
                            <a href="#starScore2" class="star star_2" title="较差"><label for="starScore22">较差</label></a>
                            <input type="radio" id="starScore23" class="score score_3" value="2-3" name="scor">
                            <a href="#starScore3" class="star star_3" title="普通"><label for="starScore23">普通</label></a>
                            <input type="radio" id="starScore24" class="score score_4" value="2-4" name="scor">
                            <a href="#starScore4" class="star star_4" title="较好"><label for="starScore24">较好</label></a>
                            <input type="radio" id="starScore25" class="score score_5" value="2-5" name="scor">
                            <a href="#5" class="star star_5" title="好"><label for="starScore25">好</label></a>
                       </section>
                     </td>
                      <td>
                        <button type="button" class="btn btn-info"> 更多</button>
                    </td>
                 </tr>
                   <tr>
                     <td>
                         <span class="mark_w">教学条件： </span>
                     </td>
                     <td>
                          <section id="starBg" class="star_bg">  
                            <input type="radio" id="starScore31" class="score score_1" value="1" name="score">
                            <a href="#starScore1" class="star star_1" title="差"><label for="starScore31">差</label></a>
                            <input type="radio" id="starScore32" class="score score_2" value="2" name="score">
                            <a href="#starScore2" class="star star_2" title="较差"><label for="starScore32">较差</label></a>
                            <input type="radio" id="starScore33" class="score score_3" value="3" name="score">
                            <a href="#starScore3" class="star star_3" title="普通"><label for="starScore33">普通</label></a>
                            <input type="radio" id="starScore34" class="score score_4" value="4" name="score">
                            <a href="#starScore4" class="star star_4" title="较好"><label for="starScore34">较好</label></a>
                            <input type="radio" id="starScore35" class="score score_5" value="5" name="score">
                            <a href="#5" class="star star_5" title="好"><label for="starScore35">好</label></a>
                       </section>
                     </td>
                      <td>
                        <button type="button" class="btn btn-info"> 更多</button>
                    </td>
                 </tr>
                  
            </table>
         </div>   
        <div class="col-md-4 message">
            <div id="boxt">
                <textarea type="text" name=" " form="form1" name="st_x_t" placeholder="意见反馈" rows="10" cols="50"  ></textarea>    
                        <input type="text" name="st_x_h" placeholder="热词"/>
                         <button class="btn btn-danger" onclick="close_w(1);">关闭</button>
                        <button class="btn btn-success" onclick="close_w(1);">提交</button>
            </div>
            <div id="boxt2">
                        <textarea type="text" name=" " form="form1"  placeholder="意见反馈" rows="10" cols="50"  ></textarea>    
                        <input type="text" name="st_h" placeholder="热词"/>
                         <button class="btn btn-danger" onclick="close_w(boxt2);">关闭</button>
                        <button class="btn btn-success" onclick="close_w(boxt2);">提交</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background-color: #86c5f2" style="position: relative;">
            <div id="myCarousel" class="carousel slide" style="width: 65%;margin:0 auto">
                <!-- 轮播（Carousel）指标 -->
              <!--  <ol class="carousel-indicators" style="width:65%;">
                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   -->
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo $baseUrl.'image/te1.jpg' ?>"  alt="First slide">
                        <div style="height:300px;background-color: #ff99ff">
                            <div class="mark_box">
                                <span class="mark_w1">课堂讲解：</span>
                                <section id="starBg" class="star_bg" style="display:inline-block;">  
                                    <input type="radio" id="starScore21" class="score score_1" value="2-1" name="kt1">
                                    <a href="#starScore1" class="star star_1" title="差"><label for="starScore21">差</label></a>
                                    <input type="radio" id="starScore22" class="score score_2" value="2-2" name="kt2">
                                    <a href="#starScore2" class="star star_2" title="较差"><label for="starScore22">较差</label></a>
                                    <input type="radio" id="starScore23" class="score score_3" value="2-3" name="kt3">
                                    <a href="#starScore3" class="star star_3" title="普通"><label for="starScore23">普通</label></a>
                                    <input type="radio" id="starScore24" class="score score_4" value="2-4" name="kt4">
                                    <a href="#starScore4" class="star star_4" title="较好"><label for="starScore24">较好</label></a>
                                    <input type="radio" id="starScore25" class="score score_5" value="2-5" name="kt5">
                                    <a href="#5" class="star star_5" title="好"><label for="starScore25">好</label></a>
                                </section>
                                <button type="button" id="more"  class="btn btn-info" value="更多"onclick="open_w(2);void(0)" style="margin-left: 25px; " >更多</button>
                            </div>
                            <div class="mark_box">
                                <span class="mark_w1">课后辅导：</span>
                                <section id="starBg" class="star_bg" style="display:inline-block;">  
                                    <input type="radio" id="starScore21" class="score score_1" value="2-1" name="kt1">
                                    <a href="#starScore1" class="star star_1" title="差"><label for="starScore21">差</label></a>
                                    <input type="radio" id="starScore22" class="score score_2" value="2-2" name="kt2">
                                    <a href="#starScore2" class="star star_2" title="较差"><label for="starScore22">较差</label></a>
                                    <input type="radio" id="starScore23" class="score score_3" value="2-3" name="kt3">
                                    <a href="#starScore3" class="star star_3" title="普通"><label for="starScore23">普通</label></a>
                                    <input type="radio" id="starScore24" class="score score_4" value="2-4" name="kt4">
                                    <a href="#starScore4" class="star star_4" title="较好"><label for="starScore24">较好</label></a>
                                    <input type="radio" id="starScore25" class="score score_5" value="2-5" name="kt5">
                                    <a href="#5" class="star star_5" title="好"><label for="starScore25">好</label></a>
                                </section>
                                 <button type="button" id="more"  class="btn btn-info" value="更多"onclick="open_w(2);void(0)" style="margin-left: 25px; " >更多</button>
                            </div>
                            <div class="mark_box">
                                <span class="mark_w1">人物魅力：</span>
                                <section id="starBg" class="star_bg" style="display:inline-block;">  
                                    <input type="radio" id="starScore21" class="score score_1" value="2-1" name="kt1">
                                    <a href="#starScore1" class="star star_1" title="差"><label for="starScore21">差</label></a>
                                    <input type="radio" id="starScore22" class="score score_2" value="2-2" name="kt2">
                                    <a href="#starScore2" class="star star_2" title="较差"><label for="starScore22">较差</label></a>
                                    <input type="radio" id="starScore23" class="score score_3" value="2-3" name="kt3">
                                    <a href="#starScore3" class="star star_3" title="普通"><label for="starScore23">普通</label></a>
                                    <input type="radio" id="starScore24" class="score score_4" value="2-4" name="kt4">
                                    <a href="#starScore4" class="star star_4" title="较好"><label for="starScore24">较好</label></a>
                                    <input type="radio" id="starScore25" class="score score_5" value="2-5" name="kt5">
                                    <a href="#5" class="star star_5" title="好"><label for="starScore25">好</label></a>
                                </section>
                                 <button type="button" id="more"  class="btn btn-info" value="更多"onclick="open_w(2);void(0)" style="margin-left: 25px; " >更多</button>
                            </div>    
                        </div>
                    </div>
                    <div class="item">
                        <img src="<? echo $baseUrl.'image/te2.jpeg'?>" alt="Second slide">
                        <!-- 对教师评价-->
                        <div style="height:300px;background-color: #090">
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="<? echo $baseUrl.'image/te1.jpg'?>" alt="Third slide">
                        <div style="height:300px;background-color: #2191c0"> </div>
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="carousel-control left" href="#myCarousel" style="height: 297px;" 
                   data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel"  style="height: 297px;" 
                   data-slide="next">&rsaquo;</a>
            </div> 
            <div id="boxt1">
                <textarea type="text" name=" " form="form1" name="st_x_t" placeholder="意见反馈" rows="10" cols="50"  ></textarea>    
                <input type="text" name="st_x_h" placeholder="热词"/>
                <button class="btn btn-danger" onclick="close_w(2);">关闭</button>
                <button class="btn btn-success" onclick="close_w(2);">提交</button>
            </div>
        </div>
       
    </div>
</div>