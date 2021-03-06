<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DomainName */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Domain Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="domain-name-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Id',
            'Name',
            'hasSsl:boolean',
            'templateHtml:ntext',
        ],
    ]) ?>

</div>
