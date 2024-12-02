<style>
h1 {
    color: aliceblue
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

        <!-- begin #page-title -->
        <div id="page-title" class="page-title has-bg">
            <div class="bg-cover"><img src="../../../assets/img/cover/cover-8.jpg" alt="" /></div>
            <div class="container">
                <h1>Contact Us</h1>
                <p></p>
            </div>
        </div>
        <!-- end #page-title -->

        <!-- begin #content -->
        <div id="content" class="content">
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row row-space-30">
                    <!-- begin col-9 -->
                    <div class="col-md-9">
                        <!-- begin section-container -->
                        <div class="section-container">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3306.9584799260138!2d-118.49437019999998!3d34.019276700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4cedd1266ff%3A0x1ffe328381544853!2sGoogle+Inc!5e0!3m2!1sen!2s!4v1435718319426"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- end section-container -->
                        <!-- begin section-container -->
                        <div class="section-container">
                            <h4 class="section-title m-b-20"><span>CONTACT US</span></h4>
                            <p class="m-b-30 f-s-13">
                                If you have a project you would like to discuss, get in touch with us.
                                Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper
                                laoreet,
                                lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                            </p>
                            <!-- begin row -->
                            <div class="row row-space-30 f-s-12 text-inverse">
                                <!-- begin col-8 -->
                                <div class="col-md-8">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Name <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Message <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3"></label>
                                            <div class="col-md-9 text-left">
                                                <button type="submit" class="btn btn-inverse btn-lg btn-block">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end col-8 -->
                                <!-- begin col-4 -->
                                <div class="col-md-4">
                                    <p>
                                        <strong>Road2Go, Inc</strong><br>
                                        Block 9, Lot 14, Banner Avenue,<br>
                                        San Antonio, Paranaque City<br>
                                        P: 0917-3727-085<br>
                                    </p>
                                    <p>
                                        <span class="phone">Mon-Fri: 9AM - 6PM</span><br>
                                        <a href="mailto:hello@emailaddress.com">Road2go.services@gmail.com</a>
                                    </p>
                                </div>
                                <!-- end col-4 -->
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end section-container -->
                    </div>
                    <!-- end col-9 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3">
                        <!-- begin section-container -->
                        <div class="section-container">
                            <div class="input-group sidebar-search">
                                <input type="text" class="form-control" placeholder="Search Our Stories..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <!-- end section-container -->
                        <!-- begin section-container -->
                        <div class="section-container">
                            <h4 class="section-title"><span>Categories</span></h4>
                            <ul class="sidebar-list">
                                <li><a href="#">Sports (20)</a></li>
                                <li><a href="#">Outdoor Sports (45)</a></li>
                                <li><a href="#">Indoor Sports (1,292)</a></li>
                                <li><a href="#">Video Shooting (12)</a></li>
                                <li><a href="#">Drone (229)</a></li>
                                <li><a href="#">Uncategorized (1,482)</a></li>
                            </ul>
                        </div>
                        <!-- end section-container -->
                        <!-- begin section-container -->
                        <div class="section-container">
                            <h4 class="section-title"><span>Recent Post</span></h4>
                            <ul class="sidebar-recent-post">
                                <li>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Lorem ipsum dolor sit amet.</a></h4>
                                        <div class="date">23 December 2015</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Vestibulum a cursus arcu.</a></h4>
                                        <div class="date">16 December 2015</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Nullam vel condimentum lectus. </a></h4>
                                        <div class="date">7 December 2015</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Proin in dui egestas libero posuere ullamcorper.
                                            </a></h4>
                                        <div class="date">20 November 2015</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <h4 class="title"><a href="#">Interdum et malesuada fames ac ante.</a></h4>
                                        <div class="date">5 November 2015</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end section-container -->
                        <!-- begin section-container -->
                        <div class="section-container">
                            <h4 class="section-title"><span>Follow Us</span></h4>
                            <ul class="sidebar-social-list">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- end section-container -->
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #content -->

        <Footer/>
        
    </div>
</template>
<script>
import Header from "../../components/layout/header.vue";
import Footer from "../../components/layout/footer.vue";
export default {
    name: 'ContactUs',
    components: {
        Header,
        Footer
    }
}
</script>