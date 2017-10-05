<!DOCTYPE html>
<html lang="en">

@section('header')
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
        <meta content="ie=edge" http-equiv="x-ua-compatible">
        <link type="text/css" rel="stylesheet"
              href="{{asset('css/screen.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <title>Itearoa Ltd</title>
        <meta property="og:title" content="Itearoa Ltd">
        <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}" sizes="32x32">

    </head>
@show

<body>

<div class="navbar-bg text-white"
     style="background-size:cover;background-image:url(@section('backgroundUrl'){{asset('img/ic.jpeg')}}@show);background-position:50% 50%;">
    <div class=" navbar-bg-inner">
        @section('navbar')
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-sm" id="topNav">
                    <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                            class="navbar-toggler navbar-toggler-right mt-4" data-target="#navbarResponsive"
                            data-toggle="collapse"
                            style="border:none" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand py-3" href="/">
                        {{--                        <img class="mt-n1rem" src="{{asset('img/logo-main.png')}}"
                        style="height:4rem" title="Itearoa Ltd">--}}
                        <h6 style="text-transform: uppercase">Itearoa Ltd</h6>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav mr-auto text-right text-md-left" style="text-transform:uppercase">
                            <li class="nav-item ml-md-5">
                                <a class="nav-link" href="{{route('product')}}">Products</a>
                            </li>
                            <li class="nav-item ml-md-5">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>
                            <li class="nav-item ml-md-5">
                                <a class="nav-link" href="{{route('news')}}">News</a>
                            </li>
                            <li class="nav-item ml-md-5">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                        @section('salesEnquiry')
                            <div class="hidden-md-down">
                                <button class="btn btn-outline-secondary mt-n025rem" data-target="#salesEnquiry"
                                        data-toggle="modal"
                                        style="padding-top:0.75rem;padding-bottom:0.75rem">Sales Enquiry
                                </button>
                            </div>
                        @show
                    </div>
                </nav>
            </div>
        @show


        @section('mainContent')
            <div class="container px-5 text-center" style="padding-bottom:16rem">
                <div class="row">
                    <div class="col-lg">
                        <div class="py-4 hidden-lg-down"></div>
                        <div class="py-5 hidden-xs-down"></div>
                        <h1 class="mt-5 mb-4" style="font-size:1rem">Our Products</h1>
                        <h2 class="display-2">Technology Service For Our Guest</h2>
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <p class="mt-4">Deliver the best experience to our guest.</p>
                            </div>
                        </div>
                        <hr class="mt-5" style="border:0.4rem solid #fff;width:16rem;background-color:#fff">
                        <div class="py-4"></div>
                    </div>
                </div>
            </div>
        @show

    </div>
</div>

@section('serviceIntro')
    <div class="mt-n16rem pb-5">
        <div class="container text-center text-primary">
            <div class="row">
                <div class="col-lg-4 my-2 my-lg-0">
                    <div class="py-5 px-5 h-100" style="background-color:#fff">
                        <h2 class="display-4">iService</h2>
                        <p class="py-4">iService, Mobile apps<br/>Cloud, Service to guest, Interactive mobile
                            application,
                            Smart control.</p>
                        <a class="mt-2 btn btn-outline-primary" href="{{route('detail')}}" role="button">Explore</a>
                    </div>
                </div>
                <div class="col-lg-4 my-2 my-lg-0">
                    <div class="py-5 px-5 h-100" style="background-color:#fff">
                        <h2 class="display-4">TCS</h2>
                        <p class="py-4">TCS, Telephone Communication Center, Connect center, instant service.</p>
                        <a class="mt-2 btn btn-outline-primary" href="{{route('detail')}}" role="button">Explore</a>
                    </div>
                </div>
                <div class="col-lg-4 my-2 my-lg-0">
                    <div class="py-5 px-5 h-100" style="background-color:#fff">
                        <h2 class="display-4">Consultancy Services</h2>
                        <p class="py-4">Consultance and training, help to build up the professional IT
                            infrastructure.</p>
                        <a class="mt-2 btn btn-outline-primary" href="{{route('detail')}}" role="button">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@show

<footer>
    <div class="py-5" style="background-color:#fbfbfb !important">
        <div class="container">


            <div class="row text-center text-lg-left">
                <div class="address">
                    <a href="{{route('home')}}">
                        {{--                        <img class="mt-n1rem" src="{{asset('img/logo-main.png')}}" style="height:4rem"
                        title="Itearoa Ltd">--}}
                        <h6 style="color: #001489">Itearoa Ltd</h6>
                    </a>
                    <div class="" style="font-size: small;padding-top: 10px; color: #999">
                        <h7>Hamilton, New Zealand</h7>
                        <p>Itearoa Ltd<br>Suit 10, Level 4,<br>169 London Street, Hamilton<br>
                            3204, New Zealand.<br>
                            <i class="fa fa-phone" aria-hidden="true"></i> +64(0)7 260 3330
                        </p>
                    </div>


                    <div class="" style="font-size: small;padding-top: 10px; color: #999">
                        <h7>Beijing, China</h7>
                        <p>
                            2F/5 Zaojunmiao Rd,<br>
                            Haidian District, Beijing<br>
                            100000, China<br>
                            <i class="fa fa-phone" aria-hidden="true"></i> +8610 64777012
                        </p>

                    </div>


                    @section('introDownload')
                        <a href="{{asset('download/iServices-introduction.pdf')}}">
                            <i class="fa fa-download" aria-hidden="true"></i> Introduction of
                            EasyiService
                        </a>
                    <br>
                        <a href="{{asset('download/TCS_Chinese_V1.0.pdf')}}">
                            <i class="fa fa-download" aria-hidden="true"></i> Introduction of
                            TCS(Chinese Only)
                        </a>
                    @show

                </div>


                @section('productsfooter')
                    <style type="text/css">
                        @media (min-width: 720px) {
                            .address {
                                margin-left: 30%;
                            }

                        }
                    </style>
                @show



                @section('aboutFooter')
                    <div class="col-lg-2 col-xl-3">
                        <ul class="list-unstyled">
                            <li class="py-3">
                                <h6>
                                    <a href="{{route('about')}}">About Us</a>
                                </h6>
                                <ul class="list-unstyled hidden-sm-down">
                                    <li>
                                        <a href="{{route('home')}}">Customers</a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @stop
                <div class="col-lg-4 col-xl-3 text-center py-3">
                    <div class="mb-3">
                        <button class="btn btn-outline-primary" data-target="#salesEnquiry" data-toggle="modal"
                                style="width:15rem">Sales Enquiry
                        </button>
                    </div>

                    @section('sns')
                        <div class="mt-5">
                            <a class="mx-2" href="http://www.itearoa.co.nz/linkedin">
                                <img src="{{asset('img/linkedin-button.svg')}}"
                                     style="height:2.5rem">
                            </a>
                            <a class="mx-2" href="http://www.itearoa.co.nz/facebook">
                                <img src="{{asset('img/facebook-logo-button.svg')}}"
                                     style="height:2.5rem">
                            </a>
                            <a class="mx-2" href="http://www.itearoa.co.nz/twitter">
                                <img src="{{asset('img/twitter.svg')}}"
                                     style="height:2.5rem">
                            </a>
                            <a class="mx-2" href="http://www.itearoa.co.nz/youtube">
                                <img src="{{asset('img/play-button-silhouette.svg')}} "
                                     style="height:2.5rem">
                            </a>
                        </div>
                    @show

                    @section('translation')
                        <div class="mt-5">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/">English</a>
                                </li>
                                <li>
                                    <a href="/">中文</a>
                                </li>
                            </ul>
                        </div>
                    @show
                </div>
            </div>
        </div>
    </div>
    <div class="py-3 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg">
                    <p class="py-2 float-md-right" style="color:#b2b2b2;font-size:90%">Copyright © 2017 Itearoa</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="salesEnquiry" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <form action="?charset=UTF-8" data-ajax="" data-auto-subscribe-mailchimp="1"
                  data-event-label="salesEnquiry" data-event-value="1" data-parsley-validate="" id="salesEnquiryForm"
                  method="POST" novalidate="">
                <div class="modal-body">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                    <img class="my-4" src="{{asset('img/logo.png')}}" style="height:3.5rem" title="Itearoa">
                    <h4 class="display-4 mb-4">Sales Enquiry</h4>
                    <div class="submit-hide">
                        <p class="text-muted mb-4">Thank you for your interest. Please complete the form below and we
                            will be in touch shortly.</p>
                        <input name="oid" type="hidden" value="00D20000000KXaF">
                        <input name="00ND0000006cTe3" type="hidden" value="Website Sales Enquiry (NZ)">
                        <div class="form-group">
                            <input class="form-control" name="email" placeholder="Email" required="" type="email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" placeholder="Phone (optional)" type="tel">
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <input class="form-control" name="first_name" placeholder="First Name (optional)">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <input class="form-control" name="last_name" placeholder="Last Name (optional)">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="company" placeholder="Company (optional)">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="00ND0000006cTe8" required="" rows="3">Please
                                contact me to tell me more about your solutions!</textarea>
                        </div>
                        <button class="btn btn-success" style="width:100%" type="submit">Send Enquiry</button>
                    </div>
                    <div class="submit-show complete-hide" style="display:none">
                        <img class="my-5"
                             src="{{asset('img/spinner.svg')}}"
                             style="height:5rem">
                    </div>
                    <div class="success-show" style="display:none">
                        <h5 class="text-success">Request Sent Successfully</h5>
                        <p>Thank you for your request, we will be in touch shortly!</p>
                    </div>
                    <div class="error-show" style="display:none">
                        <h5 class="text-success">Request Sent Successfully</h5>
                        <p>Thank you for your request, we will be in touch shortly!</p>
                    </div>
                    <div class="complete-show" style="display:none">
                        <button aria-label="Close" class="btn btn-secondary" data-dismiss="modal" type="button">Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
@section('parsley')
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script>
        Parsley.options.errorClass = 'has-danger'
        Parsley.options.successClass = 'has-success'
        Parsley.options.classHandler = function (f) {
            return f.$element.closest('.form-group');
        }
        Parsley.options.errorsWrapper = '<div class="form-control-feedback"></div>'
        Parsley.options.errorTemplate = '<div></div>'
        Parsley.options.trigger = 'change'

        $('form[data-ajax]').each(function () {
            var frm = $(this)
            frm.submit(function (ev) {
                ev.preventDefault();
                if (frm.parsley().isValid()) {
                    $.ajax({
                        type: frm.attr('method'),
                        url: frm.attr('action'),
                        data: frm.serialize(),
                        //crossDomain: true,
                        dataType: "json",
                        //jsonp: false,
                        beforeSend: function () {
                            frm.find('.submit-hide').hide();
                            frm.find('.submit-show').show();
                        },
                        complete: function () {
                            frm.find('.complete-hide').hide();
                            frm.find('.complete-show').show();
                        },
                        success: function () {
                            frm.find('.success-show').show();
                        },
                        error: function () {
                            frm.find('.error-show').show();
                        },
                    })
                }
            })
        })

    </script>
@show
</body>

</html>