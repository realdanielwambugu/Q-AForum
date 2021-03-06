<?php

Namespace Xcholars\Database\Orm\Relations;

class HasOne extends HasOneOrMany
{
   /**
    * Get the results of the relationship.
    *
    * @return mixed
    */
    public function getResults()
    {
        return $this->query->first();
    }

   /**
    * Initialize the relation on a set of models.
    *
    * @param  array  $models
    * @param  string  $relation
    * @return array
    */
    public function initRelation(array $models, $relation)
    {
        foreach ($models as $model)
        {
            $model->setRelation($relation, $model);
        }

        return $models;
    }

   /**
    * Match the eagerly loaded results to their parents.
    *
    * @param  array  $models
    * @param array  $results
    * @param  string  $relation
    * @return array
    */
    public function match(array $models, array $results, $relation)
    {
        return $this->matchOne($models, $results, $relation);
    }
}
