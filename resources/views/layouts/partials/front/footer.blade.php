<footer class="bg-img cover-background" data-overlay-dark="85" data-background="img/bg/bg-3.jpg">
    <div class="container">
        <div class="row mt-n2-9">
            <div class="col-lg-3 col-md-6 mt-2-9 wow fadeIn" data-wow-delay="200ms">
                <div class="mb-1-6 w-80 w-md-60 w-lg-80">
                    <img src="{{ asset('image/TAHOfordarkbckgrnd.png') }}" alt="...">
                </div>
                <p class="text-white opacity9 font-weight-300 mb-1-9"> "It's not how much we give but how much love we
                    put into giving - Mother Teresa". </p>
                <ul class="social-icon-style2">
                    <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/taho_tanzania/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://wa.me/255767291030"><i class="fab fa-whatsapp"></i></a></li>

                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mt-2-9 wow fadeIn" data-wow-delay="400ms">
                <div class="ps-lg-1-9 ps-xl-8">
                    <h3 class="text-secondary h5 mb-1-9">Quick Links</h3>
                    <ul class="footer-list ps-0">
                        <li class="pb-0"><a href="{{ url('/about') }}">About Us</a></li>
                        <li class="pb-0"><a href="{{ url('/categories') }}">Categories</a></li>
                        <li class="pb-0"><a href="{{ url('/volunteer') }}">Volunteer</a></li>
                        <li class="pb-0"><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li class="pb-0">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('admin/index') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                        in</a>


                                @endauth
                            @endif
                        </li>
                        <li class="pb-0"><a href="{{ url('/blog') }}">Blog</a></li>
                        <li class="pb-0"><a href="{{ url('/contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-2-9 wow fadeIn" data-wow-delay="600ms">
                <div>
                    <h3 class="text-secondary h5 mb-1-9">Contact Us</h3>
                    <ul class="footer-list ps-0">
                        <li class="pt-0">
                            <span class="d-inline-block align-middle"><i
                                    class="fas fa-map-marker-alt display-29"></i></span>
                            <span class="d-inline-block w-85 align-top ps-2">Bukoba Municipal, Kagera.</span>
                        </li>
                        <li>
                            <span class="d-inline-block align-middle"><i class="far fa-envelope display-29"></i></span>
                            <span class="d-inline-block w-85 align-top ps-2">info@tahotz.org</span>
                        </li>
                        <li>
                            <span class="d-inline-block align-middle"><i class="fas fa-globe display-29"></i></span>
                            <span class="d-inline-block w-85 align-top ps-2">www.tahotz.org</span>
                        </li>
                        <li class="pb-0">
                            <span class="d-inline-block align-middle"><i class="fas fa-phone display-29"></i></span>
                            <span class="d-inline-block w-85 align-top ps-2">(+255) 767 291 030</span>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 mt-2-9 wow fadeIn" data-wow-delay="800ms">
                <div class="ps-xl-1-6">
                    <form action="" method="post">
                        <div class="col-md-9">
                            <div class="quform-element">
                                <label for="email">Subscribe Here </label>
                                <div class="quform-input">
                                    <input class="form-control" id="email" type="text" name="email"
                                        placeholder="Your email here" />
                                </div>
                            </div>
                            <div class="quform-submit-inner">
                                <button class="butn" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="footer-bar borders-top border-color-light-white wow fadeIn" data-wow-delay="400ms">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; TAHO - The Awaited One Hand Organaization </p>
                </div>
            </div>
        </div>
    </div>
</footer>
