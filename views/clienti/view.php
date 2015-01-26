<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Clienti */

$this->title = $model->Codice;
$this->params['breadcrumbs'][] = ['label' => 'Clientis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Codice], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Codice], [
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
            'Codice',
            'CodiceNascita',
            'Titolo',
            'Sesso',
            'Cognome',
            'Nome',
            'CodiceFiscale',
            'RagioneSociale',
            'PartitaIVA',
            'Localnas',
            'Provinas',
            'Statonas',
            'Datanas',
            'IndirizzoRec',
            'Indirizzo',
            'CittaRec',
            'Citta',
            'CAPRec',
            'CAP',
            'ProvinciaRec',
            'Provincia',
            'TelefonoRec',
            'Telefono',
            'Fax',
            'EmailRec:email',
            'Email:email',
            'Note',
            'Responsabile',
            'RecapitoRes',
            'Stato',
            'Flag',
            'Storico',
        ],
    ]) ?>

</div>
