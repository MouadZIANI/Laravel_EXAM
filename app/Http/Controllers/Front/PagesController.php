<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Repositories\DemandRepository;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @var OfferRepository
     */
    private $offerRepository;

    /**
     * @var DemandRepository
     */
    private $demandRepository;

    /**
     * PagesController constructor.
     * @param OfferRepository $offerRepository
     * @param DemandRepository $demandRepository
     */
    public function __construct(OfferRepository $offerRepository, DemandRepository $demandRepository)
    {
        $this->offerRepository = $offerRepository;
        $this->demandRepository = $demandRepository;
    }

    public function home()
    {
        $offers = $this->offerRepository->findAll(8);
        $demands = $this->demandRepository->findAll();

        return view('front.pages.home', [
            'offers' => $offers,
            'demands' => $demands
        ]);
    }

    public function offers()
    {
        $filters = request()->all();
        $offers = $this->offerRepository->findAll(null, $filters);

        return view('front.pages.offers', [
            'offers' => $offers
        ]);
    }
}
