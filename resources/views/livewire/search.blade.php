<div class="search-container">
    <form>
        <div class="outer_search">
            <div class="saerch-bar"  id="search_bars">
                                                        <span class="material-icons">
                                                                search
                                                                </span>
                <input type="text" wire:model="search" placeholder="Search Food Items or Users" name="search">
            </div>
            <button class="yellow-bg">SEARCH</button>
        </div>
        <div class="search-dropdown"  id="scrolling">
            <div class="search-items">
                @forelse($foodItems as $foodItem)
                    @if($loop->first)
                    <h6 class="grey-text">FOOD ITEMS</h6>
                    @endif
                <ul class="list-unstyled mb-3">
                    <li class="d-inline-block"><img class="seaarch-img" src="{{asset($foodItem->cover_image_url)}}" alt="search-img1">
                    </li>
                    <li class="d-inline-block">
                        <h5>{{$foodItem->name}}</h5>
                    </li>
                </ul>
                @empty
                @endforelse


            </div>
            <div class="search-users">
                @forelse($users as $user)
                    @if($loop->first)
                <h6 class="grey-text">Users</h6>
                    @endif

                <ul class="list-unstyled mb-3">
                    <li class="d-inline-block"><img class="seaarch-list" src="{{asset($user->avatar_url)}}" alt="search-img1">
                    </li>
                    <li class="d-inline-block">
                        <h5>{{$user->name}}</h5>
                    </li>
                </ul>
                @empty
                @endforelse

            </div>
        </div>
    </form>
</div>
