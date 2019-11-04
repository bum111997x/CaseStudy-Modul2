<?php


namespace App\Services;


interface MaleServiceInterface
{
    function getAll();
    function findById($id);
    function store($request);
    function delete($id);
    function update($request,$id);
    function search($request);
    function rank();
}
