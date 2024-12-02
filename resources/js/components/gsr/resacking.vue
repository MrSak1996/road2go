<template>
    <div>
        <Header />
        <Sidebar />
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Grain Situation Report</a></li>
                <li class="breadcrumb-item active">
                    Resacking
                </li>
            </ol>
            <h1 class="page-header">
                Resacking
            </h1>
            <h2></h2>

            <div class="row">
                <div class="col-lg-12">
                    <div id="wizard" class="sw-main sw-theme-default">
                        <ul class="nav nav-tabs step-anchor">
                            <li class="col-md-3 col-sm-4 col-6 active">
                                <a href="#step-1">
                                    <span class="number">1</span>
                                    <span class="info text-ellipsis">
                                        III.A RESACKING
                                        <small class="text-ellipsis">Name, Address, IC No and DOB</small>
                                    </span>
                                </a>
                            </li>

                            <li class="col-md-3 col-sm-4 col-6 done">
                                <a href="#step-2">
                                    <span class="number">3</span>
                                    <span class="info text-ellipsis">
                                        III.B SACKING
                                        <small class="text-ellipsis">Enter your username and password</small>
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                        <div class="sw-container tab-content" style="min-height: 366.844px">
                            <div id="step-1" class="step-content" style="display: block">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <button class="btn btn-xs btn-success pull-right mb-2">
                                            <a style="color:#fff;"
                                                :href="$router.resolve({ path: '/gsr/procurement/create' }).href">Add New
                                                Record</a>
                                        </button>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>BATANGAS</th>
                                                    <th>VARIETY</th>
                                                    <th colspan="3">FOR TODAY</th>
                                                    <th colspan="3">FOR THE MONTH</th>
                                                    <th colspan="3">FOR THE YEAR</th>
                                                    <th>IN-PROCESS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BATANGAS</td>
                                                    <td>BATANGAS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>BAGS OF 50</td>
                                                </tr>
                                                <tr>
                                                    <td>ISSUES</td>
                                                    <td>PD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>RECEIPTS</td>
                                                    <td>WD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>



                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>BATANGAS</th>
                                                    <th>VARIETY</th>
                                                    <th colspan="3">FOR TODAY</th>
                                                    <th colspan="3">FOR THE MONTH</th>
                                                    <th colspan="3">FOR THE YEAR</th>
                                                    <th>IN-PROCESS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BATANGAS</td>
                                                    <td>BATANGAS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>BAGS OF 50</td>
                                                </tr>
                                                <tr>
                                                    <td>ISSUES</td>
                                                    <td>PD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>RECEIPTS</td>
                                                    <td>WD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>



                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>
                            <div id="step-2" class="step-content" style="display: none">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <button class="btn btn-xs btn-success pull-right mb-2">
                                            <a style="color:#fff;"
                                                :href="$router.resolve({ path: '/gsr/procurement/create' }).href">Add New
                                                Record</a>
                                        </button>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>BATANGAS</th>
                                                    <th>VARIETY</th>
                                                    <th colspan="3">FOR TODAY</th>
                                                    <th colspan="3">FOR THE MONTH</th>
                                                    <th colspan="3">FOR THE YEAR</th>
                                                    <th>IN-PROCESS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BATANGAS</td>
                                                    <td>BATANGAS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>ACTUAL BAGS</td>
                                                    <td>BAGS OF 50</td>
                                                    <td>NET. KGS</td>
                                                    <td>BAGS OF 50</td>
                                                </tr>
                                                <tr>
                                                    <td>ISSUES</td>
                                                    <td>PD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>RECEIPTS</td>
                                                    <td>WD1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>



                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from "vue";

import "animate.css";
import Header from "../layout/header.vue";
import Sidebar from "../layout/sidebar.vue";
import Multiselect from "vue-multiselect";
</script>
