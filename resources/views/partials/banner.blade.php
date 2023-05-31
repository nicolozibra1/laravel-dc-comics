<div id="banner">
    <div class="container h-100">
        <ul class="list-unstyled debug">
            @foreach(config('dblinks')[0]['banner_promo'] as $banner)
            <li>
                <a href="#" class="d-flex justify-content-center align-items-center debug">
                    <div class="box-logo debug">
                        <img src="{{ $banner['image'] }}" alt="{{ $banner['title'] }}" class="">
                    </div>
                    <span class="ps-4">{{ $banner['title'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
