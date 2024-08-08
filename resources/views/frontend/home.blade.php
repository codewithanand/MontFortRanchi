@extends('layouts.app')

@section('title', 'Home')

@section('styles')

@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="p-0 pb-5 mb-5 container-fluid">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
                <!-- <li data-target="#header-carousel" data-slide-to="4"></li> -->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="https://www.montfortranchiorg.com/site/img/carousel-1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-content-end justify-content-center">
                        <div class="p-5_" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3 ">PROVINCE OF RANCHI</h5>
                            <h4 class="text-white display-5 mb-md-4 ">Montfort Brothers of St. Gabriel
                                Province of Ranchi</h4>
                            <!-- <a href="" class="mt-2 btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item " style="min-height: 300px;">
                    <img class="position-relative w-100" src="https://www.montfortranchiorg.com/site/img/carousel-4.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-content-end justify-content-center">
                        <div class="p-5_" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3 ">PROVINCE OF RANCHI</h5>
                            <h4 class="text-white display-5 mb-md-4 ">Montfort Brothers of St. Gabriel
                                Province of Ranchi</h4>
                            <!-- <a href="" class="mt-2 btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="https://www.montfortranchiorg.com/site/img/carousel-2.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5_" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">PROVINCE OF RANCHI</h5>
                            <h4 class="text-white display-5 mb-md-4">Montfort Brothers of St. Gabriel
                                Province of Ranchi</h4>
                            <!-- <a href="" class="mt-2 btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="https://www.montfortranchiorg.com/site/img/carousel-3.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5_" style="width: 100%; max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-md-3">PROVINCE OF RANCHI</h5>
                            <h4 class="text-white display-5 mb-md-4">Montfort Brothers of St. Gabriel
                                Province of Ranchi</h4>
                            <!-- <a href="" class="mt-2 btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid ">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <h1 class="mb-5">From the Provincial Superior</h1>
                    <h5 class="mb-4 font-italic">It is always easy to <span class="text-danger"> GIVE EXAMPLES</span> but it
                        is always <span class="text-danger">DIFFICULT TO BECOME AN EXAMPLE</span> .</h5>
                </div>
                <div class="col-lg-12 mt-5 mt-lg-0 "><img class="img-fluid rounded w-25 float-right mb-4 ml-4 "
                        src="https://www.montfortranchiorg.com/site/img/superior.jpg" alt="Image" />
                    <p class="text-justify ">Role models are people who influence others by serving as examples. They are
                        often admired by the people who emulate therm. Through their perceived personal qualities,
                        behaviours and achievements they can inspire others to strive and develop without providing any
                        direct instruction. Being positive role model actually requires effort, fore-thought and
                        self-control. Because people are watching you all the time, your actions, believes and attitudes
                        become integrated into other people&rsquo;s lives. People tend to unconsciously imitate and take on
                        the traits of others over a period of time, therefore, always be mindful of how you act and behave.
                        Being aware of this huge responsibility can encourage you to better yourself.</p>
                    <p class="text-justify">Everyone has the capacity to become a role model. You may already play that role
                        for someone and not even know it. You don&rsquo;t have to be famous, brilliant or a genius to be a
                        role model for others. Simple thing like being a good listener is good enough at times. Help others
                        to recognize their strengths, show kindness and be an encouraging person. When you see something
                        beautiful in someone, tell them. It may take a second to say but for them it may last a lifetime.
                    </p>
                    <h5 class="text-success mt-4 mb-5 font-italic text-center_">BECOME AN EXAMPLE!</h5>
                    <div class=" float-right">
                        <h6 class="text-right">- Bro. Herman Bijay Lakra</h6>
                        <h6 class="text-right">Provincial Superior</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blog Start -->
    <div class="container-fluid">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0">
                    <h1 class="mb-5">News Bulletin</h1>
                </div>
                <div class="col-lg-12">
                    <div class="pb-3 row">
                        <meta property="name" content="News Bulletin March-22">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="2023-10-04T14:05:15+00:00">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                            content="2023-10-03T17:27:01+00:00">

                        <div class="mb-4 col-lg-3">
                            <div class="mb-2 overflow-hidden rounded blog-item position-relative" style="height: 300px">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="https://montfortranchiorg.com/storage/posts/October2023/SXtms4i49MWNNQMWYeva.jpg"
                                    alt="">
                                <a class="blog-overlay text-decoration-none"
                                    href="https://www.montfortranchiorg.com/blog/news-bulletin/news-bulletin-march-22">
                                    <h5 class="mb-3 text-white"> News Bulletin March-22</h5>
                                    <p class="m-0 text-white">Oct 3, 2023</p>
                                </a>
                            </div>
                        </div>


                        <meta property="name" content="News Bulletin April-22">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="2023-10-04T08:19:28+00:00">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                            content="2018-03-25T21:25:01+00:00">

                        <div class="mb-4 col-lg-3">
                            <div class="mb-2 overflow-hidden rounded blog-item position-relative" style="height: 300px">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="https://montfortranchiorg.com/storage/posts/October2023/h0aohrnbZvJ7yzGOdfql.jpg"
                                    alt="">
                                <a class="blog-overlay text-decoration-none"
                                    href="https://www.montfortranchiorg.com/blog/news-bulletin/news-bulletin-april-22">
                                    <h5 class="mb-3 text-white"> News Bulletin April-22</h5>
                                    <p class="m-0 text-white">Mar 25, 2018</p>
                                </a>
                            </div>
                        </div>


                        <meta property="name" content="Achieving your Dreams">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="2018-03-25T20:45:18+00:00">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                            content="2018-03-25T21:20:18+00:00">

                        <div class="mb-4 col-lg-3">
                            <div class="mb-2 overflow-hidden rounded blog-item position-relative" style="height: 300px">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="https://montfortranchiorg.com/storage/posts/March2018/rU26aWVsZ2zocWGSTE7J.jpg"
                                    alt="">
                                <a class="blog-overlay text-decoration-none"
                                    href="https://www.montfortranchiorg.com/blog/news-bulletin/achieving-your-dreams">
                                    <h5 class="mb-3 text-white"> Achieving your Dreams</h5>
                                    <p class="m-0 text-white">Mar 25, 2018</p>
                                </a>
                            </div>
                        </div>


                        <meta property="name" content="Building a solid foundation">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="2018-03-25T20:54:43+00:00">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                            content="2018-03-25T20:54:43+00:00">

                        <div class="mb-4 col-lg-3">
                            <div class="mb-2 overflow-hidden rounded blog-item position-relative" style="height: 300px">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="https://montfortranchiorg.com/storage/posts/March2018/4vI1gzsAvMZ30yfDIe67.jpg"
                                    alt="">
                                <a class="blog-overlay text-decoration-none"
                                    href="https://www.montfortranchiorg.com/blog/news-bulletin/building-a-solid-foundation">
                                    <h5 class="mb-3 text-white"> Building a solid foundation</h5>
                                    <p class="m-0 text-white">Mar 25, 2018</p>
                                </a>
                            </div>
                        </div>


                        <meta property="name" content="Never Stop Creating">
                        <meta property="author" typeof="Person" content="admin">
                        <meta property="dateModified" content="2018-06-28T00:44:31+00:00">
                        <meta class="uk-margin-remove-adjacent" property="datePublished"
                            content="2018-03-25T20:38:02+00:00">

                        <div class="mb-4 col-lg-3">
                            <div class="mb-2 overflow-hidden rounded blog-item position-relative" style="height: 300px">
                                <img class="w-100 h-100 object-fit-cover"
                                    src="https://montfortranchiorg.com/storage/posts/March2018/K804BvnOehlLao0XmI08.jpg"
                                    alt="">
                                <a class="blog-overlay text-decoration-none"
                                    href="https://www.montfortranchiorg.com/blog/news-bulletin/never-stop-creating">
                                    <h5 class="mb-3 text-white"> Never Stop Creating</h5>
                                    <p class="m-0 text-white">Mar 25, 2018</p>
                                </a>
                            </div>
                        </div>



                        <div class="col-12">
                            <nav aria-label="Page navigation">
                                <ul class="mb-0 pagination pagination-lg justify-content-center">
                                    <li class="page-item disabled">
                                        <span class="page-link" aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </li>

                                    <li class="page-item active">
                                        <a class="page-link"
                                            href="https://www.montfortranchiorg.com/blog/news-bulletin?page=1">1</a>
                                    </li>

                                    <li class="page-item disabled">
                                        <span class="page-link" aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection

@section('scripts')

@endsection
