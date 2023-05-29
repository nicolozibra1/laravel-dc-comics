<header class="container d-flex justify-content-center align-items-center p-3 gap-5">
    <div class="container-logo debug">
        <div class="box-logo debug">
            <img src="/img/dc-logo.png" alt="dc logo" class="debug">
        </div>
    </div>
    <div class="v-menu" v-if="open">
        <ul class="ul list-unstyled mb-2">
            @foreach ($nav_links as $link )
                <li><a href="#" class="h-links">{{$link}}</a></li>
            @endforeach
        </ul>
    </div>
</header>

