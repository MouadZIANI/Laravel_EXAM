<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Repositories\DemandRepository;
use Illuminate\Http\Request;

class DemandController extends Controller
{
    /**
     * @var DemandRepository
     */
    private $demandRepository;

    /**
     * DemandController constructor.
     * @param DemandRepository $demandRepository
     */
    public function __construct(DemandRepository $demandRepository)
    {
        $this->demandRepository = $demandRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = $this->demandRepository->findAll();

        return view('front.account.demands.index', [
            'demands' => $demands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.account.demands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->demandRepository->save($request);

        return redirect()->route('front.account.demands.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demand $demand)
    {
        $demand->delete();
        return redirect()->route('front.account.demands.index');
    }
}
