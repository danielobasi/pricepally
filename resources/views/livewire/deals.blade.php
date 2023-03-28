<div class="tab-pane fade show active " id="pally" role="tabpanel" aria-labelledby="pally-tab">
    <h6 class="inner-head">{{$deals->total()}} Available Deals</h6>
    <div class="">
        <div class="row">
            @foreach($deals as $deal)
                <div class="col-md-6 col-lg-3">
                    <div class="pally-inner ">
                        <div class="products-img-wrapper  mb-3 pointer">
                            <a href="$">
                                <div class="heart-icon">
                                                            <span class="material-icons">
                                                                favorite_border
                                                            </span>
                                </div>
                                <img class=" product-img mb-3" src="{{asset($deal->product->cover_image_url)}}"
                                     alt="Product-img1">
                            </a>
                        </div>

                        <div class="pally-content">
                            <a href="#" class="inner-head">
                                <h5 class="mb-2">{{$deal->product->name}} </h5>
                            </a>
                            <a href="#" class="red-bg"><span class="material-icons-outlined">
                                                            arrow_right_alt
                                                        </span>9% | <span class="clr-gr">{{$deal->product->season}} Season</span></a>
                            <h5 class="mb-2 mt-2 font-weight-bold simhead">₦{{number_format($deal->product->price / $deal->initial_slots)}} <small>per
                                    slot (slot size per person goes here)</small></h5>
                            <h6 class="mb-2" id="countdown{{$deal->id}}">Time left: 68:50:52</h6>
                            <ul class="list-unstyled pallylist-bg mb-2">
                                @foreach($deal->dealOrders as $dealOrder)
                                    <li class="d-inline-block pally-left">
                                        <img class="list-img" src="{{asset($dealOrder->order->user->avatar_url)}}"
                                             alt="list-img1">
                                    </li>
                                @endforeach

                                <li class="d-inline-block">
                                    <small>{{$deal->available_slots}} slots left</small>
                                </li>
                            </ul>
                            <a href="#">
                                <button type="button"
                                        class="brown-btn  text-uppercase btn-effects pally-slot-btn">
                                    BUY
                                    SLOT
                                </button>
                            </a>

                        </div>

                    </div>
                </div>

                <script>
                    const timer{{$deal->id}} = new DealCountdownTimer({
                        id:"countdown{{$deal->id}}",
                        //targetDate: new Date("September, 21 2023 18:00:00"),
                        targetDate: new Date("{{$deal->expire_time}}"),
                    });

                    timer{{$deal->id}}.startTimer();
                </script>
            @endforeach

        </div>
    </div>
</div>
