@extends('template')

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                   <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
            
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-eye"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10">
                                                    <h5 class="mt-0">{{$items}}</h5>
                                                    <p class="mb-0 text-muted">All Items <span class="badge bg-soft-success"><i class="mdi mdi-arrow-up"></i></span></p>
                                                </div>
                                            </div>                                                                                          
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar  bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-account-multiple-plus"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 text-right align-self-center">
                                                <div class="m-l-10 ">
                                                    <h5 class="mt-0">{{$users}}</h5>
                                                    <p class="mb-0 text-muted">All Users</p>
                                                </div>
                                            </div>                                                                                                                
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 48%;" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                            
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="search-type-arrow"></div>
                                        <div class="d-flex flex-row">
                                            <div class="col-3 align-self-center">
                                                <div class="round ">
                                                    <i class="mdi mdi-cart"></i>
                                                </div>
                                            </div>
                                            <div class="col-9 align-self-center text-right">
                                                <div class="m-l-10 ">
                                                    <h5 class="mt-0">{{$orders}}</h5>
                                                    <p class="mb-0 text-muted">New Orders</p>
                                                </div>
                                            </div>                                                                
                                        </div>
                                        <div class="progress mt-3" style="height:3px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Every Day Revenue</h4>
                                <p class="text-muted mb-4 font-14"></p>        
                                <div id="morris-bar-stacked" class="morris-chart"></div> 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">                                 
                                <div class="row">
                                    <div class="col-8">
                                        <h3> Rp. 700.000.00</h3>
                                        <h6 class="text-lightdark">Total Sele</h6>
                                        <span class="text-muted"> <small>Last 1 Month</small></span>
                                    </div>
                                                                                  
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body p-0 mb-n5"> 
                                <div class="mb-0 area-chart-map" id="morris-area-chart"></div>
                            </div>
                            <div class="card mb-0 bg-map">
                                <div class="card-body ">
                                    <div id="world-map-markers" class="dash-map"></div>
                                </div>
                            </div><!--end card-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

                
                <div class="row"> 
                    <div class="col-xl-4 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mt-0  mb-3">Summary</h5>                                
                                <div id="donut-example"></div>
                                <ul class="list-unstyled text-center text-muted mt-2 mb-0">
                                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-secondary mr-2"></i>Laptops</li>
                                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-info mr-2"></i>Iphones</li>
                                    <li class="list-inline-item font-13"><i class="mdi mdi-album font-16 text-light mr-2"></i>Tablets</li>
                                </ul>            
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                                                 
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mt-0 mb-0">Weather</h5>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 text-center align-self-center">    
                                        <h6 class="">Kabupaten Garut</h6>                                                      
                                        <p class="text-muted">MONDAY <span>07<sup>th</sup> Des</span></p>
                                        <canvas id="clear-day" width="50" height="50"></canvas>
                                        <h5 class="mt-0 "><b>32??</b></h5>
                                        <p class="text-muted  font-12">Clear Day</p>
                                        <p class="text-muted">There are many variations of passages of 
                                            Lorem Ipsum available, but the majority have suffered alteration.
                                        </p>
                                    </div> 
                                </div>
                                <div class="row ">
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">MON</h6>
                                        <canvas id="rain" width="28" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">28??<i class="wi-degrees"></i></h6>
                                    </div>
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">TUE</h6>
                                        <canvas id="wind" width="35" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">32??<i class="wi-degrees"></i></h6>
                                    </div>
                                    <div class="col-4  text-center align-self-center">
                                        <h6 class="text-muted mt-0 font-14">WEN</h6>
                                        <canvas id="snow" width="35" height="18"></canvas>
                                        <h6 class="text-muted font-14 mb-0">10??<i class="wi-degrees"></i></h6>
                                    </div>                               
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    
                    
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mt-0 mb-3">Calendar</h5>                                
                                <div id="v-cal">
                                    <div class="vcal-header">
                                        <button class="vcal-btn" data-calendar-toggle="previous">
                                            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                            </svg>
                                        </button>
                        
                                        <div class="vcal-header__label" data-calendar-label="month">
                                            March 2017
                                        </div>
                        
                        
                                        <button class="vcal-btn" data-calendar-toggle="next">
                                            <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="vcal-week">
                                        <span>Mon</span>
                                        <span>Tue</span>
                                        <span>Wed</span>
                                        <span>Thu</span>
                                        <span>Fri</span>
                                        <span>Sat</span>
                                        <span>Sun</span>
                                    </div>
                                    <div class="vcal-body" data-calendar-area="month"></div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->           
                </div> <!-- end row --> 
            </div> <!-- end container -->
        <!-- end wrapper -->


