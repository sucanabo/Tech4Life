@extends('user/layouts/master')
@section('title','All Post - Index')
@section('content')
<main id="main-content">
        <div class="banner">
            <a href="#" target="blank">
                <div style="background-color: #FEF3EB;">
                    <div class="banner__container container w-100 px-0">
                        <img src="{{asset('layout_user/img/banner/banner001.png')}}" alt="banner" class="banner__img">
                    </div>
                </div>
            </a>
        </div>
        <div class="bg-dark pt-4 pb-4 second-nav">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="feed-bar">
                        <div class="hamburger">
                            <div class="nav-line"></div>
                            <div class="nav-line"></div>
                            <div class="nav-line"></div>
                        </div>
                        <ul class="feed-links">
                            <span class="close-btn"><i class="fas fa-times"></i></span>
                            <li class="feed-item link active"><a href="./followings.html">
                                    <a href="./followings.html" class="link">
                                        <div class="el-badge badge-new">followings
                                            <sup class="el-badge__content el-badge__content--undefined fixed"></sup>
                                        </div>
                                    </a>
                                </a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">newsets</a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">series</a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">editor's choice</a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">trending</a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">videos</a></li>
                            <li class="feed-item"><a href="./followings.html" class="link">my clips</a></li>
                        </ul>
                    </div>
                    <a href="publish/post" class="btn btn-primary float-right text-uppercase hidden-md-down">
                        <span><i class="fas fa-pencil-alt"></i></span>&nbsp;CREATE POST
                    </a>
                </div>
            </div>
        </div>
        <!-- suggestion random ngau nhien -->
        <div class="suggestion">
            <div class="text-white text-center h3 font-weight-bold pt-4 pb-4 m-0"
                style="background: linear-gradient(to right, rgb(138, 60, 82), rgb(106, 130, 251));">
                <a href="https://viblo.asia/organization-feature?utm_source=viblo&amp;utm_medium=mod&amp;utm_campaign=mod_2020q1"
                    target="_blank" rel="noopener" class="text-white">
                    &gt;&gt;&gt; Promoting your Organization to Viblo's growing community &lt;&lt;&lt;
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row pt-3 pb-1">
                <div class="col-lg-9 col-md-12 pl-md-0" id="content-left">
                    <!-- Hiện alert.html nếu chưa follow tag nào ./components/alert.html-->
                    <div class="post-feed">
                        <div class="post-layout-switcher">
                            <a href="" class="link active"><i class="fas fa-list"></i></a>
                            <a href="" class="link"><i class="far fa-newspaper"></i></a>
                        </div>
                    </div>
                @foreach($post as $p)
               
                    <div class="post-feed-item bg-highlight">
                        <div class="d-flex">
                            <a href="#" class="mr-3">
                                <div class="inline-block avatar--md">
                                <img src="{{ URL::asset('img') }}/<?php
                                        $data = DB::table('users')->select('avatar')->where('id','=',$p->user_id)->get();
                                            foreach($data as $row)
                                            {
                                                foreach($row as $key=>$value){
                                                  echo $value;
                                                }
                                            }
                                    ?>" alt="pi">
                                </div>
                            </a>
                            <div class="post-feed-item__info w-100">
                                <div class="post-meta--inline">
                                    <div class="user-name">
                                        <a class="link mr-3" href="#">
                                        <?php
                                            $data = DB::table('users')->select('username')->where('id','=',$p->user_id)->get();
                                            foreach($data as $row)
                                            {
                                                foreach($row as $key=>$value){
                                                    echo "<b>$value</b>";
                                                }
                                            }
                                        ?>
                                        </a>
                                    </div>
                                    <div class="d-inline-flex flex-wrap align-items-center">
                                        <span class="text-muted mr-2">about 22 hours ago</span>
                                        <span class="text-muted mr-2 post-reading_time">- 3 min read</span>
                                        <button class="icon-btn"><i class="fa fa-link"></i></button>
                                    </div>
                                </div>
                                <div class="post-title--inline">
                                    <h3><a href="post_detail/{{$p->id}}" class="link">{{$p->title}}</a></h3>
                                    <div class="tags">
                                        <a href="#" class="el-tag el-tag--info el-tag--mini">BEM</a>
                                        <a href="#" class="el-tag el-tag--info el-tag--mini">CSS3</a>
                                        <a href="#" class="el-tag el-tag--info el-tag--mini">HTML</a>
                                        <a href="#" class="el-tag el-tag--info el-tag--mini">Front-end</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="stats">
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Views: 1K"><i class="far fa-eye mr-1"></i>{{$p->view}}</span>
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Clips: 153"><i class="fas fa-paperclip mr-1"></i></i>153</span>
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                        </div>
                                    </div>
                                    <div class="points">
                                        <div class="carets mr-2">
                                            <i class="fas fa-caret-up voted"></i>
                                            <i class="fas fa-caret-down"></i>
                                        </div>
                                        <span class="text-muted">{{$p->vote}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <ul class="pagination">
                        <li class="page-item"><a href="" class="disabled"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="" class="nuxt-link-exact-active  active">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="" class="disabled">...</a></li>
                        <li><a href="">99</a></li>
                        <li><a href="">100</a></li>
                        <li class="page-item"><a href=""><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 hidden-md-down px-0" id="content-right">
                    <div class="sticky-sidebar" style="height: 1000px;">
                        <div class="sticky-sidebar__inner">
                            <div class="main-feed__sidebar">
                                <div class="main-feed__sidebar__question">
                                    <div class="section-title d-flex justify-content-center align-items-lg-baseline">
                                        <a href="/question">
                                            <h4 class="text-uppercase m-0">Newset question</h4>
                                        </a>
                                        <hr class="section-title__filler ml-3">
                                    </div>
                                    <div class="sidebar__feed-item">
                                        <a href="#" class="link word-break">
                                            <h4>[ Flutter ] Ask For I18n Localization</h4>
                                        </a>
                                        <div class="sidebar__feed-item__info w-100">
                                            <div class="stats text-nowrap">
                                                <div class="points stats-item text-nowrap d-flex" data-toggle="tooltip"
                                                    title="Score">
                                                    <div class="carets">
                                                        <i class="fas fa-caret-up"></i>
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                    <span class="text-muted">12</span>
                                                </div>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Answers: 30"><i class="fas fa-check"></i>30</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 300"><i class="fas fa-paperclip"></i></i>300</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 100"><i class="fas fa-comments"></i>100</span>
                                            </div>
                                        </div>
                                        <div class="sidebar__feed-item__subtitle">
                                            <a href="#" class="link link--plain text-muted">Felix Dinh</a>
                                        </div>
                                    </div>
                                    <div class="sidebar__feed-item">
                                        <a href="#" class="link word-break">
                                            <h4>Hỏi về cách xử lý router trong nuxtjs</h4>
                                        </a>
                                        <div class="sidebar__feed-item__info w-100">
                                            <div class="stats text-nowrap">
                                                <div class="points stats-item text-nowrap d-flex" data-toggle="tooltip"
                                                    title="Score">
                                                    <div class="carets">
                                                        <i class="fas fa-caret-up"></i>
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                    <span class="text-muted">12</span>
                                                </div>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Answers: 30"><i class="fas fa-reply"></i>30</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 300"><i class="fas fa-paperclip"></i>300</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 100"><i class="fas fa-comments"></i>100</span>
                                            </div>
                                        </div>
                                        <div class="sidebar__feed-item__subtitle">
                                            <a href="#" class="link link--plain text-muted">
                                                bacodekiller
                                            </a>
                                        </div>
                                    </div>
                                    <div class="sidebar__feed-item">
                                        <a href="#" class="link word-break">
                                            <h4>Cho mình hỏi về cách lam lazy load nhiều size nhiều thiết bị khi dung
                                                ckfinder</h4>
                                        </a>
                                        <div class="sidebar__feed-item__info w-100">
                                            <div class="stats text-nowrap">
                                                <div class="points stats-item text-nowrap d-flex" data-toggle="tooltip"
                                                    title="Score">
                                                    <div class="carets">
                                                        <i class="fas fa-caret-up"></i>
                                                        <i class="fas fa-caret-down"></i>
                                                    </div>
                                                    <span class="text-muted">12</span>
                                                </div>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Ansers: 30"><i class="fas fa-check"></i>30</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 300"><i class="fas fa-paperclip"></i>300</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 100"><i class="fas fa-comments"></i>100</span>
                                            </div>
                                        </div>
                                        <div class="sidebar__feed-item__subtitle">
                                            <a href="#" class="link link--plain text-muted">codekhongdo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-feed__sidebar__top-organizations">
                                    <div class="section-title d-flex justify-content-center align-items-lg-baseline">
                                        <a href="/organizations">
                                            <h4 class="text-uppercase m-0">Top organizations</h4>
                                        </a>
                                        <hr class="section-title__filler ml-3">
                                    </div>
                                    <div class="top-organization__container">
                                        <div class="top-organization__item d-flex">
                                            <div class="top-organization__img">
                                                <a href="#"><img src="{{asset('layout_user/img/organization/sunLab.jpg')}}" alt="sunLab"></a>
                                            </div>
                                            <div class="top-organization__info">
                                                <a href="#" class="word-break">Sun * R&D Lab</a>
                                                <div class="stats text-nowrap">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 30"><i class="fas fa-pencil-alt"></i>30</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Members: 300"><i class="fas fa-users"></i>300</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 100"><i class="fas fa-user-plus"></i>100</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="top-organization__item d-flex">
                                            <div class="top-organization__img">
                                                <a href="#"><img src="{{asset('layout_user/img/organization/nghethuatcoding.png')}}" alt="nghethuatcoding"></a>
                                            </div>
                                            <div class="top-organization__info">
                                                <a href="#" class="word-break">Nghệ thuật Coding</a>
                                                <div class="stats text-nowrap">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 18"><i class="fas fa-pencil-alt"></i>18</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Members: 2"><i class="fas fa-users"></i>2</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 172"><i class="fas fa-user-plus"></i>172</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="top-organization__item d-flex">
                                            <div class="top-organization__img">
                                                <a href="#"><img src="{{asset('layout_user/img/organization/sunCubeBranch.png')}}" alt="sunCubeBranch"></a>
                                            </div>
                                            <div class="top-organization__info">
                                                <a href="#" class="word-break">
                                                    Sun* Cebu Branch / Awesome Ars Academia Cebu
                                                </a>
                                                <div class="stats text-nowrap">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 14"><i class="fas fa-pencil-alt"></i>14</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Members: 21"><i class="fas fa-users"></i>21</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 51"><i class="fas fa-user-plus"></i>51</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="main-feed__sidebar__top-author">
                                    <div class="section-title d-flex justify-content-center align-items-lg-baseline">
                                        <a href="/authors">
                                            <h4 class="text-uppercase m-0">Top authors</h4>
                                        </a>
                                        <hr class="section-title__filler ml-3">
                                    </div>
                                    <div class="top-author__container">
                                        <div class="top-author__item mt-4">
                                            <div class="top-author__info d-flex">
                                                <a href="#">
                                                    <img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="pi">
                                                </a>
                                                <div class="d-flex flex-column justify-content-center ml-4  ">
                                                    <a href="#">Pi</a>
                                                    <span class="d-block">@sucanabo</span>
                                                </div>
                                            </div>
                                            <div class="top-author__stats d-flex">
                                                <div class="follow-author">
                                                    <button class="btn btn-follow">Follow</button>
                                                </div>
                                                <div class="stats d-flex justify-content-between text-nowrap w-100">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Reputations: 12.9K"><i class="fas fa-star"></i>12.9K</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 14"><i class="fas fa-pencil-alt"></i>52</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 691"><i class="fas fa-user-plus"></i>691</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-author__item mt-4">
                                            <div class="top-author__info d-flex">
                                                <a href="#">
                                                    <img src="{{asset('layout_user/img/avartar/dustin.jpg')}}" alt="dustin">
                                                </a>
                                                <div class="d-flex flex-column justify-content-center ml-4  ">
                                                    <a href="#">Dustin Dinh</a>
                                                    <span class="d-block">@dustindinh263</span>
                                                </div>
                                            </div>
                                            <div class="top-author__stats d-flex">
                                                <div class="follow-author">
                                                    <button class="btn btn-follow">Follow</button>
                                                </div>
                                                <div class="stats d-flex justify-content-between text-nowrap w-100">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Reputations: 394"><i class="fas fa-star"></i>394</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 14"><i class="fas fa-pencil-alt"></i>14</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 691"><i class="fas fa-user-plus"></i>9</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top-author__item mt-4">
                                            <div class="top-author__info d-flex">
                                                <a href="#">
                                                    <img src="{{asset('layout_user/img/avartar/springloc.jpg')}}" alt="springloc">
                                                </a>
                                                <div class="d-flex flex-column justify-content-center ml-4  ">
                                                    <a href="#">Pi</a>
                                                    <span class="d-block">@xloc0811</span>
                                                </div>
                                            </div>
                                            <div class="top-author__stats d-flex">
                                                <div class="follow-author">
                                                    <button class="btn btn-follow">Follow</button>
                                                </div>
                                                <div class="stats d-flex justify-content-between text-nowrap w-100">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Reputations: 92"><i class="fas fa-star"></i>91</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 3"><i class="fas fa-pencil-alt"></i>2</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 1"><i class="fas fa-user-plus"></i>1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection    