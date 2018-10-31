@extends('layouts.master')
@section('logo','/images/sst-landscape.png')
@section('content')
    <div class="" id="offers" style="margin-top: 20px;">
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/debt/1/us',
                'title' => 'Debt US',
                'desc'  => 'Debt settlement for  US',
                'img' => '/images/debt-US.png'
            ])

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/debt/1/uk',
                'title' => 'Debt UK',
                'desc'  => 'Debt settlement for UK',
                'img' => '/images/debt-UK.png'
            ] )
        </div>
    </div>
@endsection

@section('scripts')
    @parent

@endsection