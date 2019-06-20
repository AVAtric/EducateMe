@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="animal_card" style="width:{{$animal->width}}px;">
                    <img class="card-img-top center" id="animal_img" src="img/{{$animal->filename}}" style="width:{{$animal->width}}px;height:{{$animal->height}}px">
                    <div class="card-body">
                        <p class="text-center" id="animal_text">This is {{$animal->prefix}}</p>
                            <input type="text" id="animal_name" class="center"/>
                            <input type="hidden" id="animal_id" value="{{$animal->id}}">
                        <button type="button" id="target" class="btn btn-warning btn-lg btn-block mt-3">Weiter</button>
                        <div id="animal_alert" class="alert alert-danger alert-dismissible fade mt-3" role="alert">
                            <strong>Whoops!</strong> Try again!
                        </div>
                        <div id="animal_alert_pos" class="alert alert-success alert-dismissible fade mt-3" role="alert">
                            <strong>Great!</strong> Go on!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="application/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#target" ).click(function() {
            $.post( "animal/check", { name: $('#animal_name').val(), id: $('#animal_id').val()}, function(data) {
                if(data == 0){
                    $('#animal_alert').addClass('show');
                }
                else if (data == 1)
                {
                    $('#animal_alert').removeClass('show');
                    $('#animal_alert_pos').addClass('show');

                    setTimeout(
                        function()
                        {
                            $('#animal_alert_pos').removeClass('show');

                            $.getJSON( "animal/get", function( data ) {
                                $("#animal_text").text('This is ' + data.prefix);
                                $('#animal_img').attr('src', 'img/' + data.filename);
                                $('#animal_img').attr('style', 'width:' + data.width + 'px;height:' + data.height + 'px');
                                $('#animal_card').attr('style', 'width:' + data.width + 'px;');
                                $('#animal_id').val(data.id);
                                $('#animal_name').val('');
                            });
                        }, 3000);
                }
            });
        });
    </script>
@endsection
