@extends('front.account.account_layout')

@section('account_main_section')
    <div class="page-sidenav-content">
        <div class="row mdc-card between-xs middle-xs w-100 p-2 mdc-elevation--z1 text-muted d-md-none d-lg-none d-xl-none mb-3">
            <button id="page-sidenav-toggle" class="mdc-icon-button material-icons">more_vert</button>
            <h3 class="fw-500">Add new offer</h3>
        </div>
        <div class="mdc-card p-3">
            <div class="mdc-tab-bar-wrapper submit-property">
                <div class="mdc-tab-bar mb-3">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                                <button class="mdc-tab mdc-tab--active" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Basic</span>
                                                </span>
                                    <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                    <span class="mdc-tab__ripple"></span>
                                </button>
                                <button class="mdc-tab mdc-tab" tabindex="0">
                                                <span class="mdc-tab__content">
                                                <span class="mdc-tab__text-label">Address</span>
                                                </span>
                                    <span class="mdc-tab-indicator mdc-tab-indicator">
                                                <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                                </span>
                                    <span class="mdc-tab__ripple"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content tab-content--active">
                    <form action="javascript:void(0);" id="sp-basic-form" class="row">
                        <div class="col-xs-12 p-3">
                            <h1 class="fw-500 text-center">Basic</h1>
                        </div>
                        <div class="col-xs-12 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Title</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--textarea">
                                <textarea class="mdc-text-field__input" rows="5"></textarea>
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Description</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Price ($)</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Price (€)</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Property Type</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Office</li>
                                        <li class="mdc-list-item" data-value="2">House</li>
                                        <li class="mdc-list-item" data-value="3">Apartment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Property Status</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">For Sale</li>
                                        <li class="mdc-list-item" data-value="2">For Rent</li>
                                        <li class="mdc-list-item" data-value="3">Open House</li>
                                        <li class="mdc-list-item" data-value="4">No Fees</li>
                                        <li class="mdc-list-item" data-value="5">Hot Offer</li>
                                        <li class="mdc-list-item" data-value="6">Sold</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 mt-2">
                            <label class="text-muted">GALLERY (max 8 images)</label>
                            <div id="property-images" class="dropzone needsclick">
                                <div class="dz-message needsclick text-muted">
                                    Drop files here or click to upload.
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-2 mt-3 end-xs">
                            <button class="mdc-button mdc-button--raised next-tab" type="button">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Next</span>
                                <i class="material-icons mdc-button__icon">navigate_next</i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tab-content">
                    <form action="javascript:void(0);" id="sp-address-form" class="row">
                        <div class="col-xs-12 p-3">
                            <h1 class="fw-500 text-center">Address</h1>
                        </div>
                        <div class="col-xs-12 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon">
                                <i class="material-icons mdc-text-field__icon text-muted">location_on</i>
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Location</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-2">
                            <div id="contact-map"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">City</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">New York</li>
                                        <li class="mdc-list-item" data-value="2">Chicago</li>
                                        <li class="mdc-list-item" data-value="3">Los Angeles</li>
                                        <li class="mdc-list-item" data-value="4">Seattle</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label class="mdc-floating-label">Zip Code</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Neighborhood</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Astoria</li>
                                        <li class="mdc-list-item" data-value="2">Midtown</li>
                                        <li class="mdc-list-item" data-value="3">Chinatown</li>
                                        <li class="mdc-list-item" data-value="4">Austin</li>
                                        <li class="mdc-list-item" data-value="5">Englewood</li>
                                        <li class="mdc-list-item" data-value="6">Riverdale</li>
                                        <li class="mdc-list-item" data-value="7">Hollywood</li>
                                        <li class="mdc-list-item" data-value="8">Sherman Oaks</li>
                                        <li class="mdc-list-item" data-value="9">Highland Park</li>
                                        <li class="mdc-list-item" data-value="10">Belltown</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 p-2">
                            <div class="mdc-select mdc-select--outlined">
                                <div class="mdc-select__anchor">
                                    <i class="mdc-select__dropdown-icon"></i>
                                    <div class="mdc-select__selected-text"></div>
                                    <div class="mdc-notched-outline">
                                        <div class="mdc-notched-outline__leading"></div>
                                        <div class="mdc-notched-outline__notch">
                                            <label class="mdc-floating-label">Street</label>
                                        </div>
                                        <div class="mdc-notched-outline__trailing"></div>
                                    </div>
                                </div>
                                <div class="mdc-select__menu mdc-menu mdc-menu-surface">
                                    <ul class="mdc-list">
                                        <li class="mdc-list-item mdc-list-item--selected" data-value=""></li>
                                        <li class="mdc-list-item" data-value="1">Astoria Street #1</li>
                                        <li class="mdc-list-item" data-value="2">Astoria Street #2</li>
                                        <li class="mdc-list-item" data-value="3">Midtown Street #1</li>
                                        <li class="mdc-list-item" data-value="4">Midtown Street #2</li>
                                        <li class="mdc-list-item" data-value="5">Chinatown Street #1</li>
                                        <li class="mdc-list-item" data-value="6">Chinatown Street #2</li>
                                        <li class="mdc-list-item" data-value="7">Austin Street #1</li>
                                        <li class="mdc-list-item" data-value="8">Austin Street #2</li>
                                        <li class="mdc-list-item" data-value="9">Englewood Street #1</li>
                                        <li class="mdc-list-item" data-value="10">Englewood Street #2</li>
                                        <li class="mdc-list-item" data-value="11">Riverdale Street #1</li>
                                        <li class="mdc-list-item" data-value="12">Riverdale Street #2</li>
                                        <li class="mdc-list-item" data-value="13">Hollywood Street #1</li>
                                        <li class="mdc-list-item" data-value="14">Hollywood Street #2</li>
                                        <li class="mdc-list-item" data-value="15">Sherman Oaks Street #1</li>
                                        <li class="mdc-list-item" data-value="16">Sherman Oaks Street #2</li>
                                        <li class="mdc-list-item" data-value="17">Highland Park Street #1</li>
                                        <li class="mdc-list-item" data-value="18">Highland Park Street #2</li>
                                        <li class="mdc-list-item" data-value="19">Belltown Street #1</li>
                                        <li class="mdc-list-item" data-value="20">Belltown Street #2</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 p-2 mt-3 row between-xs">
                            <button class="mdc-button mdc-button--raised prev-tab" type="button">
                                <span class="mdc-button__ripple"></span>
                                <i class="material-icons mdc-button__icon">navigate_before</i>
                                <span class="mdc-button__label">Back</span>
                            </button>
                            <button class="mdc-button mdc-button--raised next-tab" type="button">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label">Next</span>
                                <i class="material-icons mdc-button__icon">navigate_next</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
