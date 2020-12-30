@extends('user/layouts/master')
@section('title','All Post - Index')
@section('content')
<main class="main-content">
        <div class="banner">
            <a href="#" target="blank">
                <div style="background-color: #15154F;">
                    <div class="banner__container container w-100 px-0">
                        <img src="{{asset('layout_user/img/banner/banner002.png')}}" alt="banner" class="banner__img">
                    </div>
                </div>
            </a>
        </div>
        <div class="container post-body position-relative">
            <div class="row">
                <div class="p-0 col-lg-1">
                    <div class="post-actions d-flex flex-column align-items-center mx-auto">
                        <span class="avatar--side"><a href="/user"><img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="avatar"
                                    class="avatar--lg"></a></span>
                        <div class="votes  votes--side post-actions__vote mb-1">
                            <button class="icon-btn vote" data-toggle="tooltip" title="Up vote"><i
                                    class="fas fa-caret-up voted"></i></button>
                            <div class="points text-muted text-center voted">+13</div>
                            <button class="icon-btn vote" data-toggle="tooltip" title="Down vote"><i
                                    class="fas fa-caret-down"></i></button>
                        </div>
                        <div class="clip mb-4">
                            <button class="el-button post-actions__clip el-button--default" data-toggle="tooltip"
                                title="Clip this post"><i class="fas fa-paperclip"></i></button>
                        </div>
                        <div class="social-sharing mb-2 social-sharing--horizontal social-sharing--small">
                            <a href="#" tooltip-placement="right" class="link link--muted"
                                title="Share a link to this page on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" tooltip-placement="right" class="link link--muted"
                                title="Share a link to this page on Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="post-body__main col-lg-8 col-md-12">
                    <article class="post-content">
                        <header class="mb-3">
                            <div class="d-flex align-items-start mb-5">
                                <div class="post-author mb-2 mb-sm-0">
                                
                                    <a href="/user" class="d-fex mr-5"><img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="pi-avt"
                                            class="avatar avatar--lg"></a>
                                    <div class="post-author__info mr-1">
                                        <div class="d-flex">
                                            <div class="d-lex mr-3">
                                                <a href="/user" class="text-bold post-author__name">marykyle</a>
                                                <span class="text-muted">@marykyle</span>
                                            </div>
                                            <div class="follow">
                                                <button class="el-button el-button--mini-mini is-plain">Follow</button>
                                            </div>
                                        </div>
                                        <div class="stats">
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Reputations: 12.9K"><i class="fas fa-star"></i>12.9K</span>
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Followers: 691"><i class="fas fa-user-plus"></i>691</span>
                                            <span class="stat-item text-muted" data-toggle="tooltip"
                                                title="Posts: 14"><i class="fas fa-pencil-alt"></i>52</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-meta d-flex flex-column flex-wrap align-items-sm-end">
                                    <div class="text-muted">
                                        Published about 1 hour ago <span>&nbsp;-&nbsp;2 min read</span>
                                    </div>
                                    <div class="stats">
                                        <span class="stat-item text-muted" data-toggle="tooltip" title="Views: 1K"><i
                                                class="far fa-eye mr-1"></i>1K</span>
                                        <span class="stat-item text-muted" data-toggle="tooltip" title="Comments: 50"><i
                                                class="fas fa-comments mr-1"></i>50</span>
                                        <span class="stat-item text-muted" data-toggle="tooltip" title="Clips: 153"><i
                                                class="fas fa-paperclip mr-1"></i></i>153</span>

                                    </div>
                                </div>
                            </div>
                            <h1 class="article-content__title">{{$post->title}}</h1>
                        </header>
                        <div class="d-md-flex align-items-top justify-content-between">
                            <div class="tags">
                                <a href="#" class="el-tag el-tag--info el-tag--mini">BEM</a>
                                <a href="#" class="el-tag el-tag--info el-tag--mini">CSS3</a>
                                <a href="#" class="el-tag el-tag--info el-tag--mini">HTML</a>
                                <a href="#" class="el-tag el-tag--info el-tag--mini">Front-end</a>
                            </div>
                            <div class="post__menu">
                                <div class="el-dropdown">
                                    <button class="post-menu__btn el-button text-muted p-0 el-button--text">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="el-dropdown-menu el-popper publish-dropdown el-dropdown-menu--wide el-dropdown-menu--medium"
                                        data-toggle="tooltip" title="Show more options">
                                        <li><a href="publish/post">
                                                <span class="mr-3"><i class="far fa-flag"></i></span>Report</a>
                                        </li>
                                        <li><a href="publish/series">
                                                <span class="mr-3"><i class="far fa-plus-square"></i></span>Add to my
                                                series</a>
                                            </a></li>
                                        <li><a href="question/ask">
                                                <span class="mr-3"><i class="fas fa-magic"></i></span>Hightlighting code
                                                blocks</a>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="md-contents article-content__body my-2 flex-fill">
                            <h3>Content here</h3>
                            <p>{!!$post->content!!}</p>
                        </div>
                        <br>
                        <p title="People cannot distribute, remix, adapt, and build upon this workwithout author's permission (or as permitted by fair use)."
                            class="license-text text-muted">All Rights Reverseed</p>
                        <div class="post-footer d-flex align-items-center justify-content-end">
                            <div class="social-sharing mr-1 social-sharing--vertical social-sharing--medium">
                                <a href="#" tooltip-placement="right" class="link link--muted"
                                    title="Share a link to this page on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" tooltip-placement="right" class="link link--muted"
                                    title="Share a link to this page on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="post__menu">
                                <div class="el-dropdown">
                                    <button class="post-menu__btn el-button text-muted p-0 el-button--text">
                                        <i class="fas fa-ellipsis-h"></i>
                                    </button>
                                    <ul class="el-dropdown-menu el-popper publish-dropdown el-dropdown-menu--wide el-dropdown-menu--medium"
                                        data-toggle="tooltip" title="Show more options">
                                        <li><a href="publish/post">
                                                <span class="mr-3"><i class="far fa-flag"></i></span>Report</a>
                                        </li>
                                        <li><a href="publish/series">
                                                <span class="mr-3"><i class="far fa-plus-square"></i></span>Add to my
                                                series</a>
                                            </a></li>
                                        <li><a href="question/ask">
                                                <span class="mr-3"><i class="fas fa-magic"></i></span>Hightlighting code
                                                blocks</a>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="post-body__right col-lg-3 p-0">
                    <div class="sticky-sidebar">
                        <div class="sticky-sidebar__inner">
                            <div class="post-index hidden-sm-down">
                                <div class="section-title-line align-items-lg-baseline">
                                    <h4 class="text-uppercase">Table of contents</h4>
                                    <hr class="section-title__filler ml-3">
                                </div>
                                <ul class="content-outline list-unstyled mb-5">
                                    <li class="content-outline__item content-outline__item--level-1">
                                        <a href="#" class="link active">Content 1</a>
                                    </li>

                                    <li class="content-outline__item content-outline__item--level-1">
                                        <a href="#" class="link">Content 2</a>
                                    </li>
                                    <li class="content-outline__item content-outline__item--level-1">
                                        <a href="#" class="link">Content 3</a>
                                    </li>
                                    <li class="content-outline__item content-outline__item--level-2">
                                        <a href="#" class="link">Content 3.1</a>
                                    </li>
                                    <li class="content-outline__item content-outline__item--level-3">
                                        <a href="#" class="link">Content 3.1.1</a>
                                    </li>
                                </ul>
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
                                                        title="Followers: 100"><i
                                                            class="fas fa-user-plus"></i>100</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="top-organization__item d-flex">
                                            <div class="top-organization__img">
                                                <a href="#"><img src="{{asset('layout_user/img/organization/nghethuatcoding.png')}}"
                                                        alt="nghethuatcoding"></a>
                                            </div>
                                            <div class="top-organization__info">
                                                <a href="#" class="word-break">Nghệ thuật Coding</a>
                                                <div class="stats text-nowrap">
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Posts: 18"><i class="fas fa-pencil-alt"></i>18</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Members: 2"><i class="fas fa-users"></i>2</span>
                                                    <span class="stat-item text-muted" data-toggle="tooltip"
                                                        title="Followers: 172"><i
                                                            class="fas fa-user-plus"></i>172</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="top-organization__item d-flex">
                                            <div class="top-organization__img">
                                                <a href="#"><img src="{{asset('layout_user/img/organization/sunCubeBranch.png')}}"
                                                        alt="sunCubeBranch"></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="post-recommendations bg-light">
            <div class="container py-2">
                <div class="post-section">
                    <div class="post-section__related">
                        <h3 class="post-section__title">Related</h3>
                        <div class="post-section__container">
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="post-section__more">
                        <h3 class="post-section__title">More from author</h3>
                        <div class="post-section__container">
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-section__item">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="post-card__title "><a href="#" class="link link--plain">Tìm hiểu
                                                về Amazon web services</a></div>
                                        <div class="post-card__author"><a class="link text-primary" href="/user">Nguyen
                                                Quang Huy</a></div>
                                        <span class="text-muted"> 12 min read</span>
                                        <div class="d-flex">
                                            <div class="stats">
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Views: 1K"><i class="far fa-eye mr-1"></i>1K</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Clips: 153"><i
                                                        class="fas fa-paperclip mr-1"></i></i>153</span>
                                                <span class="stat-item text-muted" data-toggle="tooltip"
                                                    title="Comments: 50"><i class="fas fa-comments mr-1"></i>50</span>
                                            </div>
                                            <div class="points">
                                                <div class="carets mr-2">
                                                    <i class="fas fa-caret-up voted"></i>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <span class="text-muted">234</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="comment-thread">
                    <h3 class="post-section__title">Comments</h3>
                    <div class="comment__container">
                        <div class="comment__tabs">
                            <ul class="tab__list">
                                <li id="default-comment__tab" class="tab-item active"
                                    onclick="openTab(event,'write-tab')">Write</li>
                            </ul>
                            <div class="tab__content">
                                <div class="tab__pane" id="write-tab">
                                    <div class="comment__form">
                                        <div class=" avatar--md">
                                            <img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="pi">
                                        </div>
                                        <div class="editor-lite">
                                            <textarea name="comment__editor" id="basic__editor" cols="30" rows="10" placeholder="Write some respone..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-comment d-flex justify-content-end">
                                    <a href="#"
                                        class="post-comment-btn el-button btn btn-sm btn-primary el-button--primary is-disabled">Post
                                        comment</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="comment-item">
                            <div class="comment-item__info">
                                <div class="user--inline d-inline-flex flex-shrink-0">
                                    <a href="" class="d-flex mr-3">
                                        <div class="d-inline-block avatar--sm">
                                            <img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="avatar">
                                        </div>
                                    </a>
                                    <span>
                                        <a href="/user" class="mr-3 el-popover__reference">Dinh Loc Phuc</a>
                                    </span>
                                    <span class="text-muted">@sucanabo</span>
                                </div>
                                <div class="comment__time">
                                    <span>in less than a minute</span>
                                </div>
                            </div>
                            <div class="comment-item__content">
                                render ra comment dc editor
                            </div>
                            <div class="comment-item__interactive">
                                <div class="d-flex text-muted">
                                    <div class="score">
                                        <button class="icon-btn vote"><i class="fas fa-chevron-up  voted-up"></i></i></button>
                                        <span class="comment-points text-muted">0</span>
                                        <button class="icon-btn vote"><i class="fas fa-chevron-down"></i></button>
                                    </div>
                                    <div class="text-muted mr-2 ml-2">|</div>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Reply"><span>Reply</span></a>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Share a link to this comment"><span>Share</span></a>
                                    <div class="comment__menu ml-05 el-dropdown">
                                        <span class="el-dropdown-selfdefine"><i class="fas fa-ellipsis-h icon--small"></i></span>
                                        <ul class="el-dropdown-menu el-popper publish-dropdown el-dropdown-menu--wide el-dropdown-menu--medium"
                                            data-toggle="tooltip" title="Show more options">
                                            <li><a href="publish/post">
                                                    <span class="mr-3"><i class="far fa-flag"></i></span>Report</a>
                                            </li>
                                            <li><a href="question/ask">
                                                    <span class="mr-3"><i class="fas fa-magic"></i></span>Hightlighting code
                                                    blocks</a>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="comment-item">
                            <div class="comment-item__info">
                                <div class="user--inline d-inline-flex flex-shrink-0">
                                    <a href="" class="d-flex mr-3">
                                        <div class="d-inline-block avatar--sm">
                                            <img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="avatar">
                                        </div>
                                    </a>
                                    <span>
                                        <a href="/user" class="mr-3 el-popover__reference">Dinh Loc Phuc</a>
                                    </span>
                                    <span class="text-muted">@sucanabo</span>
                                </div>
                                <div class="comment__time">
                                    <span>in less than a minute</span>
                                </div>
                            </div>
                            <div class="comment-item__content">
                                render ra comment dc editor
                            </div>
                            <div class="comment-item__interactive">
                                <div class="d-flex text-muted">
                                    <div class="score">
                                        <button class="icon-btn vote"><i class="fas fa-chevron-up"></i></i></button>
                                        <span class="comment-points text-muted">0</span>
                                        <button class="icon-btn vote"><i class="fas fa-chevron-down  voted-down"></i></button>
                                    </div>
                                    <div class="text-muted mr-2 ml-2">|</div>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Reply"><span>Reply</span></a>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Share a link to this comment"><span>Share</span></a>
                                    <div class="comment__menu ml-05 el-dropdown">
                                        <span class="el-dropdown-selfdefine"><i class="fas fa-ellipsis-h icon--small"></i></span>
                                        <ul class="el-dropdown-menu el-popper publish-dropdown el-dropdown-menu--wide el-dropdown-menu--medium"
                                            data-toggle="tooltip" title="Show more options">
                                            <li><a href="publish/post">
                                                    <span class="mr-3"><i class="far fa-flag"></i></span>Report</a>
                                            </li>
                                            <li><a href="question/ask">
                                                    <span class="mr-3"><i class="fas fa-magic"></i></span>Hightlighting code
                                                    blocks</a>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="comment-item">
                            <div class="comment-item__info">
                                <div class="user--inline d-inline-flex flex-shrink-0">
                                    <a href="" class="d-flex mr-3">
                                        <div class="d-inline-block avatar--sm">
                                            <img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="avatar">
                                        </div>
                                    </a>
                                    <span>
                                        <a href="/user" class="mr-3 el-popover__reference">Dinh Loc Phuc</a>
                                    </span>
                                    <span class="text-muted">@sucanabo</span>
                                </div>
                                <div class="comment__time">
                                    <span>in less than a minute</span>
                                </div>
                            </div>
                            <div class="comment-item__content">
                                render ra comment dc editor
                            </div>
                            <div class="comment-item__interactive">
                                <div class="d-flex text-muted">
                                    <div class="score">
                                        <button class="icon-btn vote"><i class="fas fa-chevron-up "></i></i></button>
                                        <span class="comment-points text-muted">0</span>
                                        <button class="icon-btn vote"><i class="fas fa-chevron-down"></i></button>
                                    </div>
                                    <div class="text-muted mr-2 ml-2">|</div>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Reply"><span>Reply</span></a>
                                    <a href="" class="mr-3 cursor-pointer link" data-toggle="tooltip" title="Share a link to this comment"><span>Share</span></a>
                                    <div class="comment__menu ml-05 el-dropdown">
                                        <span class="el-dropdown-selfdefine"><i class="fas fa-ellipsis-h icon--small"></i></span>
                                        <ul class="el-dropdown-menu el-popper publish-dropdown el-dropdown-menu--wide el-dropdown-menu--medium"
                                            data-toggle="tooltip" title="Show more options">
                                            <li><a href="publish/post">
                                                    <span class="mr-3"><i class="far fa-flag"></i></span>Report</a>
                                            </li>
                                            <li><a href="question/ask">
                                                    <span class="mr-3"><i class="fas fa-magic"></i></span>Hightlighting code
                                                    blocks</a>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="post-actions--res">
            <div class="d-flex justify-content-between">
                <div class="post-action--res__left d-flex align-items-center">
                    <span><a href="/user"><img src="{{asset('layout_user/img/avartar/pi.jpg')}}" alt="avatar"
                        class="avatar--lg"></a>
                    </span>
                    <div class="votes--bottom d-flex">
                        <button data-toggle="tool-tip" title="Up vote" class="el-button el-button--text"><i class="fas fa-arrow-up text-muted"></i></button>
                        <div class="points">+13</div>
                        <button data-toggle="tool-tip" title="Down vote" class="el-button el-button--text"><i class="fas fa-arrow-down text-muted"></i></button>
                    </div>
                </div>
                <div class="post-action--res__right d-flex">
                        <button class="el-button post-actions__clip el-button--default" data-toggle="tooltip"
                            title="Clip this post"><i class="fas fa-paperclip"></i></button>
                        <button href="#" class="el-button post-actions__clip el-button--default"
                            title="Share a link to this page on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button href="#" class="el-button post-actions__clip el-button--default"
                            title="Share a link to this page on Twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button href="#" class="el-button post-actions__clip el-button--default"
                            title="Share a link to this page on Twitter">
                            <i class="fab fa-google-plus-g"></i>
                        </button>
                </div>
            </div>
        </div>
    </main>
@endsection