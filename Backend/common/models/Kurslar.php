<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kurslar".
 *
 * @property int $Id:
 * @property string $Nomi:
 * @property string $Malumoti:
 * @property string $Rasmi:
 * @property int $Narxi:
 */
class Kurslar extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kurslar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nomi:', 'Malumoti:', 'Rasmi:', 'Narxi:'], 'required'],
            [['Malumoti:', 'Rasmi:'], 'string'],
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
            'Malumoti:' => 'Malumoti:',
            'Rasmi:' => 'Rasmi:',
            'Narxi:' => 'Narxi:',
        ];
    }

    /**
     * {@inheritdoc}
     * @return KurslarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KurslarQuery(get_called_class());
    }

}
