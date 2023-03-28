<div class="tab-pane fade preorder-bg" id="pre-orders" role="tabpanel"
     aria-labelledby="pre-orders-tab">
    <h6 class="inner-head mb-3 mt-3">{{$recommendedItems->total()}} Available Deals</h6>
    <div class="">
        <div class="row">
            @foreach($recommendedItems as $recommendedItem)
                <div class="col-md-6 col-lg-3">
                    <div class="pally-inner">
                        <div class="products-img-wrapper  mb-3 pointer">
                            <a href="#">
                                <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                </div>
                                <img class="mb-3 product-img" src="{{asset($recommendedItem->product->cover_image_url)}}"
                                     alt="Pre-order1">
                            </a>
                        </div>

                        <div class="pally-content">
                            <a href="#" class="inner-head">
                                <h5 class="mb-2">{{$recommendedItem->product->name}}</h5>
                            </a>
                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                            arrow_right_alt
                                                        </span>9% | In Season</a>
                            <h6 class="mb-2 mt-2 font-weight-bold simhead">₦ {{number_format($recommendedItem->product->price/$recommendedItem->initial_quantity)}} per {{$recommendedItem->unit}}</h6>
                            <p class="text-red mb-2">{{$recommendedItem->available_quantity}}{{$recommendedItem->unit}} of {{$recommendedItem->initial_quantity}}{{$recommendedItem->unit}} left</p>
                            <div class="preorder-progress stat-bar mb-2">
                                <span class="stat-bar-rating" role="stat-bar" style="width: 80%;">80%</span>
                            </div>
                            <p class="mb-2 dgrey-clr">Delivery Date: {{now()->addDays($recommendedItem->delivery_days)->toDayDateTimeString()}} </p>
                            <a href="#">
                                <button type="button" class="brown-btn  text-uppercase btn-effects "
                                        data-toggle="modal" data-target="#preorderModal">Book
                                    Now
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
