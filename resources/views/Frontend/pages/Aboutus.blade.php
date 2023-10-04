@extends('Frontend.master')

@section('about us')
<!-- Start About Us Section -->
{{-- <section id="about-us" class="about-us-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p>Discover the Techburg Story</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="about-section welcome-section text-center" data-title="MISSION">
                    <!-- Mission content -->
                    <img src="images/about-01.jpg" class="img-responsive" alt="..">
                    <h4>MISSION</h4>
                    <div class="border"></div>
                        <p class="about-description">mission content</p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="about-section welcome-section text-center" data-title="VISION">
                    <!-- Vision content -->
                    <img src="images/about-02.jpg" class="img-responsive" alt="..">
                    <h4>VISION</h4>
                    <div class="border"></div>
                        <p>vision content</p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="about-section welcome-section text-center" data-title="CORE VALUES">
                    <!-- Core Values content -->
                    <img src="images/about-03.jpg" class="img-responsive" alt="..">
                    <h4>CORE VALUES</h4>
                    <div class="border"></div>

                        <p class="about-description">Core values content</p>

                    <button type="submit" class="btn btn-primary">View More</button>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container -->
</section> --}}
{{-- <section id="about-us" class="about-us-section-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                    <h3>About Us</h3>
                    <p>Discover the Techburg Story</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($aboutUsData as $about)
            <div class="col-md-4">
                <div class="about-section welcome-section text-center" data-title="">
                    <img src="{{ asset('storage/images/')}}" class="img-responsive" alt="">
                    <h4></h4>
                    <div class="border"></div>
                    <p class="about-description"></p>
                    <button class="btn btn-primary publish-content" data-id="{{ $about->id }}">
                        <i class="fas fa-eye"></i> Publish
                    </button>
                </div>
            </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section> --}}

<!-- End About Us Section -->

@endsection('about us')

@section('services')

 <!-- Start Feature Section -->
 <section id="service" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Our Services</h3>
                    <p>Comprehensive Solutions to Propel Your Business.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-magic"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Software Design & Development</h4>
                            <p>Unlocking business's potential with software solutions tailored to your unique needs.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-css3"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Brand Strategy Consulting</h4>
                            <p>Develop a compelling brand identity that resonates with your target audience</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-wordpress"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Business Consultation</h4>
                            <p>Benefit from our business consultation services, offering insights and strategies for growth</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-plug"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Graphics Design</h4>
                            <p>Captivate your audience with visually stunning graphics, logos, and branding materials</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-joomla"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Digital Marketing</h4>
                            <p>Our expertise extends to content marketing, email marketing, social media marketing, PPC advertising, and SEO to enhance your online presence and engagement.</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="feature-2">
                    <div class="media">
                        <div class="pull-left">
                            <i class="fa fa-cube"></i>
                            <div class="border"></div>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Event Planning and Promotion</h4>
                            <p>Elevate your business events with our event planning and promotion expertise</p>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-md-4 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
<!-- End Feature Section -->

@endsection('services')



@section('features')

<!-- Start Feature Section -->
        <section id="feature" class="feature-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-magic"></i>
                            <div class="feature-content">
                                <h4>Web Design & Development</h4>
                                <p>Your website is your digital storefront. Our web design and development services ensure your online presence not only looks impressive but functions seamlessly.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-empire"></i>
                            <div class="feature-content">
                                <h4>Brand Strategy Consulting</h4>
                                <p>Crafting a brand identity that resonates with your audience is crucial. Our brand strategy consulting helps you build a strong brand presence.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-yelp"></i>
                            <div class="feature-content">
                                <h4>Content Marketing</h4>
                                <p>Our team of content experts crafts engaging, tailored content that not only captures your audience's attention but also drives results. From blog posts to social media content, we've got you covered.</p>
                            </div>
                        </div>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="feature">
                            <i class="fa fa-gift"></i>
                            <div class="feature-content">
                                <h4>Graphics Design</h4>
                                <p>Visuals matter. Our talented graphic designers craft stunning visuals, logos, and branding materials that leave a lasting impression.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
        <!-- End Feature Section -->
        @endsection('features')

        @section('latest news')
<!-- Start Latest News Section -->
<section id="latest-news" class="latest-news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Latest News</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="latest-news">
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>31</strong> <br>Dec , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>17</strong> <br>Feb , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-01.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-02.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-post">
                        <img src="images/about-03.jpg" class="img-responsive" alt="">
                        <h4><a href="#">Standard Post with Image</a></h4>
                        <div class="post-details">
                            <span class="date"><strong>08</strong> <br>Aug , 2014</span>

                        </div>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Latest News Section -->
@endsection('latest news')

@section('team')
 <!-- Start Team Member Section -->
 <section id="team" class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center">
                        <h3>Our Team</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="team-section">


                            <div class="our-team">
                                @foreach ($teams as $team )
                                    <div class="team-member">
                                    <img src="{{ $team->photo }}" class="img-responsive" alt="">
                                    <div class="team-details">
                                        <h4>{{ $team->name }}</h4>
                                        <p>{{ $team->position }}</p>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Team Member Section -->
@endsection('team')
