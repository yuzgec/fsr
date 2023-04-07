<footer class="bixol-footer pt-100 pb-50" data-background="/arka1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <img src="/logo_white.png" alt="">

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>Hakkımızda</h4>
                    <p>Fsr Grup şirketi olarak Kalite Politikamız Umhitte, işletmelerin ekonomik gücünün,
                        rekabet gücü ile doğru orantılı olduğunu kabul eder. Bu nedenle iç ve dış pazar taleplerini,
                        zamanında algılar. Yüksek kaliteli ürünleri, en düşük maliyetle oluşturacak teknolojileri kullanır.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>İletişim Bilgileri</h4>
                    <div class="bixol-footer-address">
                        <ul>
                            <li><i class="fas fa-map-marker-alt text-white"></i>{{ config('settings.adres1') }}</li>
                            <li><i class="fas fa-phone text-white"></i></i>{{ config('settings.telefon1') }}</li>
                            <li><i class="fas fa-envelope text-white"></i></i>{{ config('settings.email1') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="bixol-footer-widget">
                    <h4>Ürün Kategorileri</h4>
                    <div class="bixol-footer-address">
                        <ul>

                            @foreach($ProductCategory->where('parent_id', 0) as $row)
                                <li>
                                    <i class="fas fa-check text-white"></i> <a href="{{ route('categorydetail',$row->slug) }}" class="text-white">{{ $row->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

{{--<footer class="bixol-footer mt-100 mb-100" >


       --}}{{--     <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bixol-footer-widget">
                            <h4>We are <span>Bixol!</span></h4>
                            <p>We work with a passion of taking challenges and creating new ones in advertising sector.</p>
                            <div class="footer-office-time">
                                <h6>Open Hours:</h6>
                                <span>Mon - Sat: 8am - 5pm,</span>
                                <span>Sunday: CLOSED</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bixol-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Subscribe our newsletter to get our latest update & news</p>
                            <div class="bixol-footer-form">
                                <form action="#">
                                    <input type="email" placeholder="Your mail adress">
                                    <button type="submit"><i class="far fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <div class="bixol-footer-social">
                                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="dribbble"><i class="fab fa-dribbble"></i></a>
                                <a href="#" class="behance"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bixol-footer-widget">
                            <h4>Official info</h4>
                            <div class="bixol-footer-address">
                                <ul>
                                    <li><i class="fas fa-map-marker-alt"></i>30 Commercial Road <br>Fratton, Australia</li>
                                    <li><i class="fas fa-phone"></i>1-888-452-1505</li>
                                    <li><i class="fas fa-envelope"></i>envato@gmail.com<br>info@mail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="bixol-footer-widget">
                            <h4>Instagram</h4>
                            <div class="bixol-insta-widget">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-1.jpg" alt="">
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-2.jpg" alt="">
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-3.jpg" alt="">
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-4.jpg" alt="">
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-5.jpg" alt="">
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <img src="assets/images/home1/insta-6.jpg" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}{{--
            <div class="footer-copyright">
                <p>{{ date('Y') }} &copy; Tüm Hakları Saklıdır <a href="/">{{ config('app.name') }}</a></p>
            </div>
        </footer>--}}
