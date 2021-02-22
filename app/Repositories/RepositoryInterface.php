<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function getModel();

    public function all();
    public function create($data);
    public function delete($id);
    public function update($id, $data);
    public function find($id);
}
