@extends('layouts/app')

@section('content')
    <!--breadcrumb Start-->
    <section class="bread_cum bg2 overlay80">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>About us</h1>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb End-->
    <!--About poseidon Start -->
    <section class="common_section about3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="sectionTitle">
                        <h2>About Comfy Studio</h2>
                        <span class="secbar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                    <div class="singleAbout3">
                        <i class="icon-Bulb"></i>
                        <h2>Discovery</h2>
                        <P>We start by deepening our understanding through collaborative research.</P>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                    <div class="singleAbout3">
                        <i class="icon-Layers"></i>
                        <h2>Development</h2>
                        <P>We build high-quality websites engineered to be easy to update and to evolve with your success.</P>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                    <div class="singleAbout3">
                        <i class="icon-WorldGlobe"></i>
                        <h2>Hosting</h2>
                        <P>We can host your newly created website and take care of domain name registration and renewal.</P>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="mockup3">
                        <img src="images/home3/mockup.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About poseidon End -->
    <!--Our choice start-->
    <section class="choiceElement graybg">
        <div class="hlafimg">
            <img src="images/home1/about-1.png" alt="" />
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pull-right">
                    <div class="row chochWrap">
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                            <div class="singleChoice">
                                <i class="icon-Ringer"></i>
                                <h5>Discovery</h5>
                                <p>Through advanced and thoughtful business and system reviews, our technical
                                   requirements gathering provides our clients with expert insight.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                            <div class="singleChoice">
                                <i class="icon-Settings"></i>
                                <h5>Responsive Web Development</h5>
                                <p>At Comfy Studios, we love solving problems. Using advanced programming
                                   languages, we build powerful web applications that can automate workflow and help
                                   increase efficiency and performance.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                            <div class="singleChoice">
                                <i class="icon-Layers"></i>
                                <h5>Content Management Systems</h5>
                                <p>Comfy Studios offer both custom-developed and integrated-enterprise
                                   content management. We know that each organisation has different needs for
                                   maintaining their site’s content.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="450">
                            <div class="singleChoice">
                                <i class="icon-Heart"></i>
                                <h5>SaaS</h5>
                                <p>Among our core strengths is the ability to design and
                                   develop data-driven business management applications customised to each client&#39;s
                                   unique business needs.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="500">
                            <div class="singleChoice">
                                <i class="icon-Folder"></i>
                                <h5>Search Engine Optimization</h5>
                                <p>There are a multitude of SEO factors, many of which are
                                   being created everyday; that is why Comfy Studios keeps current on the latest trends
                                   and tactics in the SEO community.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="550">
                            <div class="singleChoice">
                                <i class="icon-Phone"></i>
                                <h5>Website Hosting</h5>
                                <p>Our consistent, full-powered Web hosting assures that your site is up and running and fully functional.  We offer hosting
                                   packages that range from small to super-size, to feed any appetite and provide you
                                   with a perfect fit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our choice End-->
    <!--Our Team Start-->
    <section class="common_section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="sectionTitle">
                        <h2>Meet our team</h2>
                        <span class="secbar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300">
                    <div class="singleTeam">
                        <div class="teamThumb">
                            <img alt="image" src="images/home1/team/william.png">
                            <div class="teamHover">
                                <div class="teamHoverCon">
                                    <h4>William Byrne</h4>
                                    <p>Technical Partner</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamFooter">
                            <div class="teamDeg">
                                <h4>William Byrne</h4>
                                <p>Technical Partner</p>
                            </div>
                            <div class="teamSocial">
                                {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-google-plus"></i></a>--}}
                                {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                                <a href="mailto:william@comfystudio.com">william@comfystudio.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="350">
                    <div class="singleTeam">
                        <div class="teamThumb">
                            <img alt="image" src="images/home1/team/orla.png">
                            <div class="teamHover">
                                <div class="teamHoverCon">
                                    <h4>Orla Byrne</h4>
                                    <p>Business Partner</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamFooter">
                            <div class="teamDeg">
                                <h4>Orla Byrne</h4>
                                <p>Business Partner</p>
                            </div>
                            <div class="teamSocial">
                                <a href="mailto:orla@comfystudio.com">orla@comfystudio.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 text-center wow fadeInUp" data-wow-duration="700ms" data-wow-delay="400">
                    <div class="singleTeam">
                        <div class="teamThumb">
                            <img alt="image" src="images/home1/team/lilly.png">
                            <div class="teamHover">
                                <div class="teamHoverCon">
                                    <h4>Lilly</h4>
                                    <p>Office Cat</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamFooter">
                            <div class="teamDeg">
                                <h4>Lilly</h4>
                                <p>Office Cat</p>
                            </div>
                            <div class="teamSocial">
                                <a href="mailto:lilly@comfystudio.com">lilly@comfystudio.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our Team End-->
    <!--our trusted client start-->
    <section class="trustedClient common_section graybg">
        <div class="hlafimg right">
            <img src="{{$works[0]->workImages[0]->image}}" alt="{{$works[0]->title}}">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xs-12 text-center pull-left trustedClienttit">
                    <div class="sectionTitle">
                        <h2>Our Work</h2>
                        <span class="secbar underPera"></span>
                        <p>
                            Check out some of our latest works!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 text-center pull-left">
                    <div class="client3wrap">
                        <?php $count = 0;?>
                        @foreach($works as $work)
                            <?php
                                switch ($count) {
                                    case 1:
                                        $class = "borderBottom borderRight";
                                        break;
                                    case 2:
                                        $class = "borderBottom";
                                        break;
                                    case 3:
                                        $class = "borderRight";
                                        break;
                                    case 4:
                                        $class = "borderRight";
                                        break;
                                    case 5:
                                        $class = "";
                                        break;
                                    default:
                                        $class = "borderBottom borderRight";
                                }
                            ?>
                            <div class="col-sm-4 col-xs-6 noPadding">
                                <div class="singleCli3 {{$class}}">
                                    <a href="/works/{{$work->slug}}">
                                        <img src="/{{$work->workImages[0]->image}}" alt="{{$work->title}}">
                                    </a>
                                </div>
                            </div>
                            <?php $count++;?>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our trusted client End-->
    <!--latest Update Start-->
    <section class="common_section updateBlog">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center pull-left">
                    <div class="sectionTitle">
                        <h2>latest Updates</h2>
                        <span class="secbar"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $increment = 300;?>
                @foreach($news as $new)
                    <div class="col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="700ms" data-wow-delay="{{$increment}}">
                        <div class="singlelatestup3">
                            <div class="singUpImg">
                                <img src="@if(isset($new->newsImages[0])){{$new->newsImages[0]['image']}}@endif" alt="@if(isset($new->newsImages[0])){{$new->newsImages[0]['title']}}@endif">
                            </div>
                            <h2 class="updateTitle">
                                <a href="/news/{{$new->slug}}">{{$new->title}}</a>
                            </h2>
                            <div class="updateMeta">
                                <a href="#">{{  date('F d, Y', strtotime($new->publish_date))}}</a>
                            </div>
                            <p>
                                {{substr(strip_tags($new->text), 0, 100)}}...
                            </p>
                            <a href="/news/{{$new->slug}}" class="updateread">Read More <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                    <?php $increment = $increment + 50;?>
                @endforeach
            </div>
        </div>
    </section>
    <!--latest Update End-->
@stop
