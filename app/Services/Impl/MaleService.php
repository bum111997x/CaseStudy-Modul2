<?php


namespace App\Services\Impl;


use App\Male;
use App\Repositories\MaleRepositoryInterface;
use App\Services\MaleServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MaleService implements MaleServiceInterface
{
    protected $maleRepository;

    public function __construct(MaleRepositoryInterface $maleRepository)
    {
        $this->maleRepository = $maleRepository;
    }

    function getAll()
    {
        return $this->maleRepository->getAll();
    }

    function findById($id)
    {
        return $this->maleRepository->findById($id);
    }

    function store($request)
    {
        $male = new Male();
        $male->name = $request->name;
        $male->dateOfBirth = $request->dateOfBirth;
        $male->height = $request->height;
        $male->national = $request->national;
        $male->description = $request->description;
        $male->job = $request->job;
        if (!$request->hasFile('image')) {
            $male->image = $request->image;
        } else {
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $request->fileName;
            $newImageName = "$imageName." . time() . ".$imageExtension";
            $image->storeAs('public/image', $newImageName);
            $male->image = $newImageName;

        }

        $this->maleRepository->store($male);
    }

    function delete($id)
    {
        $male = $this->maleRepository->findById($id);
        Storage::delete('public/image/' . $male->image);
        $this->maleRepository->delete($male);
    }

    function update($request, $id)
    {
        $model = $this->maleRepository->findById($id);
        $model->name = $request->name;
        $model->dateOfBirth = $request->dateOfBirth;
        $model->height = $request->height;
        $model->national = $request->national;
        $model->description = $request->description;
        $model->job = $request->job;
        if ($request->image) {
            Storage::delete('public/image/'. $model->image);
            $image = $request->file('image');
            $imageExtension = $image->getClientOriginalExtension();
            $imageName = $request->imageName;
            $newImageName = $imageName . time() .'.' . $imageExtension;
            $image->storeAs('public/image', $newImageName);
            $model->image = $newImageName;
        }
        $this->maleRepository->update($model);
    }

    function search($request)
    {
        $search = $request->search;

        return $this->maleRepository->search($search);
    }

    function rank()
    {
        $males = DB::table('models')->orderByDesc('viewCount');

        return $this->maleRepository->rank($males);
    }
}
