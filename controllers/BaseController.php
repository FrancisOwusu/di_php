<?php
class BaseController {
    protected $service;

    public function __construct(BaseService $service) {
        $this->service = $service;
    }

    public function getById($id) {
        $entity = $this->service->getById($id);
        // Handle response as needed
    }

    public function getAll() {
        $entities = $this->service->getAll();
        // Handle response as needed
    }

    public function addEntity($entity) {
        $this->service->save($entity);
        // Handle response as needed
    }

    public function updateEntity($entity) {
        $this->service->update($entity);
        // Handle response as needed
    }

    public function deleteEntity($id) {
        $this->service->delete($id);
        // Handle response as needed
    }
}
