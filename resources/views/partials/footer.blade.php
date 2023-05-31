<footer class="d-flex flex-column justify-content-between">
    <div class="f-top h-100">
        <div class="container">
            <div class="row">
                <div class="col-6 debug py-5" id="col-links">
                    {{-- @foreach ($footer_links as $link )
                        <ul class="list-unstyled d-flex flex-column flex-wrap">
                            <li class="text-uppercase fw-bold fs-5 mb-2" id="link-title">
                                {{ $link['title'] }}
                            </li>
                            <li class="d-flex flex-column flex-wrap" key="i">
                                @foreach ($link['links'] as $link )
                                    <a href="#">{{ $link['text'] }}</a>
                                @endforeach
                            </li>
                        </ul>
                    @endforeach --}}
                </div>
                <div class="col-6 debug" id="col-logo">
                    <div class="box-logo">
                        <img src="/img/dc-logo-bg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="f-bottom">
        <div class="container h-100 d-flex justify-content-between align-items-center">
            <div class="sign-up">
                <button>
                    sign-up now!
                </button>
            </div>
            <div class="social-links h-100 d-flex align-items-center gap-3 debug">
                <span>follow us</span>
                @foreach (config('dblinks')[0]['social_links'] as $link)
                <ul class="list-unstyled debug">
                    <li class="pt-3">
                        <a href="#">
                            <img src="{{$link['image']}}" alt="">
                        </a>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>
</footer>
