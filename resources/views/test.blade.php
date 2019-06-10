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
                        <input type="hidden" id="animal_overall" value="1">
                        <input type="hidden" id="animal_right" value="0">
                        <button type="button" id="target" class="btn btn-warning btn-lg btn-block mt-3">Weiter</button>
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
                $('#animal_overall').val(parseInt($('#animal_overall').val()) + 1);
                $('#animal_right').val(parseInt($('#animal_right').val()) + parseInt(data));

                if(parseInt($('#animal_overall').val()) <= 10){
                    $.getJSON( "animal/get", function( data ) {
                        $("#animal_text").text('This is ' + data.prefix);
                        $('#animal_img').attr('src', 'img/' + data.filename);
                        $('#animal_img').attr('style', 'width:' + data.width + 'px;height:' + data.height + 'px');
                        $('#animal_card').attr('style', 'width:' + data.width + 'px;');
                        $('#animal_id').val(data.id);
                        $('#animal_name').val('');
                    });
                } else {
                    $.post( "save/score", { score: parseInt($('#animal_right').val()) * 10}, function(data) {
                        $('#animal_img').remove();
                        $('.card-body').text('Sie haben ' + parseInt(data.score) + ' Punkte erreicht!')
                    })
                }

            });
        });
    </script>
@endsection