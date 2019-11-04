<?php


namespace App\Repositories\Eloquent;


use App\Male;
use App\Repositories\MaleRepositoryInterface;

class MaleEloquentRepository implements MaleRepositoryInterface
{
    protected $male;

    public function __construct(Male $male)
    {
        $this->male = $male;
    }

    function getAll()
    {
        return $this->male->paginate(8);
    }

    function findById($id)
    {
        return $this->male->findOrFail($id);
    }

    function store($obj)
    {
         $obj->save();
    }


    function delete($obj)
    {
        $obj->delete();
    }

    function update($obj)
    {
        $obj->save();
    }

    function search($request)
    {
        return $this->male->where('name', 'LIKE', "%$request%")->paginate(8);
    }

    function rank($array)
    {
        return $array->get();
    }
}
