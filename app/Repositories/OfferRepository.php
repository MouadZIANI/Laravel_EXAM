<?php

namespace App\Repositories;

use App\Models\Offer;
use Kreait\Firebase\Factory;

class OfferRepository {

    private $model;

    /**
     * DemandRepository constructor.
     */
    public function __construct(Offer $model) {
        $this->model = $model;
    }

    public function findAll($length = null, $filters = [])
    {
        // $this->fetchOffersFromFirestore();

        $offers = $this->model;

        if(isset($filters['min_price']) && isset($filters['max_price'])) {
            $offers = $offers->whereBetween('price', [$filters['min_price'], $filters['max_price']]);
        }

        if(isset($filters['keyword'])) {
            $offers = $offers->where('title', 'LIKE', '%'.$filters['keyword'].'%');
        }

        return $length ? $offers->latest()->paginate($length) : $offers->latest()->get();
    }

    public function save($request)
    {
        $images = [];
        if($request->hasFile('images')) {
            foreach($request->file('images') as $image) {
                $destinationPath = 'storage_files/offers/';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($images, 'storage_files/offers/' . $filename);
            }
        }

        $offer = $this->model->create([
            'title' => $request->get('title'),
            'address' => $request->get('address'),
            'phone_number' => $request->get('phone_number'),
            'price' => $request->get('price'),
            'currency' => 'DH',
            'capacity' => $request->get('capacity'),
            'attributes' => $request->get('feautres'),
            'images' => $images,
            'long' => $request->get('long'),
            'lat' => $request->get('lat'),
            'user_id' => auth()->id()
        ]);

        $this->pushOffersToFirestore($offer);

        return $offer;
    }

    public function pushOffersToFirestore(Offer $offer)
    {
        $factory = (new Factory())->withServiceAccount(public_path('config/coloco-student-firebase-adminsdk.json'));
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $docRef = $database->collection('cars')->newDocument();
        $docRef->set([
            "phoneNumber" => $offer->phone_number,
            "price" => $offer->price,
            "adress" => $offer->address,
            "attributes" => $offer->feautres,
            "lat" => $offer->lat,
            "long" => $offer->long,
            "title" => $offer->title,
            "images" => [
                'https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/deco/pieces/chambre/idee-deco-chambre/adoptez-l-ambiance-exotique-chic-dans-la-chambre/88275965-1-fre-FR/Adoptez-l-ambiance-exotique-chic-dans-la-chambre.jpg',
                'https://resize-elle.ladmedia.fr/rcrop/638,,forcex/img/var/plain_site/storage/images/deco/pieces/chambre/idee-deco-chambre/imaginez-une-bibliotheque-au-dessus-de-la-tete-de-lit-de-la-chambre/88274948-1-fre-FR/Imaginez-une-bibliotheque-au-dessus-de-la-tete-de-lit-de-la-chambre.jpg'
            ],
            "currency" => "MAD",
        ]);

        dd($offer);
    }

    public function fetchOffersFromFirestore()
    {
        $factory = (new Factory())->withServiceAccount(public_path('config/coloco-student-firebase-adminsdk.json'));
        $firestore = $factory->createFirestore();
        $database = $firestore->database();
        $documents = $database->collection('cars')->documents();
        foreach($documents as $document) {
            $title = $document->data()['title'];
            if(!$this->model->where('title', $title)->exists()) {
                $this->model->create([
                    'title' => $document->data()['title'],
                    'address' => $document->data()['adress'],
                    'phone_number' => $document->data()['phoneNumber'],
                    'price' => $document->data()['price'],
                    'currency' => $document->data()['currency'],
                    'capacity' => 1,
                    'attributes' => $document->data()['attributes'],
                    'images' => $document->data()['images'],
                    'long' => $document->data()['long'],
                    'lat' => $document->data()['lat'],
                    'user_id' => 1
                ]);
            }
        }
    }
}
