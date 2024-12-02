<style>
h4 {
    color: #707478 !important;
}
</style>
<template>
    <div id="page-container" class="fade">
        <!-- BEGIN #top-nav -->
        <div id="top-nav" class="top-nav">
            <!-- BEGIN container -->
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown dropdown-hover">
                            <a href="#" data-toggle="dropdown"><img src="../../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="../../assets/img/flag/flag-english.png" class="flag-img" alt="" /> English</a></li>
                                <li><a href="#"><img src="../../assets/img/flag/flag-german.png" class="flag-img" alt="" /> German</a></li>
                                <li><a href="#"><img src="../../assets/img/flag/flag-spanish.png" class="flag-img" alt="" /> Spanish</a></li>
                                <li><a href="#"><img src="../../assets/img/flag/flag-french.png" class="flag-img" alt="" /> French</a></li>
                                <li><a href="#"><img src="../../assets/img/flag/flag-chinese.png" class="flag-img" alt="" /> Chinese</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">Customer Care</a></li>
                        <li><a href="#">Order Tracker</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Our Forum</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#"><i class="fa fa-facebook f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble f-s-14"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus f-s-14"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- END container -->
        </div>
        <!-- END #top-nav -->

        <div id="header" class="header">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN header-container -->
                <div class="header-container">
                    <!-- BEGIN navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="header-logo">
                            <router-link to="/">
                                <span class="brand"></span>
                                <span>Road</span>2Go
                                <small>Trucking Services</small>
                            </router-link>
                        </div>
                    </div>
                    <!-- END navbar-header -->
                    <!-- BEGIN header-nav -->
                    <Header />
                </div>
            </div>
        </div>

        <!-- BEGIN #slider -->
        <div id="slider" class="section-container p-0 bg-black-darker">
            <!-- BEGIN carousel -->
            <div id="main-carousel" class="carousel slide" data-ride="carousel">
                <!-- BEGIN carousel-inner -->
                <div class="carousel-inner">
                    <!-- BEGIN item -->
                    <div class="item active">
                        <img src="../../assets/img/slider/slider-1-cover.jpg" class="bg-cover-img" alt="" />
                        <div class="container">
                            <img src="../../assets/img/slider/slider-4-product.png"
                                class="product-img right bottom fadeInRight animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-left">
                            <div class="container">
                                <h3 class="title m-b-5 fadeInLeftBig animated">Where every Miles Matter</h3>
                                <!-- <p class="m-b-15 fadeInLeftBig animated">The vision is brighter than ever.</p> -->
                                <!-- <div class="price m-b-30 fadeInLeftBig animated"><small>from</small> <span>$2299.00</span></div> -->
                                <!-- <a href="product_detail.html" class="btn btn-outline btn-lg fadeInLeftBig animated">Buy Now</a> -->
                            </div>
                        </div>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="../../assets/img/slider/slider-2-cover.jpg" class="bg-cover-img" alt="" />
                        <div class="container">
                            <img src="../../assets/img/slider/slider-22-product.jpg"
                                class="product-img left bottom fadeInLeft animated" alt="" />
                        </div>
                        <div class="carousel-caption carousel-caption-right">
                            <div class="container">
                                <h3 class="title m-b-5 fadeInRightBig animated">Trucking Roro Load</h3>
                                <p class="m-b-15 fadeInRightBig animated">Comprehensive range of delivery services</p>
                                <!-- <div class="price m-b-30 fadeInRightBig animated"><small>from</small> <span>$1,149.00</span></div> -->
                                <a href="product_detail.html"
                                    class="btn btn-outline btn-lg fadeInRightBig animated">View more</a>
                            </div>
                        </div>
                    </div>
                    <!-- END item -->
                    <!-- BEGIN item -->
                    <div class="item">
                        <img src="../../assets/img/slider/slider-33-cover.jpg" class="bg-cover-img" alt="" />
                        <div class="carousel-caption">
                            <div class="container">
                                <h3 class="title m-b-5 fadeInDownBig animated">Special Packaging and Crating</h3>
                                <p class="m-b-15 fadeInDownBig animated">Special Packaging<br />and Crating</p>
                                <!-- <div class="price fadeInDownBig animated"><small>from</small> <span>$999.00</span></div> -->
                                <a href="product_detail.html" class="btn btn-outline btn-lg fadeInUpBig animated">View
                                    more</a>
                            </div>
                        </div>
                    </div>
                    <!-- END item -->
                </div>
                <!-- END carousel-inner -->
                <a class="left carousel-control" href="#main-carousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#main-carousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            <!-- END carousel -->
        </div>
        <!-- END #slider -->
        <div id="about" class="content bg-silver" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title">About Us</h2>
                <p class="content-desc">
                    <b>Road2go Trucking Services</b> was found and established in 2024 with a mission to redefine
                    delivery services by exceeding customer expectations.
                    Our company is built on the extensive experience and insights of our owner, who has spent five years
                    in the logistics industry.
                    Recognizing the profitability and potential for innovation within this sector, he decided to create
                    a company that combines reliability, efficiency, and superior customer service.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <!-- begin about -->
                        <div class="about">
                            <h3>Our Story</h3>
                            <p>
                                Our owner brings a wealth of knowledge from his five years of hands-on experience
                                working in a leading logistics company.
                                His keen understanding of the industry's dynamics and commitment to excellence are the
                                cornerstones of Road2go Trucking Services.
                                His vision is to offer unparalleled delivery solutions that not only meet but surpass
                                the needs and expectations of our clients.
                            </p>

                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-6">
                        <h3>Our Philosophy</h3>
                        <!-- begin about-author -->
                        <div class="about-author">
                            <div class="quote bg-silver">
                                <i class="fa fa-quote-left"></i>
                                <h3>We work harder,<br /><span>to let our user keep simple</span></h3>
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="../../assets/img/user/user-1.jpg" alt="Sean Ngu" />
                                </div>
                                <div class="info">
                                    Raymark Magalong
                                    <small>Supervisor</small>
                                </div>
                            </div>
                        </div>
                        <!-- end about-author -->
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-12">
                        <h3>Our Experience</h3>
                        <!-- begin skills -->
                        <div class="skills">
                            <div class="skills-name">Front End</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 95%">
                                    <span class="progress-number">95%</span>
                                </div>
                            </div>
                            <div class="skills-name">Programming</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 90%">
                                    <span class="progress-number">90%</span>
                                </div>
                            </div>
                            <div class="skills-name">Database Design</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 85%">
                                    <span class="progress-number">85%</span>
                                </div>
                            </div>
                            <div class="skills-name">Wordpress</div>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-success" style="width: 80%">
                                    <span class="progress-number">80%</span>
                                </div>
                            </div>
                        </div>
                        <!-- end skills -->
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../../assets/img/bg/bg-milestone.jpg" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="1292">1,292</div>
                            <div class="title">Themes & Template</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="9039">9,039</div>
                            <div class="title">Registered Members</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="89291">89,291</div>
                            <div class="title">Items Sold</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number"
                                data-final-number="129">129</div>
                            <div class="title">Theme Authors</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <div id="team" class="content" data-scrollview="true">
            <div class="" style="text-align: center;">
                <h2 class="content-title">Our Team</h2>
                <p class="content-desc">
                    We strive to do everything so that you can comfortably and productively work in our space and create amazing products and services
                </p>
                <!-- begin row -->
                <div class="row" style="margin-left:15%;">
                    <div class="col-md-2 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" style="text-align: center;" data-animation="true"
                                data-animation-type="flipInX">
                                <img src="../../assets/img/user/user-1.jpg" alt="Ryan Teller"
                                    style="max-width:500px; display: block; margin: 0 auto; border:5px solid darkblue" />
                            </div>
                            <div class="info">
                                <h3 class="name">Raymark Magalong</h3>
                                <div class="title text-theme">GENERAL MANAGER</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" style="text-align: center;" data-animation="true"
                                data-animation-type="flipInX">
                                <img src="../../assets/img/user/user1.jpg" alt="Ryan Teller"
                                    style="max-width:200px; display: block; margin: 0 auto;border:5px solid darkblue" />
                            </div>
                            <div class="info">
                                <h3 class="name">Melchor Regondula</h3>
                                <div class="title text-theme">OPERATIONS MANAGER</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                    dolor.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" style="text-align: center;" data-animation="true"
                                data-animation-type="flipInX">
                                <img src="../../assets/img/user/user2.jpg" alt="Jonny Cash"
                                    style="max-width:200px; display: block; margin: 0 auto;border:5px solid darkblue" />
                            </div>
                            <div class="info">
                                <h3 class="name">Warren Zamora</h3>
                                <div class="title text-theme">OPERATIONS TEAM LEADER</div>
                                <p>Donec quam felis, ultricies nec, pellentesque eu sem. Nulla consequat massa quis
                                    enim.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" style="text-align: center;" data-animation="true"
                                data-animation-type="flipInX">
                                <img src="../../assets/img/user/user3.jpg" alt="Mia Donovan"
                                    style="max-width:200px; display: block; margin: 0 auto; border:5px solid darkblue" />
                            </div>
                            <div class="info">
                                <h3 class="name">Khyle Abordo</h3>
                                <div class="title text-theme">SECRETARY / ADMIN</div>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                </p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>
                    <div class="col-md-2 col-sm-4">
                        <!-- begin team -->
                        <div class="team">
                            <div class="image" style="text-align: center;" data-animation="true"
                                data-animation-type="flipInX">
                                <img src="../../assets/img/user/user4.jpg" alt="Mia Donovan"
                                    style="max-width:200px; display: block; margin: 0 auto; border:5px solid darkblue" />
                            </div>
                            <div class="info">
                                <h3 class="name">Charlene Manzano</h3>
                                <div class="title text-theme">ADMIN ASSISTANT</div>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                </p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- end team -->
                    </div>

                </div>
                <!-- end row -->
            </div>

        </div>

        <div id="quote" class="content bg-black has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../../assets/img/bg/bg-r2go.jpg" alt="Quote" style="width: 2000px;" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row" style="height: 200px;">
                    <!-- begin col-12 -->

                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Our Services</h2>
                <p class="content-desc">
                    At Road2go Trucking Services, our goal is to venture into the delivery services market with a fresh
                    perspective, providing top-notch services that go beyond traditional boundaries. We are dedicated to
                    achieving this by leveraging advanced logistics strategies, maintaining a customer-centric approach,
                    and continuously improving our processes to ensure the highest level of satisfaction.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-cog"></i></div>
                            <div class="info">
                                <h4 class="title">Land, Sea, Air Transport</h4>
                                <p class="desc">Duis in lorem placerat, iaculis nisi vitae, ultrices tortor. Vestibulum
                                    molestie ipsum nulla. Maecenas nec hendrerit eros, sit amet maximus leo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-paint-brush"></i></div>
                            <div class="info">
                                <h4 class="title">DC & Warehouse Management</h4>
                                <p class="desc">Etiam nulla turpis, gravida et orci ac, viverra commodo ipsum. Donec nec
                                    mauris faucibus, congue nisi sit amet, lobortis arcu.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-file"></i></div>
                            <div class="info">
                                <h4 class="title">Cross Dock Management</h4>
                                <p class="desc">Ut vel laoreet tortor. Donec venenatis ex velit, eget bibendum purus
                                    accumsan cursus. Curabitur pulvinar iaculis diam.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-code"></i></div>
                            <div class="info">
                                <h4 class="title">3rd Party Selling Distribution</h4>
                                <p class="desc">Aenean et elementum dui. Aenean massa enim, suscipit ut molestie quis,
                                    pretium sed orci. Ut faucibus egestas mattis.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-shopping-cart"></i></div>
                            <div class="info">
                                <h4 class="title">Toll Manufacturing</h4>
                                <p class="desc">Quisque gravida metus in sollicitudin feugiat. Class aptent taciti
                                    sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="service">
                            <div class="icon bg-theme" data-animation="true" data-animation-type="bounceIn"><i
                                    class="fa fa-heart"></i></div>
                            <div class="info">
                                <h4 class="title">Network Planning & Consulting
                                </h4>
                                <p class="desc">Integer consectetur, massa id mattis tincidunt, sapien erat malesuada
                                    turpis, nec vehicula lacus felis nec libero. Fusce non lorem nisl.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>



        <div id="work" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="../../assets/img/bg/bg-home.jpg" alt="Home" />
            </div>

            <!-- END #tablet-list -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title" style="margin-top:5rem;">Our Latest Work</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-1.jpg" alt="Work 1" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam molestie</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-2.jpg" alt="Work 2" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Quisque at pulvinar lacus</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-3.jpg" alt="Work 3" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Vestibulum et erat ornare</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-4.jpg" alt="Work 4" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Sed vitae mollis magna</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
                <!-- begin row -->
                <div class="row row-space-10">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-5.jpg" alt="Work 5" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Suspendisse at mattis odio</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-6.jpg" alt="Work 6" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Aliquam vitae commodo diam</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-7.jpg" alt="Work 7" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Phasellus eu vehicula lorem</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-6">
                        <!-- begin work -->
                        <div class="work">
                            <div class="image">
                                <a href="#"><img src="../../assets/img/work/work-img-8.jpg" alt="Work 8" /></a>
                            </div>
                            <div class="desc">
                                <span class="desc-title">Morbi bibendum pellentesque</span>
                                <span class="desc-text">Lorem ipsum dolor sit amet</span>
                            </div>
                        </div>
                        <!-- end work -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- BEGIN #policy -->
        <div id="policy" class="section-container bg-black p-t-30 p-b-30">
            <!-- BEGIN container -->
            <div class="container">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-truck"></i></div>
                            <div class="policy-info">
                                <h4>Free Delivery Over $100</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-shield"></i></div>
                            <div class="policy-info">
                                <h4>1 Year Warranty For Phones</h4>
                                <p>Cras laoreet urna id dui malesuada gravida. <br />Duis a lobortis dui.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                    <!-- BEGIN col-4 -->
                    <div class="col-md-4 col-sm-4">
                        <!-- BEGIN policy -->
                        <div class="policy">
                            <div class="policy-icon"><i class="fa fa-user-md"></i></div>
                            <div class="policy-info">
                                <h4>6 Month Warranty For Accessories</h4>
                                <p>Fusce ut euismod orci. Morbi auctor, sapien non eleifend iaculis.</p>
                            </div>
                        </div>
                        <!-- END policy -->
                    </div>
                    <!-- END col-4 -->
                </div>
                <!-- END row -->
            </div>
            <!-- END container -->
        </div>
        <!-- END #policy -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title">Contact Us</h2>
                <p class="content-desc">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <h3>If you have a project you would like to discuss, get in touch with us.</h3>
                        <p>
                            Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet,
                            lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                        </p>
                        <p>
                            <strong></strong><br />
                            Block 9, Lot 14, Banner Avenue,<br />
                            San Antonio, Paranaque City<br />
                            0917-3727-085<br />
                        </p>
                        <p>
                            <span class="phone">+63917-3727-085</span><br />
                            <a href="mailto:hello@emailaddress.com">Road2go.services@gmail.com</a>
                        </p>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Name <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Message <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9 text-left">
                                    <button type="submit" class="btn btn-theme btn-block">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>



       <Footer/>
    </div>
    <!-- END #page-container -->

    <!-- begin theme-panel -->
    <!-- <div class="theme-panel">
        <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
        <div class="theme-panel-content">
            <ul class="theme-list clearfix">
                <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../../assets/css/e-commerce/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../../assets/css/e-commerce/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                <li class="active"><a href="javascript:;" class="bg-green" data-theme-file="../../assets/css/e-commerce/theme/default.css" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../../assets/css/e-commerce/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../../assets/css/e-commerce/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
            </ul>
        </div>
    </div> -->
</template>
<script setup>
import Header from "../components/layout/header.vue";
import Footer from "../components/layout/footer.vue";

</script>
