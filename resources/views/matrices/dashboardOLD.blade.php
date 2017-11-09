@extends('layouts.master')
@section('content')

<div id="stock-div"></div>
{!! \Lava::render('LineChart', 'Stocks', 'stock-div') !!}


<div id="stock-div2"></div>
{!! \Lava::render('BarChart', 'Stocks2', 'stock-div2') !!}

<div id="stock-div3"></div>
{!! \Lava::render('PieChart', 'Stocks3', 'stock-div3') !!}

@endsection
