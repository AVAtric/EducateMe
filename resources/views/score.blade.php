@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p style="font-family:dk_lemon_yellow_sun_regular; font-size:40px; text-align: center">Have a look at your
            scores. You've earned it! Continue being awesome!</p>
            <div class="card">

                <div class="card-header">This are the scores of {{\Auth::User()->name}}</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Score</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($scores as $score)

                            <tr>
                                <th scope="row">{{ $score->id }}</th>
                                <td>{{ $score->score }}</td>
                                <td>{{ $score->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
