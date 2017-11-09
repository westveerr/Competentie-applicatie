@extends('layouts.master')
@section('content')


<div id="stock-div"></div>
{!! \Lava::render('LineChart', 'Stocks', 'stock-div') !!}

@endsection
