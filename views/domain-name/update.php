<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DomainName */

$this->title = 'Update Domain Name: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Domain Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="domain-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
