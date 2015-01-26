<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clienti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clienti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crea Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

            'Codice',
            // 'CodiceNascita',
            // 'Titolo',
            // 'Sesso',
            'Cognome',
            'Nome',
            // 'CodiceFiscale',
            // 'RagioneSociale',
            // 'PartitaIVA',
            // 'Localnas',
            // 'Provinas',
            // 'Statonas',
            // 'Datanas',
            // 'IndirizzoRec',
            // 'Indirizzo',
            // 'CittaRec',
            'CAP', 
            'Citta',
            // 'CAPRec',
            // 'ProvinciaRec',
            // 'Provincia',
            // 'TelefonoRec',
            // 'Telefono',
            // 'Fax',
            // 'EmailRec:email',
            // 'Email:email',
            // 'Note',
            // 'Responsabile',
            // 'RecapitoRes',
            // 'Stato',
            // 'Flag',
            // 'Storico',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
