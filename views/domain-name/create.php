<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DomainName */

$this->title = 'Create Domain Name';
$this->params['breadcrumbs'][] = ['label' => 'Domain Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domain-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
