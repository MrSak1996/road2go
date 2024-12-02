<style></style>
<template>
    <div>
        <Header />
        <Sidebar />
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                <li class="breadcrumb-item">
                    Procurement
                </li>
                <li class="breadcrumb-item active">
                    Add New Record
                </li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">
              Add New Record
            </h1>
            <!-- end page-header -->
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
                            <h4 class="panel-title">Information</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <fieldset
                                    style="width: 100%; border: 1px solid #ddd; padding: 10px; margin-bottom: 20px;">
                                    <legend style="font-size: 1.2em; padding: 0 10px;">WHSE Information</legend>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="warehouseName" class="form-label">Warehouse Branch</label>
                                                <input type="text" class="form-control" id="warehouseName"
                                                    aria-describedby="warehouseNameHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="warehouseOwnerName" class="form-label">Control No.</label>
                                                <input type="text" class="form-control" id="warehouseOwnerName"
                                                    aria-describedby="warehouseOwnerNameHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="location" class="form-label">Procurement Category</label>
                                                <div class="form-group m-b-10">
                                                    <select class="form-control">
                                                        <option>Procurement today</option>
                                                        <option>Procurement for the month</option>
                                                        <option>Procurement for the year</option>
                                                   
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="priceFromFarmers" class="form-label">Source</label>
                                                <div class="form-group m-b-10">
                                                    <select class="form-control">
                                                        <option>REGION I</option>
                                                        <option>REGION II</option>
                                                        <option>REGION III</option>
                                                        <option>REGION IV</option>
                                                        <option>REGION V</option>
                                                        <option>REGION VI</option>
                                                        <option>REGION VII</option>
                                                        <option>REGION VIII</option>
                                                        <option>REGION XI</option>
                                                        <option>REGION X</option>
                                                        <option>REGION IX</option>
                                                        <option>REGION XII</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="priceFromWarehouse" class="form-label">Variety</label>
                                                <div class="form-group m-b-10">
                                                    <select class="form-control">
                                                        <option>PD I</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="priceFromWarehouse" class="form-label">Net. Kgs</label>
                                                <input type="text" class="form-control" id="priceFromWarehouse"
                                                    aria-describedby="priceFromWarehouseHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="priceFromWarehouse" class="form-label">ENW</label>
                                                <input type="text" class="form-control" id="priceFromWarehouse"
                                                    aria-describedby="priceFromWarehouseHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="priceFromWarehouse" class="form-label">Basic Cost</label>
                                                <input type="text" class="form-control" id="priceFromWarehouse"
                                                    aria-describedby="priceFromWarehouseHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="classification" class="form-label">Grand Total</label>
                                                <input type="text" class="form-control" id="priceFromWarehouse"
                                                    aria-describedby="priceFromWarehouseHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="floorArea" class="form-label">Target</label>
                                                <input type="text" class="form-control" id="floorArea"
                                                    aria-describedby="floorAreaHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="monthlyRental" class="form-label">% Accomplisment</label>
                                                <input type="text" class="form-control" id="monthlyRental"
                                                    aria-describedby="monthlyRentalHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="monthlyRental" class="form-label">Farmers Served (IND)</label>
                                                <input type="text" class="form-control" id="monthlyRental"
                                                    aria-describedby="monthlyRentalHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="monthlyRental" class="form-label">Farmers Served (COOP)</label>
                                                <input type="text" class="form-control" id="monthlyRental"
                                                    aria-describedby="monthlyRentalHelp">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>

                        <!-- end hljs-wrapper -->
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
