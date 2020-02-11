@extends('customer/base')

@section('title', 'Homepage')

@section('content')
    <div class="container-fluid layout-header">
        <div class="container">
            <div class="layout-header__title layout-header__title_basic">
                ABOUT US
            </div>
            <div class="layout-header__breadcrumbs-inner">
                <ul class="alt-breadcrumb">
                    <li class="alt-breadcrumb__list-item">
                        <a class="alt-breadcrumb__link" href="index.blade.php">
                            HOME
                        </a>
                    </li>
                    <li class="alt-breadcrumb__list-item alt-breadcrumb__list-item_active">
                        ABOUT US
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid who_we-are02">
        <div class="vertical">
            <span class="vertical-top">SINCE</span> <span class="vertical-bottom">2020</span>
        </div>
        <div class="container">
            <div class="row row-who_we-are02">
                <div class="col-lg-6">
                    <div class="wrap_welcome">
                        <h5>
                            WHO WE ARE
                        </h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                            as
                            their default model text, and a search for 'lorem ipsum' will uncover.
                        </p>
                        <a class="button_who_we_are" href="Contact.blade.php">CONTACT US</a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="wrap_cascade">
                        <div class="img_front">
                            <img src="sections/who-we-are/assets/who_we_are_image1.jpg" alt="project">
                        </div>
                        <div class="img_back">
                            <img src="sections/who-we-are/assets/who_we_are_image2.jpg" alt="project">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid advancement02">
        <div class="container">
            <div class="row row-advancement02">
                <div class="col-lg-2 col-md-2">
                    <div class="wrap-progress wpap-progress-advancement02">
                        <h4 class="counter">229 </h4>
                        <p>NEW DESIGN</p>
                    </div>
                    <div class="distance-advancement02 visible-lg visible-md">
                    </div>
                    <div class="wrap-progress wpap-progress-advancement02">
                        <h4 class="counter">169 </h4>
                        <p>TEAM</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="swiper-container-advancement02 ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="wrap-advancement02">
                                    <img src="sections/advancement/assets/counter_image1.jpg" alt="project">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wrap-advancement02">
                                    <img src="sections/advancement/assets/counter_image2.jpg" alt="project">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wrap-advancement02">
                                    <img src="sections/advancement/assets/counter_image3.jpg" alt="project">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="wrap-advancement02">
                                    <img src="sections/advancement/assets/counter_image4.jpg" alt="project">
                                </div>
                            </div>
                        </div>
                        <!--  navigation buttons -->
                        <div class="swiper-button-next-advancement02">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2">
                    <div class="wrap-progress wpap-progress-advancement02">
                        <h4 class="counter">203</h4>
                        <p>FINISH PROJECT</p>
                    </div>
                    <div class="distance-advancement02 visible-lg visible-md">
                    </div>
                    <div class="wrap-progress wpap-progress-advancement02">
                        <h4 class="counter">178 </h4>
                        <p>HAPPY CLIENTS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid alt-our-story our-story02">
        <div class="section-heder">
            <div class="heder-wrap">
                <h3>
                    <span class="first-letter">O</span>OUR STORY
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="alt-our-story__accordion-inner">
                <ul class="our-story-by-date-block" id="our-story-by-date-block__accordion">
                    <li class="our-story-by-date-block__item our-story-by-date-block__item_active">
                        <div class="our-story-by-date-block__date">2016</div>
                        <div class="our-story-by-date-block__heder">Donec consequat nisi ut ligula bibendum, at
                            faucibus urna congue.
                        </div>
                        <div class="our-story-by-date-block__content">
                            <p class="our-story-by-date-block__text">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered
                                alteration in some form, by injected humour, or randomised words which don't look
                                even slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything
                                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the
                                Internet.
                            </p>
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image1.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image2.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image3.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image4.jpg" alt="project">
                        </div>
                    </li>
                    <li class="our-story-by-date-block__item">
                        <div class="our-story-by-date-block__date">2015</div>
                        <div class="our-story-by-date-block__heder">Proin vehicula turpis quis odio eleifend, ac
                            consectetur augue facilisis.
                        </div>
                        <div class="our-story-by-date-block__content">
                            <p class="our-story-by-date-block__text">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered
                                alteration in some form, by injected humour, or randomised words which don't look
                                even slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything
                                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the
                                Internet.
                            </p>
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image1.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image2.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image3.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image4.jpg" alt="project">
                        </div>
                    </li>
                    <li class="our-story-by-date-block__item">
                        <div class="our-story-by-date-block__date">2014</div>
                        <div class="our-story-by-date-block__heder">Nam placerat magna et enim accumsan luctus.
                        </div>
                        <div class="our-story-by-date-block__content">
                            <p class="our-story-by-date-block__text">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered
                                alteration in some form, by injected humour, or randomised words which don't look
                                even slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything
                                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the
                                Internet.
                            </p>
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image1.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image2.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image3.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image4.jpg" alt="project">
                        </div>
                    </li>
                    <li class="our-story-by-date-block__item">
                        <div class="our-story-by-date-block__date">2013</div>
                        <div class="our-story-by-date-block__heder">Ut vitae erat id purus facilisis aliquam ac sed
                            lacus.
                        </div>
                        <div class="our-story-by-date-block__content">
                            <p class="our-story-by-date-block__text">
                                There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered
                                alteration in some form, by injected humour, or randomised words which don't look
                                even slightly
                                believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                                there isn't anything
                                embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the
                                Internet.
                            </p>
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image1.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image2.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image3.jpg" alt="project">
                            <img class="our-story-by-date-block__image" src="blocks/our-story-by-date-accordion/assets/our_story_image4.jpg" alt="project">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection