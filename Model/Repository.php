<?php namespace AwatBayazidi\Contracts\Model;

interface Repository
{
    /**
     * @param $model
     *
     * @return mixed
     */
    public function setModel($model);

    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @return mixed
     */
    public function getQuery();

    /**
     * @return mixed
     */
    public function makeModel();



    public function getTable();
}
