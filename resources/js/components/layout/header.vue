<template>
    <div class="header-nav">
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav">
                <li :class="{ active: $route.path === '/' }"><a :href="$router.resolve({ path: '/' }).href">Home</a></li>
                <li :class="{ active: $route.path === '/about' }">
                    <a :href="$router.resolve({ path: '/about' }).href">About Us</a>
                </li>
                <li :class="{ active: $route.path === '/about-owners' }">
                    <a :href="$router.resolve({ path: '/about-owners' }).href">About Owners </a>
                </li>
                <li :class="{ active: $route.path === '/our-aim' }">
                    <a :href="$router.resolve({ path: '/our-aim' }).href">Our Aim </a>
                </li>
                <li :class="{ active: $route.path === '/contact-us' }">
                    <a :href="$router.resolve({ path: '/contact-us' }).href">Contact Us </a>
                </li>
                <li :class="{ active: $route.path === '/our-goal' }">
                    <router-link 
                        to="/our-goal" 
                        @click.native="reloadPage"
                    >
                        Our Goal
                    </router-link>
                </li>
                <li class="dropdown dropdown-hover" :class="{ active: $route.path === '/services' }">
                    <a href="#" data-toggle="dropdown">
                        Services
                        <i class="fa fa-angle-down"></i>
                        <span class="arrow top"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Trucking Roro Load</a></li>
                        <li><a href="#">Special Packaging and Crating</a></li>
                        <li><a href="#">Pick Up and Special Delivery</a></li>
                        <li><a href="#">Trucking Roro Load</a></li>
                        <li><a href="#">Product Details Page</a></li>
                    </ul>
                </li>
                <li class="dropdown dropdown-hover">
                    <a href="#" data-toggle="dropdown">
                        <i class="fa fa-search search-btn"></i>
                        <span class="arrow top"></span>
                    </a>
                    <div class="dropdown-menu p-15">
                        <form action="#" method="POST" name="search_form">
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="form-control bg-silver-lighter" />
                                <span class="input-group-btn">
                                    <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Header',
    methods: {
        reloadPage() {
            window.location.reload();
        }
    }
}
</script>
