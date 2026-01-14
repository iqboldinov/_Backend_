<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kurslar".
 *
 * @property int $id
 * @property string $nom
 * @property string $malumot
 * @property string $rasm
 * @property int $narxi
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
            [['nom', 'malumot', 'rasm', 'narxi'], 'required'],
            [['malumot', 'rasm'], 'string'],
            [['narxi'], 'integer'],
            [['nom'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nom',
            'malumot' => 'Malumot',
            'rasm' => 'Rasm',
            'narxi' => 'Narxi',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\KurslarQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\KurslarQuery(get_called_class());
    }

}
