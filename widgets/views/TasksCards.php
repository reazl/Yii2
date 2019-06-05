<?php
use yii\helpers\Url;

/** @var $model \app\models\ActiveRecords\Tasks */
?>

<div class="task-container">
    <?php if ($linked): ?>
    <a class="task-preview-link" href="<?= Url::to(['task/card', 'id' => $model->id]) ?>">
        <? endif; ?>
        <div class="task-preview">
            <h2 class="task-preview-header"><?= $model->name ?></h2>
            <div class="task-preview-content"><?= $model->description ?></div>
            <div class="task-preview-user">Автор: <?= $model->responsible->login ?></div>
        </div>
        <?php if ($linked): ?>
    </a>
<? endif; ?>
</div>