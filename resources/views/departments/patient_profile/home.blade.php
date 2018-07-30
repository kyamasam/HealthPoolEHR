@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Title & Breadcrumbs-->
            <div class="row page-titles">
                <div class="col-md-12 align-self-center">
                    <h4 class="theme-cl">home</h4>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <form method="post" enctype="multipart/form-data" action="{{route('patient_logout')}}" >
                            @csrf
                            <button type="submit" class="btn btn-success float-right">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Title & Breadcrumbs-->

            <!-- chat-wappers-->
            <div class="chat-wappers">
                <div class="app">
                    <div class="row app-one">
                        <div class="col-md-4 side">

                            <!-- ========= Side One =========== -->
                            <div class="side-one">
                                <div class="row heading bg-light">
                                    <div class="col-sm-9 col-9 heading-avatar">
                                        <div class="heading-avatar-icon">
                                            <img src="http://via.placeholder.com/180x180" alt="">
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-3 heading-compose  text-right">
                                        <i class="fa fa-comments-o fa-2x" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <div class="row searchBox">
                                    <div class="col-sm-12 searchBox-inner bg-white">
                                        <div class="form-group has-feedback">
                                            <input id="searchText" type="text" class="form-control" name="searchText" placeholder="Search">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row sideBar">

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">18:18</span></h6>
                                                    <small class="cl-success">Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Alisha L. Burchell</a> <span class="time-meta pull-right">10:18</span></h6>
                                                    <small class="cl-success">Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Daniel N. Anderson</a> <span class="time-meta pull-right">20:18</span></h6>
                                                    <small class="cl-warning">Busy</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Kristina R. Noto</a> <span class="time-meta pull-right">18:18</span></h6>
                                                    <small class="cl-success">Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Larry C. Cramer</a> <span class="time-meta pull-right">18:18</span></h6>
                                                    <small class="cl-primary">Away</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Sharon C. Mason</a> <span class="time-meta pull-right">20:20</span></h6>
                                                    <small class="cl-warning">Busy</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Michael P. Fowler</a> <span class="time-meta pull-right">07:10</span></h6>
                                                    <small class="cl-danger">Offline</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Nancy T. Clayton</a> <span class="time-meta pull-right">17:12</span></h6>
                                                    <small class="cl-success">Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box sideBar-body">
                                        <div class="ground-list ground-list-hove bb-1">
                                            <div class="media media-single">
                                                <a href="#">
                                                    <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                </a>

                                                <div class="media-body">
                                                    <h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">12:10</span></h6>
                                                    <small class="cl-success">Online</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ========= End Side One =========== -->

                            <div class="side-two">

                                <div class="row newMessage-heading theme-bg">
                                    <div class="row newMessage-main">
                                        <div class="col-sm-2 col-2 newMessage-back">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-sm-10 col-10 newMessage-title">
                                            New Chat
                                        </div>
                                    </div>
                                </div>

                                <div class="row composeBox">
                                    <div class="col-sm-12 composeBox-inner">
                                        <div class="form-group has-feedback">
                                            <input id="composeText" type="text" class="form-control" name="searchText" placeholder="Search People">
                                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row compose-sideBar">
                                    <div class="row sideBar-body">
                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">18:18</span></h6>
                                                        <small class="cl-success">Online</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Alisha L. Burchell</a> <span class="time-meta pull-right">10:18</span></h6>
                                                        <small class="cl-success">Online</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Daniel N. Anderson</a> <span class="time-meta pull-right">20:18</span></h6>
                                                        <small class="cl-warning">Busy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Kristina R. Noto</a> <span class="time-meta pull-right">18:18</span></h6>
                                                        <small class="cl-success">Online</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Larry C. Cramer</a> <span class="time-meta pull-right">18:18</span></h6>
                                                        <small class="cl-primary">Away</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Sharon C. Mason</a> <span class="time-meta pull-right">20:20</span></h6>
                                                        <small class="cl-warning">Busy</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Michael P. Fowler</a> <span class="time-meta pull-right">07:10</span></h6>
                                                        <small class="cl-danger">Offline</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Nancy T. Clayton</a> <span class="time-meta pull-right">17:12</span></h6>
                                                        <small class="cl-success">Online</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="box sideBar-body">
                                            <div class="ground-list ground-list-hove bb-1">
                                                <div class="media media-single">
                                                    <a href="#">
                                                        <img class="avatar avatar-lg" src="http://via.placeholder.com/180x180" alt="...">
                                                    </a>

                                                    <div class="media-body">
                                                        <h6><a href="#">Hossein Shams</a> <span class="time-meta pull-right">12:10</span></h6>
                                                        <small class="cl-success">Online</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Col-md-4 -->

                        <div class="col-md-8 conversation bl-1">

                            <div class="row heading bg-light">

                                <div class="col-sm-2 col-md-1 col-3 heading-avatar">
                                    <div class="heading-avatar-icon">
                                        <img src="http://via.placeholder.com/180x180" alt="">
                                    </div>
                                </div>

                                <div class="col-sm-8 col-8 heading-name">
                                    <a class="heading-name-meta">DR.John
                                    </a>
                                    <span class="heading-online cl-success">Online</span>
                                </div>

                                <div class="col-sm-2 col-4  heading-dot pull-right">
                                    <div class="btn-group fl-right">
                                        <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa-2x ti-more"></i>
                                        </button>
                                        <div class="dropdown-menu pull-right animated flipInX">
                                            <a href="#">Add User</a>
                                            <a href="#">Profile</a>
                                            <a href="#">Settings</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row message" id="conversation">
                                <ul class="chat-list padd-20">
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
                                        <div class="chat-content">
                                            <h5 class="mrg-bot-5">James Anderson</h5>
                                            <div class="chating-box bg-light">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="time-meta">10:56 am</div>
                                    </li>
                                    <!--chat Row -->

                                    <li>
                                        <div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
                                        <div class="chat-content">
                                            <h5 class="mrg-bot-5">Bianca Doe</h5>
                                            <div class="chating-box bg-light">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="time-meta">10:57 am</div>
                                    </li>
                                    <!--chat Row -->

                                    <li class="reverse">
                                        <div class="chat-time">10:57 am</div>
                                        <div class="chat-content">
                                            <h5 class="mrg-bot-5">Steave Doe</h5>
                                            <div class="chating-box cl-white bg-primary">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
                                    </li>
                                    <!--chat Row -->

                                    <li class="reverse">
                                        <div class="time-meta">10:57 am</div>
                                        <div class="chat-content">
                                            <h5 class="mrg-bot-5">Steave Doe</h5>
                                            <div class="chating-box cl-white bg-primary">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
                                    </li>
                                    <!--chat Row -->

                                    <li>
                                        <div class="chat-img"><img src="http://via.placeholder.com/180x180" alt="user"></div>
                                        <div class="chat-content">
                                            <h5 class="mrg-bot-5">Angelina Rhodes</h5>
                                            <div class="chating-box bg-light bg-primary">Well we have good budget for the project</div>
                                        </div>
                                        <div class="time-meta">11:00 am</div>
                                    </li>
                                    <!--chat Row -->

                                </ul>
                            </div>

                            <div class="row reply bg-light">

                                <div class="col-sm-1 col-xs-1 reply-emojis">
                                    <i class="fa fa-smile-o fa-2x"></i>
                                </div>

                                <div class="col-sm-9 col-xs-9 reply-main">
                                    <textarea class="form-control" rows="1" id="comment" placeholder="Reply Comments"></textarea>
                                </div>

                                <div class="col-sm-1 col-xs-1 reply-recording">
                                    <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                                </div>

                                <div class="col-sm-1 col-xs-1 reply-send">
                                    <i class="fa fa-send fa-2x" aria-hidden="true"></i>
                                </div>

                            </div>
                        </div>
                        <!-- col-md-8 -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection