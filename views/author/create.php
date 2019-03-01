<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Authors */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Редактирование записей', 'url' => ['edit']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
