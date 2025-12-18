<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kruslar".
 *
 * @property int $Id:
 * @property string $Nomi:
 * @property string $Rasmi:
 * @property int $Narxi:
 */
class Kruslar extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kruslar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nomi:', 'Rasmi:', 'Narxi:'], 'required'],
            [['Rasmi:'], 'string'],
            [['Narxi:'], 'integer'],
            [['Nomi:'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id:' => 'Id:',
            'Nomi:' => 'Nomi:',
            'Rasmi:' => 'Rasmi:',
            'Narxi:' => 'Narxi:',
        ];
    }

    /**
     * {@inheritdoc}
     * @return KruslarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KruslarQuery(get_called_class());
    }

}
