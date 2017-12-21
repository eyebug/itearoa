@extends('layouts.itearoa')

@section('backgroundUrl'){{asset('img/finger.jpeg')}}@stop

@section('productsfooter')
    <style type="text/css">
        h6{
            text-transform: none;
        }
    </style>
    <div class="col-lg-4" style="margin-left: 40px">
        <ul class="list-unstyled">
            <li>
                <h6>
                    <a href="{{route('product')}}">Products</a>
                </h6>
                <ul class="list-unstyled">
                    <li class="py-3">
                        <h6>
                            <a href="{{route('detail')}}">Iservice</a>
                        </h6>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('detail')}}">Interactive Service</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">Smart Control</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">720° Panoramic room viewing</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">Room Booking</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">My Residence</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">Local Interest</a>
                            </li>
                            <li>
                                <a href="{{route('detail')}}">View My Bill</a>
                            </li>

                        </ul>
                    </li>
                    <li class="py-3">
                        <h6>
                            <a href="{{route('detail')}}">TCS</a>
                        </h6>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('detail')}}">Connect center，Instant service.</a>
                            </li>
                        </ul>
                    </li>
                    <li class="py-3">
                        <h6>
                            <a href="{{route('detail')}}">Consultancy</a>
                        </h6>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('detail')}}">Helping to develop the professional IT infrastructure</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
@overwrite