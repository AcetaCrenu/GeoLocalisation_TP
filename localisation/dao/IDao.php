<?php

/**
 *
 * @author Houda
 */
interface IDao {

    //put your code here
    public function create($obj);

    public function update($obj);

    public function delete($obj);

    public function getById($obj);

    public function getAll();
}
