<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clienti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CodiceNascita')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Titolo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Sesso')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Cognome')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'CodiceFiscale')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'RagioneSociale')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'PartitaIVA')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Localnas')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Provinas')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Statonas')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Datanas')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'IndirizzoRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Indirizzo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'CittaRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Citta')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'CAPRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'CAP')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'ProvinciaRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Provincia')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'TelefonoRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Telefono')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Fax')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'EmailRec')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Note')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Responsabile')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'RecapitoRes')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Stato')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Flag')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'Storico')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
