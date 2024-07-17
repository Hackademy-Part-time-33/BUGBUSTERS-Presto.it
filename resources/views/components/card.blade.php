<div class="col-lg-4 col-md-6 col-12">

    <div class="row">
        <div class="el-wrapper single-grid wow fadeInUp" data-wow-delay=".2s">
            <div class="box-up">
                <a href="{{ route('articles.show', compact('article')) }}" class="thumbnail"> <img class="img"
                        src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200' }}"
                        alt=""></a>
                <div class="img-info">
                    <div class="info-inner">
                        <span class="p-name">{{ $article->title }}</span>
                        <span class="p-company">{{ __('ui.Pubblicato da:') }} {{ $article->user->name }}</span>
                    </div>
                    <div class="a-size">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}
                        <div class="info-list"><i class="lni lni-map-marker"></i>
                            {{ $article->country }}
                        </div>

                    </div>

                </div>
            </div>

            <div class="box-down">
                <div class="h-bg">
                    <div class="h-bg-inner"></div>
                </div>

                <a class="cart" href="{{ route('articles.show', compact('article')) }}">
                    <span class="price">{{ $article->price }}€</span>
                    <span class="add-to-cart">
                        <span class="txt">Visualizza
                            articolo</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <!-- Start Single Grid -->
    {{-- <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
        <div class="image">
            <a href="{{ route('articles.show', compact('article')) }}" class="thumbnail"><img
                    src="{{ asset('/assets/images/placeholder/scarpe-600x400.jpg') }}" alt="#"></a>
            <div class="author"> --}}
    {{-- <div class="author-image">
                    <a href="javascript:void(0)"><img src="https://via.placeholder.com/100x100" alt="#">
                        <span>Smith jeko</span></a>
                </div>  --}}
    {{-- <p class="sale">In vendita</p>
            </div>
        </div>
        <div class="content">
            <div class="top-content"> --}}
    {{-- <a href="javascript:void(0)" class="tag">Telefoni</a> --}}
    {{-- <p>{{ $article->category->name }}</p>
                <h3 class="title">{{ $article->title }}</h3>
                <p class="update-time">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p>
                <p class="user-name">Pubblicato da: {{ $article->user->name }}</p>
                <ul class="info-list">
                    <li><a href=""><i class="lni lni-map-marker"></i> {{ $article->city }}</a></li> --}}
    {{-- <li><a href="javascript:void(0)"><i class="lni lni-timer"></i> Feb 18,
                            2023</a></li> --}}
    {{-- </ul>
            </div>
            <div class="bottom-content">
                <p class="price">Prezzo: <span>{{ $article->price }}€</span></p>
            </div>
        </div>
    </div> --}}


    <!-- End Single Grid -->
</div>







{{-- <div class="col-lg-4 col-md-6 col-12">

    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
        <div class="image">
            <a href="{{ route('articles.show', compact('article')) }}" class="thumbnail"><img
                    src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(600, 600) : 'https://picsum.photos/600' }}"
                    alt="#"></a>
            <div class="author">
                
                <p class="sale">{{ __('ui.In vendita') }}</p>
            </div>
        </div>
        <div class="content">
            <div class="top-content">
                
                <p>{{ trans_choice('ui.' . $article->category->name, 1) }}</p>
                <h3 class="title">{{ $article->title }}</h3>
                <p class="update-time">{{ $article->created_at->locale('it_IT')->isoFormat('DD MMM YYYY') }}</p>
                <p class="user-name">{{ __('ui.Pubblicato da:') }} {{ $article->user->name }}</p>
                <ul class="info-list">
                    <li><a href=""><i class="lni lni-map-marker"></i> {{ $article->city }}</a></li>
                    
                </ul>
            </div>
            <div class="bottom-content">
                <p class="price">{{ __('ui.Prezzo:') }} <span>{{ $article->price }}€</span></p>
            </div>
        </div>
    </div>
   
</div> --}}
