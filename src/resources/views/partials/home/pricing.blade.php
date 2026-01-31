@php
    $services = \App\Models\Service::where('is_active', true)->get();
@endphp

<section id="pricing" class="pricing-section pricing-style-4 bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-60">
                    <h3>Layanan Kami</h3>
                    <p>Pilih layanan sesuai kebutuhan Anda</p>
                </div>
                <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Website Company Profile
                        </li>
                <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Sistem Informasi
                        </li>
                <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Aplikasi Berbasis Web
                        </li>
                <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Konsultasi IT
                        </li>
            </div>
        </div>

        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing">
                        <h4>{{ $service->name }}</h4>
                        <p>{{ $service->description }}</p>

                        @if($service->price)
                            <h3>Rp {{ number_format($service->price,0,',','.') }}</h3>
                        @endif

                        <a href="#contact"
                           class="button radius-30"
                           onclick="document.getElementById('serviceSelect').value='{{ $service->name }}'">
                            Ajukan Layanan
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
