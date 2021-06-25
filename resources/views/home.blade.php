@extends('layouts.app')

@section('content')
<div class="bg-image" style = "
    background-image: url('https://res.cloudinary.com/dzobnn87q/image/upload/v1624552317/hero-bg_d8vtco.jpg');
    height: 80vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="margin-top: 120px">
                <b style="color: #112570; font-family: Helvetica, sans-serif; font-size: 350%">Bienvenidos</b>
                <h2 style="color: #112570">Lorem ipsum dolor sit amet consectetur a</h2>
            </div>
        </div>
    </div>
    <div class="row" style="margin-left: 20px; margin-right: 20px; margin-top: 40px">
        <div class="col-md-4">
            <div class="card">
                <div class="card body text-white" style="background-color:#606D90">
                    <b style="font-family: Helvetica, sans-serif; margin-top: 20px; font-size: 250%" class="text-center">Chequeo Diario</b>
                    <img src="https://res.cloudinary.com/dzobnn87q/image/upload/v1624564976/beat_rate_svnb8r.png" class="img-fluid" alt="beat_rate.jpg" style="width: 170px; height: 170px; margin-left: 120px; margin-top:10px">
                    <button type="button" class="btn btn-dark border-secondary" style="margin-top: 10px; margin-bottom:30px; margin-left: 120px; width: 170px; border-radius: 25px"><b style="font-size:140%">Comenzar ►</b> </button>
                </div>
            </div>
        </div>
        <div class="col-md-8" style="margin-top: 75px">
            <div class="card-group">
                <div class="card border-secondary">
                    <div class="card body">
                        <img src="https://res.cloudinary.com/dzobnn87q/image/upload/v1624567927/list_icon_rvkcwp.png" class="img-fluid" alt="list_icon.jpg" style="width: 50px; height: 50px; margin-left: 120px; margin-top:15px;">
                        <b style="font-family: Helvetica, sans-serif; margin-bottom: 20px; font-size: 150%; color: #112570;" class="text-center">Ayuda</b>
                        <p class="text-secondary text-center" style="margin-left: 20px; margin-right: 20px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-primary" style="margin-top: 10px; margin-bottom:30px; margin-left: 60px; width: 170px; border-radius: 25px"><b style="font-size:140%">Revisar ►</b> </button>
                    </div>
                </div>
                <div class="card border-secondary">
                    <div class="card body">
                        <img src="https://res.cloudinary.com/dzobnn87q/image/upload/v1624567927/list_icon_rvkcwp.png" class="img-fluid" alt="list_icon.jpg" style="width: 50px; height: 50px; margin-left: 120px; margin-top:15px;">
                        <b style="font-family: Helvetica, sans-serif; margin-bottom: 20px; font-size: 150%; color: #112570;" class="text-center">Información Covid</b>
                        <p class="text-secondary text-center" style="margin-left: 20px; margin-right: 20px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-primary" style="margin-top: 10px; margin-bottom:30px; margin-left: 60px; width: 170px; border-radius: 25px"><b style="font-size:140%">Contactar ►</b> </button>
                    </div>
                </div>
                <div class="card border-secondary">
                    <div class="card body">
                        <img src="https://res.cloudinary.com/dzobnn87q/image/upload/v1624567927/list_icon_rvkcwp.png" class="img-fluid" alt="list_icon.jpg" style="width: 50px; height: 50px; margin-left: 120px; margin-top:15px;">
                        <b style="font-family: Helvetica, sans-serif; margin-bottom: 20px; font-size: 150%; color: #112570;" class="text-center">Historial</b>
                        <p class="text-secondary text-center" style="margin-left: 20px; margin-right: 20px">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="btn btn-primary" style="margin-top: 10px; margin-bottom:30px; margin-left: 60px; width: 170px; border-radius: 25px"><b style="font-size:140%">Ir ►</b> </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<div class="bg-image" style = "
    background-image: url('https://res.cloudinary.com/dzobnn87q/image/upload/v1624578302/blanco_xlj8et.jpg');
    height: 23vh;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">
</div>
@endsection
