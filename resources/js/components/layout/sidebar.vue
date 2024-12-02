<template>
    <div id="sidebar" class="sidebar">
        <!-- begin sidebar scrollbar -->
        <div data-scrollbar="true" data-height="100%">
            <!-- begin sidebar user -->
            <ul class="nav">
                <li class="nav-profile">
                    <a href="javascript:;" data-toggle="nav-profile">
                        <div class="cover with-shadow"></div>
                        <div class="image">
                            <img :src="user_img" alt="" />
                        </div>
                        <div class="info">
                            <b class="caret pull-right"></b>
                            Raymark Magalong
                            <small>CEO, Road2Go</small>
                        </div>
                    </a>
                </li>
                <li>
                    <ul class="nav nav-profile">
                        <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                        <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end sidebar user -->
            <!-- begin sidebar nav -->
            <ul class="nav">
                <li class="nav-header">Navigation</li>
                <!-- <li class="has-sub">
                    <a :href="$router.resolve({path: '/'}).href">Dashboard
                        <i class="fa fa-th-large"></i>
                    </a>
                </li>
                <li class="has-sub">
                    
                    <a href="javascript:;">
                        Rice Industry 
                        <b class="caret"></b>

                        <i class="fa fa-folder"></i>
                    </a>
                     <ul class="sub-menu">
                        <li><a :href="$router.resolve({path: '/rice_industry'}).href">Overview</a></li>
                        <li><a :href="$router.resolve({path: '/rice-industries/production'}).href">Palay Production</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a :href="$router.resolve({path: '/rice_farmers'}).href">Rice Farmers
                    <i class="fa fa-folder"></i>
                    </a>
                </li> -->
                <li class="has-sub">
                    <a href="javascript:;">
                        WHSE Library 
                        <b class="caret"></b>
                        <i class="fa fa-folder"></i>
                    </a>
                     <ul class="sub-menu">
                        <li><a :href="$router.resolve({path: '/whse_library/index'}).href">Overview</a></li>
                        <li><a :href="$router.resolve({path: '/whse_library/create'}).href">Add Entry</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        Inventory Management 
                        <b class="caret"></b>
                        <i class="fa fa-folder"></i>
                    </a>
                     <ul class="sub-menu">
                        <li><a :href="$router.resolve({path: '/whse_library/index'}).href">Stock and Exit Tracking</a></li>
                        <li><a :href="$router.resolve({path: '/whse_library/create'}).href">Stock Levels</a></li>
                        <li><a :href="$router.resolve({path: '/whse_library/create'}).href">Audit Trails</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        Grain Situation Report
                        <b class="caret"></b>
                        <i class="fa fa-folder"></i>
                    </a>
                     <ul class="sub-menu">
                        <li><a :href="$router.resolve({path: '/gsr/procurement'}).href">Procurement</a></li>
                        <li><a :href="$router.resolve({path: '/gsr/milling-reconditioning'}).href">Milling-Reconditioning</a></li>
                        <li><a :href="$router.resolve({path: '/gsr/resacking'}).href">Resacking</a></li>
                        <li><a :href="$router.resolve({path: '/gsr/sales-inventory'}).href">Sales and Inventory</a></li>
                        <li><a :href="$router.resolve({path: '/gsr/procurement'}).href">Dispersal</a></li>
                    </ul>
                </li>

<!--              
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-hdd"></i>
                        <span>Rice Industry</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a :href="$router.resolve({path: '/palay_production'}).href">Palay Production</a></li>
                        <li><a href="email_detail.html">Yield Per Hectare</a></li>
                        <li><a href="email_detail.html">Productivity Indicators</a></li>
                        <li><a href="email_detail.html">Price Monitoring</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-hdd"></i>
                        <span>Products</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="email_inbox.html">All Products</a></li>
                        <li><a href="email_compose.html">Categories</a></li>
                        <li><a href="email_detail.html">Units of Measures</a></li>
                        <li><a href="email_detail.html">Stock Levels</a></li>
                        <li><a href="email_detail.html">Price Monitoring</a></li>
                    </ul>
                </li> -->
                <!-- <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-gem"></i>
                        <span>Agricultural Sector</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="ui_general.html">Farming</a></li>
                        <li><a href="ui_general.html">Fisheries</a></li>
                        <li><a href="ui_general.html">Livestock</a></li>
                        <li><a href="ui_general.html">Forestry</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-gem"></i>
                        <span>Inventory</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="ui_general.html">Current Stock</a></li>
                        <li><a href="ui_typography.html">Incoming Stock</a></li>
                        <li><a href="ui_tabs_accordions.html">Outgoing Stock</a></li>
                        <li><a href="ui_unlimited_tabs.html">Stock Adjustments</a></li>
                        <li><a href="ui_modal_notification.html">Stock History<i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="bootstrap_4.html">
                        <div class="icon-img">
                            <img :src="logo_bs4" alt="">
                        </div>
                        <span>Suppliers<span class="label label-theme m-l-5">NEW</span></span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="ui_general.html">All Suppliers</a></li>
                        <li><a href="ui_typography.html">Supplier Categories</a></li>
                        <li><a href="ui_tabs_accordions.html">Supplier Ratings</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-list-ol"></i>
                        <span>Warehouse Mngmt </span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="form_elements.html">Warehouses<i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                        <li><a href="form_plugins.html">Warehouse Locations<i
                                    class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                        <li><a href="form_slider_switcher.html">Inventory Transfer</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-table"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="table_basic.html">Stock Reports</a></li>
                        <li><a href="table_basic.html">Sales Reports</a></li>
                        <li><a href="table_basic.html">Purchase Reports</a></li>
                        <li><a href="table_basic.html">Supplier Reports</a></li>
                        <li><a href="table_basic.html">Customer Reports</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-table"></i>
                        <span>Settings</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="table_basic.html">General Settings</a></li>
                        <li><a href="table_basic.html">User Management</a></li>
                        <li><a href="table_basic.html">Roles & Permission</a></li>
                        <li><a href="table_basic.html">Sytems Logs</a></li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="javascript:;">
                        <b class="caret"></b>
                        <i class="fa fa-table"></i>
                        <span>Help & Support</span>
                    </a>
                    <ul class="sub-menu">
                        <li><a href="table_basic.html">User Guide</a></li>
                        <li><a href="table_basic.html">FAQ</a></li>
                        <li><a href="table_basic.html">Contact Support</a></li>
                    </ul>
                </li> -->

            </ul>
            <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
    </div>
    <div class="sidebar-bg"></div>
</template>
<script>
import img1 from "../../../../public/assets/img/user/user-13.jpg";
import img2 from "../../../../public/assets/img/logo/logo-bs4.png";

export default {
    name: 'Sidebar',
    data() {
        return {
            user_img: img1,
            logo_bs4: img2
        }
    }
}
</script>