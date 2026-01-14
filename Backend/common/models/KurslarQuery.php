<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Kurslar]].
 *
 * @see Kurslar
 */
class KurslarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Kurslar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Kurslar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
