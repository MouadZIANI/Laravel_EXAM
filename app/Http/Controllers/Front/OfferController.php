<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * @var OfferRepository
     */
    private $offerRepository;

    /**
     * PagesController constructor.
     * @param OfferRepository $offerRepository
     */
    public function __construct(OfferRepository $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = $this->offerRepository->findAll();

        return view('front.account.offers.index', [
            'offers' => $offers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.account.offers.create');
    }

    /**
     * Show the specific resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('front.account.offers.show', ['offer' => $offer]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->offerRepository->save($request);

        return redirect()->route('front.account.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->route('front.account.offers.index');
    }
}
