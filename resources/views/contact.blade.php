@extends('layouts.itearoa')

@section('backgroundUrl'){{asset('img/skyblue.jpg')}}@stop


@section('mainContent')
    <div class="container px-5 text-center" style="padding-bottom:16rem">
        <div class="row">
            <div class="col-lg">
                <div class="py-4 hidden-lg-down"></div>
                <div class="py-5 hidden-xs-down"></div>
                <h1 class="mt-5 mb-4" style="font-size:1rem">Contact</h1>
                <h2 class="display-4"></h2>
                <div class="row">
                    <div class="py-4 px-4 h-100" style="width:50%;">
                        <h5>Hamilton, New Zealand</h5>
                        <p>Itearoa Ltd<br>Suit 10, Level 4,<br>169 London Street, Hamilton<br>
                            3204, New Zealand.</p>
                    </div>


                    <div class="py-4 px-4 h-100" style="width:50%;">
                        <h5>Beijing, China</h5>
                        <p>北京市海淀区皂君庙路5号卉园大楼2层</p>
                    </div>
                </div>
                <hr class="mt-5" style="border:0.4rem solid #fff;width:16rem;background-color:#fff">
                <div class="py-4"></div>
            </div>
        </div>
    </div>
@stop