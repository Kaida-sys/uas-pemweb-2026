@php
    use App\Models\Hero;
    $hero = Hero::active()->first();
@endphp

<section id="home" class="hero-section-wrapper-5">

    <div class="hero-section hero-style-5 img-bg"
        style="background-image: url('{{ 
            $hero && $hero->image 
                ? asset('storage/' . $hero->image) 
                : asset('assets/img/hero/hero-5/hero-bg.svg') 
        }}')">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="hero-content-wrapper">
                        <h2 class="mb-30">
                            {{ $hero->title ?? 'Layanan Digital UMKM' }}
                        </h2>

                        <p class="mb-30">
                            {{ $hero->description ?? 'Solusi digital untuk bisnis Anda.' }}
                        </p>

                        <a href="{{ $hero->cta_link ?? '#contact' }}"
                           class="button button-lg radius-50">
                            {{ $hero->cta_text ?? 'Hubungi Kami' }}
                            <i class="lni lni-chevron-right"></i>
                        </a>

                        @if($hero && $hero->phone_number)
                            <p class="mt-3">
                                <i class="lni lni-phone"></i>
                                {{ $hero->phone_number }}
                            </p>
                        @endif
                    </div>
                </div>

                <div class="col-lg-6 align-self-end">
                    <div class="hero-image">
                        <img src="{{ asset('assets/img/hero/hero-5/hero-img.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
