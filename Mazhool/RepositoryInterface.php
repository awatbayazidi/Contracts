<?php namespace AwatBayazidi\Contracts\Mazhool;

interface RepositoryInterface
{

    public function all();
    public function getCached();
    public function scan();
    public function toCollection();
    public function getScanPaths();
    public function enabled();
    public function disabled();
    public function count();
    public function getOrdered();
    public function getByStatus($status);
    public function find($name);
    public function findOrFail($name);
}
