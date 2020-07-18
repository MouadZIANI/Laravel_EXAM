@extends('front.account.account_layout')

@section('account_main_section')
    <div class="page-sidenav-content">
    <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
        <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button>
        <h3 class="fw-500">My Offers</h3>
    </div>
    <div class="mdc-card p-3">
        <div class="mdc-data-table border-0 w-100 mt-3">
            <table class="mdc-data-table__table" aria-label="Dessert calories">
                <thead>
                <tr class="mdc-data-table__header-row">
                    <th class="mdc-data-table__header-cell">ID</th>
                    <th class="mdc-data-table__header-cell">Image</th>
                    <th class="mdc-data-table__header-cell">Title</th>
                    <th class="mdc-data-table__header-cell">Price</th>
                    <th class="mdc-data-table__header-cell">Phone number</th>
                    <th class="mdc-data-table__header-cell">Actions</th>
                </tr>
                </thead>
                <tbody class="mdc-data-table__content">
                    @foreach($offers as $offer)
                        <tr class="mdc-data-table__row">
                            <td class="mdc-data-table__cell">{{ $offer->id }}</td>
                            <td class="mdc-data-table__cell"><img src="{{ asset($offer->images[0]) }}" alt="pro-image" width="100" class="d-block py-3"></td>
                            <td class="mdc-data-table__cell">{{ $offer->title }}</td>
                            <td class="mdc-data-table__cell">{{ $offer->price . ' ' . $offer->currency }}</td>
                            <td class="mdc-data-table__cell">{{ $offer->phone_number }}</td>
                            <td class="mdc-data-table__cell">
                                <form action="{{ route('front.account.offers.delete', $offer) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mdc-icon-button material-icons warn-color">delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
