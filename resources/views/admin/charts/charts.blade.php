@extends('admin.home')
@section('title')
Thống kê
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="row">
                        <div class="col-8">
                            <h1 class='title-charts'>{{ $chart1->options['chart_title'] }}</h1>
                            {!! $chart1->renderHtml() !!}
                        </div>
                        <div class="col-4">
                            <h1 class='title-charts'>{{ $chart2->options['chart_title'] }}</h1>
                            {!! $chart2->renderHtml() !!}
                        </div>
                    </div>
                    <div class="card-header">Product</div>
                    <div class="row">
                        <div class="col-8">
                            <h1 class='title-charts'>{{ $chart3->options['chart_title'] }}</h1>
                            {!! $chart3->renderHtml() !!}
                        </div>
                        <div class="col-4">
                            <h1 class='title-charts'>{{ $chart4->options['chart_title'] }}</h1>
                            {!! $chart4->renderHtml() !!}
                        </div>
                    </div>
                    <div class="card-header">Order</div>
                    <div class="row">
                        <div class="col-8">
                            <h1 class='title-charts'>{{ $chart5->options['chart_title'] }}</h1>
                            {!! $chart5->renderHtml() !!}
                        </div>
                        <div class="col-4">
                            <h1 class='title-charts'>{{ $chart6->options['chart_title'] }}</h1>
                            {!! $chart6->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}
{!! $chart4->renderJs() !!}
{!! $chart5->renderJs() !!}
{!! $chart6->renderJs() !!}
@endsection