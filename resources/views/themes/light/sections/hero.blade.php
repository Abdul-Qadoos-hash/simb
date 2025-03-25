@php
    $announces = \App\Models\CoinAnnounce::where('status',1)->get();
@endphp
    <!-- Hero section start -->
<div class="hero-section pt-253 pb-150">
    <div class="hero-section-inner">
        <div class="container">
            <div class="row g-4 g-sm-5 justify-content-between align-items-end">
                @if(isset($hero['single']))
                    <div class="col-xxl-6 col-lg-6">
                        <div class="hero-content">

                            <h1 class="hero-title">From Code To Cosmos</h1>
                            <p class="hero-description">Unite under one coin - SIMB ONE</p>
                            <div class="cover-container" onclick="this.nextElementSibling.style.display='block'; this.style.display='none'">
                                <img src="{{$themeTrue.'img/videothumb.png'}}" alt="" class="play-button">
                        </div>
                                <div style="display:none">
  <iframe width="560" height="315" src="https://www.youtube.com/embed/4smhzjT3d1w?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen autoplay loading="lazy">
  </iframe>
</div>


                        </div>
                    </div>
                @endif

                <div class="col-xxl-5 col-lg-6 text-center">
                    <!-- <img class="pb-20" src="{{$themeTrue.'img/background/maincoin.png'}}"> -->
                     <div class="calculator-section">
                        <form class="calculator" action="{{route('exchangeRequest')}}" method="POST"
                              id="submitFormId">
                            @csrf
                            <div class="autoplay" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                @if(count($announces)>0)
                                    @foreach($announces as $announce)
                                        <div class="calculator-banner announceClass"
                                             data-heading="{{$announce->heading}}"
                                             data-des="{!! $announce->description !!}">
                                            <div class="calculator-banner-wrapper">
                                                <div class="left-side">
                                                    <div class="image-area">
                                                        <img src="{{getFile($announce->driver,$announce->image)}}"
                                                             alt="...">
                                                    </div>
                                                    <div class="text-area">
                                                        <p class="fw-bold mb-0">@lang(\Illuminate\Support\Str::limit($announce->heading,55))</p>
                                                    </div>
                                                </div>
                                                <div class="right-side">
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="calculator-body">
                                <div class="cmn-tabs">
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <!--<li class="nav-item" role="presentation">-->
                                        <!--    <button class="nav-link active" id="pills-exchange-tab"-->
                                        <!--            data-bs-toggle="pill" data-bs-target="#pills-exchange" type="button"-->
                                        <!--            role="tab" aria-controls="pills-exchange"-->
                                        <!--            aria-selected="true">@lang("Exchange")-->
                                        <!--    </button>-->
                                        <!--</li>-->
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-Buy-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-exchange" type="button" role="tab"
                                                    aria-controls="pills-exchange" aria-selected="false">@lang("Buy")
                                            </button>
                                        </li>
                                        <!--<li class="nav-item" role="presentation">-->
                                        <!--    <button class="nav-link" id="pills-Sell-tab" data-bs-toggle="pill"-->
                                        <!--            data-bs-target="#pills-exchange" type="button" role="tab"-->
                                        <!--            aria-controls="pills-exchange" aria-selected="false">@lang("Sell")-->
                                        <!--    </button>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                                <div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-exchange" role="tabpanel"
                                             aria-labelledby="pills-exchange-tab" tabindex="0">
                                            @include($theme.'partials.exchange-module.exchange')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
                    <div class="btn-area text-center">
                                <a href="{{@$hero['single']['media']->my_link}}"
                                   class="cmn-btn">Add to Wallet</a>
                                <a href="{{@$hero['single']['media']->video_link}}" class="cmn-btn2 text-with-icon">Buy SIMB
                                </a>
                            </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="shape shape1">
        <img src="{{$themeTrue.'img/coin/coin-2.png'}}" alt="...">
    </div> -->
</div>
@include($theme.'partials.modal')


