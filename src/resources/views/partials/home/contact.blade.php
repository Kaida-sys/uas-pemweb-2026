<section id="contact" class="contact-section contact-style-3">
    <div class="container">

        <!-- TITLE -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-50">
                    <h3 class="mb-15">Ajukan Permintaan Layanan</h3>
                    <p>
                        Silakan isi formulir berikut untuk mengajukan kebutuhan layanan digital Anda.
                        Tim kami akan segera menghubungi Anda.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- FORM -->
            <div class="col-lg-8">
                <div class="contact-form-wrapper">
                    <form action="{{ route('service-request.store') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="name" class="form-input" placeholder="Nama Lengkap" required>
                                    <i class="lni lni-user"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" name="email" class="form-input" placeholder="Email" required>
                                    <i class="lni lni-envelope"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="phone" class="form-input" placeholder="No. HP / WhatsApp" required>
                                    <i class="lni lni-phone"></i>
                                </div>
                            </div>

                            <!-- SELECT SERVICE -->
                            <div class="col-md-6">
                                <div class="single-input">
                                    <select name="service" id="serviceSelect" class="form-input" required>
                                        <option value="">Pilih Layanan</option>
                                        <option value="Website Company Profile">Website Company Profile</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Aplikasi Web">Aplikasi Web</option>
                                        <option value="Konsultasi IT">Konsultasi IT</option>
                                    </select>
                                </div>
                            </div>

                            <!-- MESSAGE (DIRAPIKAN) -->
                            <div class="col-md-12">
                                <div class="single-input">
                                    <textarea
                                        name="message"
                                        class="form-input"
                                        placeholder="Jelaskan kebutuhan Anda"
                                        rows="4"
                                        required></textarea>
                                    <i class="lni lni-comments-alt"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-button">
                                    <button type="submit" class="button">
                                        <i class="lni lni-telegram-original"></i>
                                        Kirim Permintaan
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <!-- CONTACT INFO -->
            <div class="col-lg-4">
                <div class="left-wrapper">
                    <div class="single-item">
                        <div class="icon"><i class="lni lni-phone"></i></div>
                        <div class="text">
                            <p>081234567890</p>
                        </div>
                    </div>

                    <div class="single-item">
                        <div class="icon"><i class="lni lni-envelope"></i></div>
                        <div class="text">
                            <p>info@digitalservice.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
