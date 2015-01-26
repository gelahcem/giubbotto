<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clienti".
 *
 * @property integer $Codice
 * @property string $CodiceNascita
 * @property string $Titolo
 * @property string $Sesso
 * @property string $Cognome
 * @property string $Nome
 * @property string $CodiceFiscale
 * @property string $RagioneSociale
 * @property string $PartitaIVA
 * @property string $Localnas
 * @property string $Provinas
 * @property string $Statonas
 * @property string $Datanas
 * @property string $IndirizzoRec
 * @property string $Indirizzo
 * @property string $CittaRec
 * @property string $Citta
 * @property string $CAPRec
 * @property string $CAP
 * @property string $ProvinciaRec
 * @property string $Provincia
 * @property string $TelefonoRec
 * @property string $Telefono
 * @property string $Fax
 * @property string $EmailRec
 * @property string $Email
 * @property string $Note
 * @property string $Responsabile
 * @property string $RecapitoRes
 * @property string $Stato
 * @property string $Flag
 * @property string $Storico
 */
class Clienti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clienti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CodiceNascita', 'Titolo', 'Sesso', 'Cognome', 'Nome', 'CodiceFiscale', 'RagioneSociale', 'PartitaIVA', 'Localnas', 'Provinas', 'Statonas', 'Datanas', 'IndirizzoRec', 'Indirizzo', 'CittaRec', 'Citta', 'CAPRec', 'CAP', 'ProvinciaRec', 'Provincia', 'TelefonoRec', 'Telefono', 'Fax', 'EmailRec', 'Email', 'Note', 'Responsabile', 'RecapitoRes', 'Stato', 'Flag', 'Storico'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Codice' => 'Codice',
            'CodiceNascita' => 'Codice Nascita',
            'Titolo' => 'Titolo',
            'Sesso' => 'Sesso',
            'Cognome' => 'Cognome',
            'Nome' => 'Nome',
            'CodiceFiscale' => 'Codice Fiscale',
            'RagioneSociale' => 'Ragione Sociale',
            'PartitaIVA' => 'Partita Iva',
            'Localnas' => 'Localnas',
            'Provinas' => 'Provinas',
            'Statonas' => 'Statonas',
            'Datanas' => 'Datanas',
            'IndirizzoRec' => 'Indirizzo Rec',
            'Indirizzo' => 'Indirizzo',
            'CittaRec' => 'Citta Rec',
            'Citta' => 'Citta',
            'CAPRec' => 'Caprec',
            'CAP' => 'Cap',
            'ProvinciaRec' => 'Provincia Rec',
            'Provincia' => 'Provincia',
            'TelefonoRec' => 'Telefono Rec',
            'Telefono' => 'Telefono',
            'Fax' => 'Fax',
            'EmailRec' => 'Email Rec',
            'Email' => 'Email',
            'Note' => 'Note',
            'Responsabile' => 'Responsabile',
            'RecapitoRes' => 'Recapito Res',
            'Stato' => 'Stato',
            'Flag' => 'Flag',
            'Storico' => 'Storico',
        ];
    }
}
