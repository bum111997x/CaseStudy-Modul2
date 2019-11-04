<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMaleRequest;
use App\Http\Requests\UpdateMaleRequest;
use App\Services\MaleServiceInterface;
use Illuminate\Http\Request;

class MaleController extends Controller
{
    protected $maleService;

    public function __construct(MaleServiceInterface $maleService)
    {
        $this->maleService = $maleService;
        $this->middleware('auth');
    }


    public function manager()
    {
        $males = $this->maleService->getAll();

        return view('male.manager', compact('males'));
    }

    function create()
    {
        return view('male.create');
    }

    function store(CreateMaleRequest $request)
    {
        $this->maleService->store($request);

        return redirect()->route('model.manager');
    }

    function delete($id)
    {
        $this->maleService->delete($id);

        return redirect()->route('model.manager');
    }

    function edit($id)
    {
        $male = $this->maleService->findById($id);

        return view('male.edit', compact('male'));
    }

    function update(UpdateMaleRequest $request, $id)
    {
        $this->maleService->update($request, $id);

        return redirect()->route('model.manager');
    }

    public function search(Request $request)
    {
        $DBSearch = $this->maleService->search($request);

        return view('male.search', compact('DBSearch'));
    }



}
