@extends('layouts.itearoa')

@section('backgroundUrl'){{asset('img/blackboard.jpg')}}@stop


@section('mainContent')
    <div class="container px-5 text-center" style="padding-bottom:16rem">
        <div class="row">
            <div class="col-lg">
                <div class="py-4 hidden-lg-down"></div>
                <div class="py-5 hidden-xs-down"></div>
                <h1 class="mt-5 mb-4" style="font-size:1rem">Company Profile</h1>
                <h2 class="display-4"></h2>
                <div class="row">
                    <div class="col-lg-8 mx-auto" style="text-align: left">
                        <p class="mt-4">&nbsp;&nbsp;&nbsp;&nbsp;Itearoa is a company that provides IT and communication solution for hospitality industry,
                            Itearoa specializing in software solution, mobile apps, web service and network integration consultant.</p>
                        <p class="mt-4">
                            &nbsp;&nbsp;&nbsp;&nbsp;With extensive experience in the information and communications technology(ICT) industry and having established,
                            run and grown business communications products, software development services and mobile apps.
                        </p>
                        <p class="mt-4">
                            &nbsp;&nbsp;&nbsp;&nbsp;iService App is designed to provide a range of smart services to hotel and other hospitality guests,
                            enhancing the whole customer experience and adding value for the hotel.
                        </p>
                        <p class="mt-4">
                            &nbsp;&nbsp;&nbsp;&nbsp;The telephone center system TCS delivers an integrated communications solution for service businesses,
                            including contact centers, help desks and hotel developer.
                        </p>
                        <p class="mt-4">
                            &nbsp;&nbsp;&nbsp;&nbsp;Consulting implementation and training services mainly to the hospitality and IT industries for network
                            integration consultant of the hotels.
                        </p>
                    </div>
                </div>
                <hr class="mt-5" style="border:0.4rem solid #fff;width:16rem;background-color:#fff">
                <div class="py-4"></div>
            </div>
        </div>
    </div>
@stop