<?php

/* @var $this yii\web\View */

$username = \app\models\UserIdentity::findIdentity(Yii::$app->user->id)->username;
if (is_null($username))
    $username = 'гость';
$this->title = 'TaskManager';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Приветствуем тебя, <?= $username ?></h1>

        <p class="lead">Это простой task-менеджер, созданный моими руками.</p>

        <p><a  id="task-trigger" class="btn btn-lg btn-success" href="#">Посмотреть список задач</a></p>
    </div>

    <div class="body-content">

        <div class="row hidden_task">

        </div>

    </div>
</div>
