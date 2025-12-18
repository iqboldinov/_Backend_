<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Kruslar]].
 *
 * @see Kruslar
 */
class KruslarQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Kruslar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Kruslar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
