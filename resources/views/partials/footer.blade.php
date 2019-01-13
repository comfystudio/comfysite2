<!--Footer Start-->
<footer class="footer3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                <div class="widget footer3info">
                    <div class="foot3logo">
                        <a href="#"><img src="/images/black-logo-bigger2.png" alt=""></a>
                    </div>
                    <p>
                        If you’ve got a big idea, we’d love to hear about it.
                        We work best with clients who share our passion for innovative solutions.
                        Let’s build something great together.
                    </p>
                    <div class="footer3adds">
                        <div class="singAdds3">
                            <i class="line-map"></i>
                            <h6>Stalk :</h6>
                            <p>{{ADDRESS}}</p>
                        </div>
                        <div class="singAdds3">
                            <i class="line-megaphone"></i>
                            <h6>Talk :</h6>
                            <p>{{NUMBER}}</p>
                        </div>
                        <div class="singAdds3 last">
                            <i class="line-envelope"></i>
                            <h6>Hawk :</h6>
                            <a href="mailto:{{EMAIL}}">{{EMAIL}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                <div class="widget contact3">
                    <h2>Contact Us</h2>
                    <p>feel free to contact us</p>
                    @include('partials.admin.error-form')

                    @include('partials.admin.success-form')
                    <a name = "query-form"></a>
                    <form action="/queries/create#query-form" method="POST" class="contactform3">
                        {{--{{ csrf_field() }}--}}
                        <input type="text" placeholder="Name" id="con_name" class="required @if(isset($errors) && $errors->has('name')) reqError @endif" name="name" value="@if(old('name')){{old('name')}} @elseif(isset($works->title)){{$works->title}}@endif">
                        <input type="email" placeholder="Email" id="con_email" class="required @if(isset($errors) && $errors->has('email')) reqError @endif" name="email" value="@if(old('email')){{old('email')}} @elseif(isset($works->title)){{$works->title}}@endif">
                        <input type="text" placeholder="Subject" id="con_sub" class="required @if(isset($errors) && $errors->has('subject')) reqError @endif" name="subject" value="@if(old('subject')){{old('subject')}} @elseif(isset($works->title)){{$works->title}}@endif">
                        <textarea placeholder="Message" id="con_message" class="required @if(isset($errors) && $errors->has('message')) reqError @endif" name="message">@if(old('message')){{old('message')}} @elseif(isset($works->title)){{$works->title}}@endif</textarea>
                        <button class="poseidon_btn radius" id="con_submit"><b>Send message</b><span></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->
<!--copy right start-->
<section class="copyRightsec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8 wow zoomIn" data-wow-duration="700ms" data-wow-delay="300">
                <div class="footnav">
                    <ul>
                        <li><a href="/">home</a></li>
                        {{--<li><a href="#">services </a></li>--}}
                        {{--<li><a href="#">terms & condition</a></li>--}}
                        {{--<li><a href="#">privacy policy</a></li>--}}
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/works">Work</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/contact">contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-sm-4 text-right wow zoomIn" data-wow-duration="700ms" data-wow-delay="350">
                <p class="copypera">&copy; <?php echo Date('Y');?> All Rights Reserved</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<a href="#" id="backToTop"><i class="fa fa-angle-up"></i></a>
<!--copy right End-->