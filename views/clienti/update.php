<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti */

$this->title = 'Update Clienti: ' . ' ' . $model->Codice;
$this->params['breadcrumbs'][] = ['label' => 'Clientis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Codice, 'url' => ['view', 'id' => $model->Codice]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="clienti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
