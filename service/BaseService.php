<?php
class BaseService {
    protected $repository;
    public function __construct(BaseRepository $baseRepository){
$this->repository = $repository;
    }

    public function getById($id){
        return $this->repository->getAll();
    }

    public function getAll(){
        return $this->repository->getAll();
    }

    public function save($entity){
        $this->repository->save($entity);
    }

    public function update($entity){
        $this->repository->update($entity);
    }

    public function delete($id){
        $this->repository->delete($id);
    }
}