<div>
    <h6 class="inner-head mb-3 mt-3">{{$pallyItems->total()}} Available Deals</h6>
    <div class="">
        <div class="row">
            @foreach($pallyItems as $pallyItem)
                <div class="col-md-6 col-lg-3">
                    <div class="pally-inner ">
                        <div class="products-img-wrapper  mb-3 pointer">
                            <a href="#">
                                <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                </div>
                                <img class="mb-3 product-img" src="{{asset($pallyItem->cover_image_url)}}"
                                     alt="Product-img1">
                            </a>
                        </div>

                        <div class="pally-content">
                            <a href="#" class="inner-head">
                                <h5 class="mb-2">{{$pallyItem->name}} </h5>
                            </a>
                            <a href="#" class="green-bg"><span class="material-icons-outlined">
                                                            arrow_right_alt
                                                        </span>3% | <span class="clr-red">{{$pallyItem->season}} Season</span></a>
                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦{{number_format($pallyItem->price)}}
                                @if($pallyItem->previous_price != null)
                                    <s>(₦{{number_format($pallyItem->previous_price)}})</s>
                                @endif
                            </h5>
                            <section class='rating-widget'>
                                @if($pallyItem->ratings->isEmpty())
                                    <div class="no-ratings"><p>No ratings yet</p></div>
                                @else
                                    <div class="rating-main pro-detail-star" data-vote="4">
                                        <div class="mainstar hidden">
                                            <span class="full" data-value="0"></span>
                                            <span class="half" data-value="0"></span>
                                        </div>
                                        <div class="star">
                                            <span class="full" data-value="1"></span>
                                            <span class="half" data-value="0.5"></span>
                                            <span class="selected"></span>

                                        </div>
                                        <div class="star">
                                            <span class="full" data-value="2"></span>
                                            <span class="half" data-value="1.5"></span>
                                            <span class="selected"></span>

                                        </div>

                                        <div class="star">
                                            <span class="full" data-value="3"></span>
                                            <span class="half" data-value="2.5"></span>
                                            <span class="selected"></span>
                                        </div>

                                        <div class="star">
                                            <span class="full" data-value="4"></span>
                                            <span class="half" data-value="3.5"></span>
                                            <span class="selected"></span>
                                        </div>

                                        <div class="star">
                                            <span class="full" data-value="5"></span>
                                            <span class="half" data-value="4.5"></span>
                                            <span class="selected"></span>
                                        </div>
                                    </div>

                                @endif

                                <div class='success-box'>
                                    @if(!$pallyItem->ratings->isEmpty())
                                        <div class='text-message'> ({{$pallyItem->rating()}}/5.0)</div>
                                    @endif
                                </div>
                            </section>
                            <a href="#">
                                <button type="button"
                                        class="brown-btn  text-uppercase btn-effects ">SELECT ORDER
                                    TYPE
                                </button>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
    @if($pallyItems->total() > 1 && $pallyItems->count() < $pallyItems->total())
        <div class="load-bg text-center mb-5 d-none d-lg-block">
            <button wire:click="load" type="button" class="load-more text-uppercase ">
                Load more items
            </button>
        </div>
    @endif

</div>


