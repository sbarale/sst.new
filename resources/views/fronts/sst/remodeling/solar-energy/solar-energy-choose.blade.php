@extends('fronts.sst.layout')
@section('logo','/images/sst-landscape.png')
@section('content')
    <div class="" id="offers" style="margin-top: 20px;">
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/1/us',
                'title' => 'Solar US',
                'desc'  => 'Solar Calculator for US',
                'img' => '/images/solar-usa.png'
            ])

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/au/1',
                'title' => 'Solar AU',
                'desc'  => 'Solar Calculator for AU',
                'img' => '/images/solar-au.png'
            ] )
        </div>
        <div class="row">

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/nl/1',
                'title' => 'Solar NL',
                'desc'  => 'Solar Calculator for NL',
                'img' => '/images/solar-nl.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/be/1',
                'title' => 'Solar BE',
                'desc'  => 'Solar Calculator for BE',
                'img' => '/images/solar-be.png'
            ] )
        </div>
        <div class="row">
            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/de/1',
                'title' => 'Solar DE',
                'desc'  => 'Solar Calculator for DE',
                'img' => '/images/solar-de.png'
            ] )

            @include( 'fronts.sst.bullets.bullet' ,[
                'href'  => '/remodeling/solar-energy/fr/1',
                'title' => 'Solar FR',
                'desc'  => 'Solar Calculator for FR',
                'img' => '/images/solar-fr.png'
            ] )
        </div>
    </div>
@endsection

@section('scripts')
    @parent

@endsection