<?php
use yii\helpers\Url;

/** @var $model \app\models\ActiveRecords\Tasks */
?>

<div class="card-container">
    <div class="card-item">
        <h2 class="task-name"><?= $model->name ?></h2>
        <div class="task-content"><?= $model->description ?></div>
        <div class="task-creator">Автор: <?= $model->creator->login ?></div>
        <div class="task-creator">Исполнитель: <?= $model->responsible->login ?></div>
        <div class="task-status">Статус: <?= $status ?></div>
        <div class="task-deadline">Срок до: <?= $model->deadline ?></div>

</div>
</div>