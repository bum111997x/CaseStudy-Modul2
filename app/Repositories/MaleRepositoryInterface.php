<?php


namespace App\Repositories;


interface MaleRepositoryInterface
{
    function getAll();
    function findById($id);
    function store($obj);
    function delete($obj);
    function update($obj);
    function search($request);
    function rank($array);
}

