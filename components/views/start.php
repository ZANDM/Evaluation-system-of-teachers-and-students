<?php
use yii\helpers\Html;

?>

    <span class="mark_w"><?= Html::encode($XiangMu) ?> </span>
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
</form>