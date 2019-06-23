@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                    <div class="media mt-5">
                        <img class="align-self-center mr-3" src="img/dab.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <p style="font-family:dk_lemon_yellow_sun_regular; font-size: 30px; text-align: left">Yeah,
                            you made it! You are logged in!</p>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <br>Above there are <b>four subjects</b> for you to choose: <br> <br> <b>1. Teach:</b> learn
                            about ALL the animals out there. <br> <b>2. Practice</b> - check out, what
                            you've already learnt. <br> <b>3. Test</b> - how many animals do you
                            already know? <br>Test your wisdom, kid! <br> <b>4. Scores</b> Check out your fabulous scores!
                            <br><b>5. Safeplace</b> If at any point you feel down or unsafe, you can come here -
                            to your Safeplace, where you can spend a few moments and you'll see: you'll be back on track in
                            no time champ. <br>
                            <br><b>And now:</b> go on and get to know all those furry and not so furry creatures of the earth!
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
