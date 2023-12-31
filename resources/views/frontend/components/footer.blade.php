<!--=================================
Footer -->
<footer class="iq-footer-3 radius-top responsive_pad">
    <div class="footer-top overview-block-pt iq-pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="logo">
                        <img id="logo_img_2" class="img-fluid" src="images/logo_verti.svg" alt="# ">
                        <ul class="iq-media-blog iq-mt-20">
                            <li><a href="https://twitter.com/TokenSayari" target="_blank"><i
                                        class="fa fa-twitter "></i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100090091656693" target="_blank"><i
                                        class="fa fa-facebook "></i></a></li>
                            <!-- <li><a href="https://m.youtube.com/watch?v=MB73HjuhUtQ&fbclid=PAAaYv4TYulyBBfby2Vwe6J8d0PqgG0e1HY9v2jf2OabXBsdmMw3cYRxWUEl8https://www.tiktok.com/@planetsayari" target="_blank"><i class="fa fa-youtube"></i></a></li> -->
                            <li><a href="https://www.instagram.com/planet_sayari/" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://t.me/+katj3AYArktjMThi" target="_blank"><i
                                        class="fa fa-telegram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 iq-r-mt-40">
                    <div class="footer-menu">
                        <div class="heading-left">
                            <h5 class="title">Important</h5>
                        </div>
                        <ul class="iq-pl-0">
                            <li><a href="{{ asset('mission') }}">Mission</a></li>
                            <li><a href="{{ asset('strategy') }}">Strategy</a></li>
                            <li><a href="{{ asset('sayari-app') }}">Sayari App</a></li>
                            <li><a href="{{ asset('letter-of-credit') }}">Letter of Credit</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 iq-r-mt-40">
                    <div class="footer-menu">
                        <div class="heading-left">
                            <h5 class="title">Portfolio</h5>
                        </div>
                        <ul class="iq-pl-0">
                            <li><a href="{{ asset('funds-assets') }}">Funds & Assets</a></li>
                            <li><a href="{{ asset('programs') }}">Programs</a></li>
                            <li><a href="{{ asset('instrument') }}">Instruments</a></li>
                            <li><a href="{{ asset('projects') }}">Projects</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 iq-r-mt-40">
                    <div class="footer-menu">
                        <div class="heading-left">
                            <h5 class="title">Others</h5>
                        </div>
                        <ul class="iq-pl-0">
                            <li><a href="#" target="_blank">Privacy Policy</a></li>
                            <li><a href="{{ URL::asset('frontend_files/letter-of-credit.pdf') }}"target="_blank">Download
                                    LC Form</a></li>
                            <li><a href="{{ URL::asset('frontend_files/Sayari-Lite-Paper.pdf') }}" target="_blank">Lite
                                    Paper</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom iq-ptb-20 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="iq-copyright iq-mt-10">© 2023 Planet Sayari. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
Footer -->
<!--=================================
Login -->
<div class="modal fade iq-login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title ">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif
                <form action="{{ route('dashboard') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="username" id="recipient-name"
                            placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="recipient-password"
                            placeholder="Password">
                    </div>
                    {{-- <button class="button iq-mtb-10">
                        <span class="button-inner-box">
                            <span class="icon-one icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                                    </path>
                                </svg></span>
                            <span class="text-btn">Sign In</span>
                            <span class="icon-two icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z">
                                    </path>
                                </svg></span>
                        </span>
                    </button> --}}
                    <button type="submit" class="button button-icon bt-lg iq-mr-15 my-2">Sign In</button>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end">
                            <a href="javascript:void(0)" class="iq-font-yellow">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Don't Have an Account? <a data-bs-toggle="modal" data-bs-target=".iq-register"
                        data-bs-whatever="@fat" data-bs-dismiss="modal" aria-label="Close" class="iq-font-yellow"
                        style="cursor: pointer">Register Now</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--=========Login=========-->
<!--=========Register=========-->
<div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true" id="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="username" id="recipient-username"
                            placeholder="User Name" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="recipient-email" placeholder="Email"
                            name="email" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="user_type" required>
                            <option value="">Register As</option>
                            <option value="0">Broker</option>
                            <option value="1">Investor</option>
                        </select>
                        @error('user_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="cpassword" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" required>I Agree to the Terms and
                            Conditions</label>
                    </div>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    {{-- <a class="button iq-mtb-10" href="javascript:void(0)">Sign Up</a> --}}
                    <button type="submit" class="button button-icon bt-lg iq-mr-15 mb-2">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Already Have an Account? <a class="iq-font-yellow" data-bs-toggle="modal"
                        data-bs-dismiss="modal" aria-label="Close" data-bs-target=".iq-login"
                        data-bs-whatever="@mdo" style="cursor: pointer">Login</a></div>
                {{-- <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!--=================================
Register -->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-arrow-up-c"></i> </a>
</div>
<!-- back-to-top End -->

<!-- jquery-min JavaScript -->
<script src="js/jquery-min.js"></script>
<!-- popper JavaScript -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Bitcoin widget JavaScript -->
<!-- <script src="js/widget.js"></script> -->
<!-- owl carousel JavaScript -->
<script src="js/owl.carousel.min.js"></script>
<!-- All-plugins JavaScript -->
<script src="js/all-plugins.js"></script>
<!-- particles JavaScript -->
<script src="js/particles.js"></script>
<!-- Style Customizer -->
<script src="js/style-customizer.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="revslider/js/jquery.themepunch.tools.min.js"></script>
<script src="revslider/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revslider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revslider/js/extensions/revolution.extension.video.min.js"></script>
<!-- Custom JavaScript -->
<script src="js/custom.js"></script>
<script>
    var revapi4,
        tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_4_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        } else {
            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    arrows: {
                        style: "zeus",
                        enable: true,
                        hide_onmobile: false,
                        hide_onleave: false,
                        tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1170,
                gridheight: 790,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*ready*/
</script>
</body>

</html>
