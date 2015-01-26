<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clienti */

$this->title = 'Create Clienti';
$this->params['breadcrumbs'][] = ['label' => 'Clientis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
