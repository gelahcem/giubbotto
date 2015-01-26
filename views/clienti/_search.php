<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Codice') ?>

    <?= $form->field($model, 'CodiceNascita') ?>

    <?= $form->field($model, 'Titolo') ?>

    <?= $form->field($model, 'Sesso') ?>

    <?= $form->field($model, 'Cognome') ?>

    <?php // echo $form->field($model, 'Nome') ?>

    <?php // echo $form->field($model, 'CodiceFiscale') ?>

    <?php // echo $form->field($model, 'RagioneSociale') ?>

    <?php // echo $form->field($model, 'PartitaIVA') ?>

    <?php // echo $form->field($model, 'Localnas') ?>

    <?php // echo $form->field($model, 'Provinas') ?>

    <?php // echo $form->field($model, 'Statonas') ?>

    <?php // echo $form->field($model, 'Datanas') ?>

    <?php // echo $form->field($model, 'IndirizzoRec') ?>

    <?php // echo $form->field($model, 'Indirizzo') ?>

    <?php // echo $form->field($model, 'CittaRec') ?>

    <?php // echo $form->field($model, 'Citta') ?>

    <?php // echo $form->field($model, 'CAPRec') ?>

    <?php // echo $form->field($model, 'CAP') ?>

    <?php // echo $form->field($model, 'ProvinciaRec') ?>

    <?php // echo $form->field($model, 'Provincia') ?>

    <?php // echo $form->field($model, 'TelefonoRec') ?>

    <?php // echo $form->field($model, 'Telefono') ?>

    <?php // echo $form->field($model, 'Fax') ?>

    <?php // echo $form->field($model, 'EmailRec') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Note') ?>

    <?php // echo $form->field($model, 'Responsabile') ?>

    <?php // echo $form->field($model, 'RecapitoRes') ?>

    <?php // echo $form->field($model, 'Stato') ?>

    <?php // echo $form->field($model, 'Flag') ?>

    <?php // echo $form->field($model, 'Storico') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
