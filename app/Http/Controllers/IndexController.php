<?php

namespace App\Http\Controllers;

use App\Male;
use App\Services\MaleServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    protected $maleService;

    public function __construct(MaleServiceInterface $maleService)
    {
        $this->maleService = $maleService;
    }

    public function index()
    {
        $males = $this->maleService->getAll();

        return view('male.index', compact('males'));
    }

    public function description($id)
    {
        $maleKey = 'male_'.$id;
//        if(!Session::has($maleKey)){
            Male::where('id',$id)->increment('viewCount');
            Session::put($maleKey,1);
//        }

        $male = $this->maleService->findById($id);

        return view('male.description',compact('male'));
    }

    public function rank()
    {
        $males = $this->maleService->rank();

        return view('male.rank',compact('males'));
    }
}
