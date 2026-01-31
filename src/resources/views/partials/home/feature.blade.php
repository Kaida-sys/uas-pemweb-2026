@php
    $features = \App\Models\Feature::where('is_active', true)->get();
@endphp

<section id="feature" class="feature-section feature-style-5">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-60">
                    <h3 class="mb-15">Keunggulan Kami</h3>
                    <p>Mengapa layanan kami tepat untuk kebutuhan bisnis Anda</p>
                     <ul>
                        <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Berbasis kebutuhan UMKM
                        </li>
                    <ul>
                        <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Harga transparan & terjangkau
                        </li>
                        <ul>
                        <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Pengembangan sistem terstruktur
                        </li>
                        <ul>
                        <li class="wow fadeInUp" data-wow-delay=".35s">
                            <i class="lni lni-checkmark-circle"></i>
                            Pengembangan sistem terstruktur
                        </li>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($features as $feature)
                <div class="col-lg-4 col-md-6">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="{{ $feature->icon ?? 'lni lni-star' }}"></i>
                        </div>
                        <div class="content">
                            <h5>{{ $feature->title }}</h5>
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
