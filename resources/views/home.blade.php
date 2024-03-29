@extends('layouts.master')

@section('title')
Home
@endsection



@section('content')

<div id="content">
    <div class="panel">
        <div class="panel-body">

            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">Customer Service</h3>
                <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>
            </div>

        </div>

        <div class="col-md-12" style="padding:20px;">
            <div class="col-md-12 padding-0">
                <div class="col-md-12 padding-0">
                    <div class="col-md-12 padding-0">

                        <div class="col-md-6">
                            <div class="panel box-v1">
                                <div class="panel-heading bg-white border-none">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left">Visit</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                        <h4>
                                            <span class="icon-user icons icon text-right"></span>
                                        </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body text-center">
                                        <h1>51181,320</h1>
                                        <p>User active</p>
                                        <hr/>
                                    </div>
                                </div>
                            </div>


                        <div class="col-md-6">
                        <div class="panel box-v1">
                            <div class="panel-heading bg-white border-none">
                                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                    <h4 class="text-left">Orders</h4>
                                </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                <h4>
                                    <span class="icon-basket-loaded icons icon text-right"></span>
                                </h4>
                            </div>
                        </div>

                        <div class="panel-body text-center">
                            <h1>51181,320</h1>
                            <p>New Orders</p>
                            <hr/>
                        </div>

                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection