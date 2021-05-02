@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-6 pl-5 pr-5">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Mein Überblick</h5>
                    <hr>
                    <div class="graph d-flex align-items-center flex-column">
                        <p class="card-text">306h / 360h</p>
                        <div class="row w-100 rounded">
                            <div class="anwesend bg-success" style="width: 85%; height: 30px; border-top-left-radius: 15px; border-bottom-left-radius: 15px;"></div>
                            <div class="verspaetung bg-warning" style="width: 10%;"></div>
                            <div class="missed bg-danger" style="width: 5%; border-top-right-radius: 15px; border-bottom-right-radius: 15px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-5">
                <div class="card-body">
                    <h5 class="card-title">Stundenplan</h5>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="timetable-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Mathe</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>07:55Uhr<br>09:25Uhr</p>
                                    </div>
                                    <div class="col-3 text-center text-danger">
                                        <p>Entfall</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timetable-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Sport</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>09:45Uhr<br>11:15Uhr</p>
                                    </div>
                                    <div class="col-3 text-center text-info">
                                        <p>Außerhalb</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timetable-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Englisch</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>11:35Uhr<br>13:05Uhr</p>
                                    </div>
                                    <div class="col-3 text-center text-secondary">
                                        <p>316</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="timetable-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Chemie</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>14:00Uhr<br>15:30Uhr</p>
                                    </div>
                                    <div class="col-3 text-center text-secondary">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-6 pl-5 pr-5">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Abwesendheiten und Verspätungen</h5>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" onclick="window.location=`{{ url('student/misses/1') }}`" style="cursor: pointer;">
                            <div class="missings-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Deutsch</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>11.04.2021</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>Ganze Stunde</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item" onclick="window.location=`{{ url('student/misses/2') }}`" style="cursor: pointer;">
                            <div class="missings-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Physik</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>05.04.2021</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>20 Minuten</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card shadow mt-5">
                <div class="card-body">
                    <h5 class="card-title">Entschuldigungen</h5>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" onclick="window.location=`{{ url('student/excuses/1') }}`" style="cursor: pointer;">
                            <div class="excuses-item">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p>Mathe</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>13.04.2021</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p>Ausstehend</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
