<?php

namespace common\models;

use Yii;

/**
 * Bu "kurslar" jadvali uchun model klassi.
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
     * Jadval nomi
     */
    public static function tableName()
    {
        return 'kurslar';
    }

    /**
     * Tekshirish qoidalari (Rules)
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
     * Maydon nomlari (Labels)
     */
    public function attributeLabels()
    {
        return [
            'Id:' => 'ID',
            'Nomi:' => 'Kurs nomi',
            'Malumoti:' => 'Kurs haqida ma\'lumot',
            'Rasmi:' => 'Rasm URL',
            'Narxi:' => 'Narxi',
        ];
    }

    /**
     * Qidiruv uchun ActiveQuery
     */
    public static function find()
    {
        return new KurslarQuery(get_called_class());
    }
}