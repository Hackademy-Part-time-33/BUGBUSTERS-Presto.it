<!-- Start Post Ad Block Area -->

<div class="dashboard-block mt-0">
    <h3 class="block-title">{{ __('ui.Inserisci un nuovo articolo')}}</h3>
    <div class="inner-block">
        <!-- Start Post Ad Tab -->
        <div class="post-ad-tab">        
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-item-info" role="tabpanel" aria-labelledby="nav-item-info-tab">
                    <!-- Start Post Ad Step One Content -->
                    <div class="step-one-content">
                        <form class="default-form-style" wire:submit.prevent='store'>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ __('ui.Titolo')}}*</label>
                                        <input wire:model='title' type="text" class="form-control" placeholder="{{ __('ui.Inserisci un titolo')}}">
                                        @error('title')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ __('ui.Categoria')}}*</label>
                                        <div class="selector-head">
                                            <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                            <select class="user-chosen-select form-control" wire:model='category'>
                                                <option value="">{{ __('ui.Seleziona una categoria')}}</option>
                                                @forelse ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @empty
                                                    <option value="none">{{ __('ui.Nessuna categoria disponibile')}}</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        @error('category')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="form-group">
                                        <label>{{ __('ui.Condizioni')}}*</label>
                                        <div class="selector-head">
                                            <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                            <select class="user-chosen-select form-control" wire:model='condition'>
                                                <option value="">{{ __('ui.Seleziona una opzione')}}</option>
                                                <option value="Usato">{{ __('ui.Usato')}}</option>
                                                <option value="Nuovo">{{ __('ui.Nuovo')}}</option>
                                            </select>
                                        </div>
                                        @error('condition')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>{{ __('ui.Prezzo')}}*</label>
                                        <input wire:model='price' type="number" class="form-control" placeholder="0">
                                        @error('price')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>{{ __('ui.Nazione')}}*</label>
                                        <div class="selector-head">
                                            <span class="arrow"><i class="lni lni-chevron-down"></i></span>
                                            <select class="user-chosen-select form-control" wire:model='country'>
                                                <option value="">{{ __('ui.Seleziona una nazione')}}</option>
                                                @forelse ($nations as $nation)
                                                    <option value="{{ $nation['name']['common'] }}">{{ $nation['flag'] }} {{ $nation['name']['common'] }}</option>
                                                @empty
                                                    <option value="none">{{ __('ui.Nessuna categoria disponibile')}}</option>
                                                @endforelse
                                            </select>
                                        </div>
                                        @error('country')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{ __('ui.Annuncio')}}*</label>
                                        <textarea wire:model='body' rows="4" class="form-control" placeholder="{{ __('ui.Scrivi il tuo annuncio...')}}"></textarea>
                                        @error('body')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="fw-bold text-black">Inserisci immagini</label>
                                    <input type="file" wire:model.live="temporary_images" multiple class="form-control mt-3  @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
                                    @error('temporary_images.*')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                    @enderror
                                    @error('temporary_images')
                                            <div class="alert alert-danger mt-2"> {{ $message }} </div>
                                        @enderror
                                </div>
                               @if(!empty($images)) 
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <p>{{ __('ui.Anteprima immagini:')}}</p>
                                            <div class="row">
                                                @foreach ($images as $key => $image )
                                                    <div class="col d-flex  py-5 flexcolumn align-item-center my-3">
                                                        <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});">
                                                            <button type="button" class="btn btn-outline-danger p-0 px-2" wire:click="removeImage({{$key}})">X</button>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <div class="form-group button mb-0">
                                        <button type="submit" class="btn btn-primary mt-3">{{ __('ui.Inserisci annuncio')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Post Ad Step One Content -->
                </div>
            </div>
        </div>
        <!-- End Post Ad Tab -->
    </div>
</div>
