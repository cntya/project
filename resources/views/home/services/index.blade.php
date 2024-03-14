<div class="row">
    <div class="col-lg-5" style="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="">
            <div class="carousel-inner">
                @foreach ($services->chunk(2) as $items)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="d-flex justify-content-center">
                            @foreach ($items as $info)
                                <div class="card mb-3 mr-3" style="width: 18rem;">
                                    <div class="mt-2" style="display: flex; justify-content: center; align-items: center; height: 200px;">
                                        <img src="{{ asset('pos_services/' . $info->icon) }}" id="preview" class="rounded" alt="Cinque Terre" style="max-width: 100%; max-height: 100%;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $info->title }}</h5>
                                        <p class="card-text">{!! strip_tags($info->desc) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
