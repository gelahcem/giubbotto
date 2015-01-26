<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clienti;

/**
 * ClientiSearch represents the model behind the search form about `app\models\Clienti`.
 */
class ClientiSearch extends Clienti
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Codice'], 'integer'],
            [['CodiceNascita', 'Titolo', 'Sesso', 'Cognome', 'Nome', 'CodiceFiscale', 'RagioneSociale', 'PartitaIVA', 'Localnas', 'Provinas', 'Statonas', 'Datanas', 'IndirizzoRec', 'Indirizzo', 'CittaRec', 'Citta', 'CAPRec', 'CAP', 'ProvinciaRec', 'Provincia', 'TelefonoRec', 'Telefono', 'Fax', 'EmailRec', 'Email', 'Note', 'Responsabile', 'RecapitoRes', 'Stato', 'Flag', 'Storico'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Clienti::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Codice' => $this->Codice,
        ]);

        $query->andFilterWhere(['like', 'CodiceNascita', $this->CodiceNascita])
            ->andFilterWhere(['like', 'Titolo', $this->Titolo])
            ->andFilterWhere(['like', 'Sesso', $this->Sesso])
            ->andFilterWhere(['like', 'Cognome', $this->Cognome])
            ->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'CodiceFiscale', $this->CodiceFiscale])
            ->andFilterWhere(['like', 'RagioneSociale', $this->RagioneSociale])
            ->andFilterWhere(['like', 'PartitaIVA', $this->PartitaIVA])
            ->andFilterWhere(['like', 'Localnas', $this->Localnas])
            ->andFilterWhere(['like', 'Provinas', $this->Provinas])
            ->andFilterWhere(['like', 'Statonas', $this->Statonas])
            ->andFilterWhere(['like', 'Datanas', $this->Datanas])
            ->andFilterWhere(['like', 'IndirizzoRec', $this->IndirizzoRec])
            ->andFilterWhere(['like', 'Indirizzo', $this->Indirizzo])
            ->andFilterWhere(['like', 'CittaRec', $this->CittaRec])
            ->andFilterWhere(['like', 'Citta', $this->Citta])
            ->andFilterWhere(['like', 'CAPRec', $this->CAPRec])
            ->andFilterWhere(['like', 'CAP', $this->CAP])
            ->andFilterWhere(['like', 'ProvinciaRec', $this->ProvinciaRec])
            ->andFilterWhere(['like', 'Provincia', $this->Provincia])
            ->andFilterWhere(['like', 'TelefonoRec', $this->TelefonoRec])
            ->andFilterWhere(['like', 'Telefono', $this->Telefono])
            ->andFilterWhere(['like', 'Fax', $this->Fax])
            ->andFilterWhere(['like', 'EmailRec', $this->EmailRec])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Note', $this->Note])
            ->andFilterWhere(['like', 'Responsabile', $this->Responsabile])
            ->andFilterWhere(['like', 'RecapitoRes', $this->RecapitoRes])
            ->andFilterWhere(['like', 'Stato', $this->Stato])
            ->andFilterWhere(['like', 'Flag', $this->Flag])
            ->andFilterWhere(['like', 'Storico', $this->Storico]);

        return $dataProvider;
    }
}
