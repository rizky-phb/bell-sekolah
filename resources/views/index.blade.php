@extends('templates')
@section('title', 'Home Page')

@section('content')
@foreach($schedules as $schedule)
    <tr>
        <td>{{ $schedule->hari }}</td>
        <td>{{ $schedule->start_time }} - {{ $schedule->end_time }}</td>
        <td>{{ $schedule->jam_ke }}</td>
        <td>{{ $schedule->kelas }}</td>
        <td>{{ $schedule->kode_pelajaran }}</td>
    </tr>
@endforeach

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