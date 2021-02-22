<?php
namespace App\Repositories\Eloquent;
use App\Repositories\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    private function setModel(){
        $this->model = app()->make($this->getModel());
    }

    public abstract function getModel();

    public function all(){
        return $this->model->all();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function update($id, $data)
    {
        $this->model->find($id)->update($data);
    }

    public function find($id)
    {
        $this->model->find($id);
    }
}
