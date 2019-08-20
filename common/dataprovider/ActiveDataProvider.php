<?php

namespace common\dataprovider;


use yii\base\InvalidConfigException;
use yii\elasticsearch\Query;

class ActiveDataProvider extends \yii\elasticsearch\ActiveDataProvider
{
    /**
     * @inheritdoc
     */
    protected function prepareTotalCount()
    {
        if (!$this->query instanceof Query) {
            throw new InvalidConfigException('The "query" property must be an instance "' . Query::className() . '" or its subclasses.');
        }

        $results = $this->getQueryResults();
        return isset($results['hits']['total']['value']) ? (int)$results['hits']['total']['value'] : 0;
    }
}