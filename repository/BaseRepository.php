<?php
interface BaseRepository {
    public function getById($id);
    public function getAll();
    public function save($entity);
    public function update($entity);
    public function delete($id);
}
