<template>
    <div>
        <Header />
        <Sidebar />
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Grain Situation Report</a></li>
                <li class="breadcrumb-item active">
                    Sales and Inventory
                </li>
            </ol>
            <h1 class="page-header">
                Sales and Inventory
            </h1>
            <h2></h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                        <!-- begin panel-heading -->
                        <div class="panel-heading ui-sortable-handle">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                    data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                    data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                    data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                    data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Sales and Inventory</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <!-- begin table-responsive -->
                            <div class="table-responsive">
                                <div class="table-container">
                                    <div class="scrollable-tbody">

                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="6" style="text-align: center;">TODAY</th>
                                                    <th colspan="6" style="text-align: center;">FOR THE MONTH</th>


                                                </tr>
                                                <tr>
                                                    <th>OUTLET</th>
                                                    <th rowspan="2">VARIETY</th>
                                                    <th rowspan="2">PRICE/KG</th>
                                                    <th rowspan="2">BAGS</th>
                                                    <th rowspan="2">NET KG</th>
                                                    <th rowspan="2">VALUE</th>
                                                    <th rowspan="2">BAGS</th>
                                                    <th rowspan="2">NET KG</th>
                                                    <th colspan="2">VALUE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>DSWD-SFP Bats.</td>
                                                    <td>WD1</td>
                                                    <td>25.00</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                        <!-- begin panel-heading -->
                        <div class="panel-heading ui-sortable-handle">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                                    data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                    data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                    data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                    data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">TOTAL PER VARIETY PER AREA - RICE SALES
                            </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <!-- begin table-responsive -->
                            <div class="table-responsive">
                                <div class="table-container">
                                    <div class="scrollable-tbody">

                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">OUTLET</th>
                                                    <th rowspan="2">VARIETY</th>
                                                    <th rowspan="2">PRICE/KG</th>
                                                    <th colspan="3" style="text-align: center;">TODAY</th>

                                                    <th colspan="6" style="text-align: center;">FOR THE MONTH</th>


                                                </tr>
                                                <tr>
                                                    
                                                    <th>BAGS</th>
                                                    <th>NET KG</th>
                                                    <th>VALUE</th>
                                                    <th>BAGS</th>
                                                    <th>NET KG</th>
                                                    <th>VALUE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>DSWD-SFP Bats.</td>
                                                    <td>WD1</td>
                                                    <td>25.00</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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