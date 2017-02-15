<?php
use yii\helpers\Html;
?>
<div class="container">
    <div class="col-md-6 col-md-offset-3"><h1 class="text-center">Админка</h1></div>
    <div class="col-md-6 col-md-offset-3">
        <div id="button_admin">
            <?= Html::submitButton('<a href="admin/default/carrency/2" id="b_link"">Котировки</a>', ['class' => 'btn btn-primary button_left']) ?>
            <?= Html::submitButton('<a href="admin/default/armor"  id="b_link">Бронирование</a>', ['class' => 'btn btn-primary button_right']) ?>
        </div>

    </div>
    <table class="table">
        <thead>
        <tr>
            <td>#</td>
            <td>Валюта</td>
            <td>Покупка</td>
            <td>Продажа</td>
            <td>-</td>
        </tr>
        </thead>
        <tbody>
        <?php 
        foreach ($model as $item){?>
            <tr>
                <td><?=$item->id?></td>
                <td><?=$item->currency?></td>
                <td><?=$item->buy?></td>
                <td><?=$item->sale?></td>
                <td><a href="admin/default/edit/<?="id=$item->id"?>">Изменить</a></td>
            </tr>
        <?php }
        ?>
        </tbody>
    </table>
</div>