<div id="banner">
    <div class="container h-100">
        <ul class="list-unstyled debug">
            @foreach ($banner_promo as $item )
            <li>
                <a href="#" class="d-flex justify-content-center align-items-center debug">
                    <div class="box-logo debug">
                        <img src="{{$item['image']}}" alt="logo" class="">
                    </div>
                    <span class="ps-4">{{ $item['title'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
