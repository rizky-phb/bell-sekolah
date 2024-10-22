@extends('templates')
@section('title', 'Home Page')

@section('content')
<div class="wrapper">
    <div id="slider">
        <div id="slide-wrapper" class="rounded clear">
            <!-- ################################################################################################ -->
            <figure id="slide-1">
                <a class="view" href="#"><img src="{{ asset('academic-education/images/demo/slider/1.png') }}" alt=""></a>
                <figcaption>
                    <h2>Mts Al-Huda Reban</h2>
                    <p>Nama :</p>
                    <p>Nisn :</p>
                    <p>Kelas :</p>

                </figcaption>
            </figure>
        </div>
    </div>
</div>
@endsection