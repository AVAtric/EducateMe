@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="animal_card" style="width:{{$animal->width}}px;">
                <img class="card-img-top center" id="animal_img" src="img/{{$animal->filename}}" style="width:{{$animal->width}}px;height:{{$animal->height}}px">

                <div class="card-body">
                    <p class="text-center" id="animal_text">This is
                        {{$animal->prefix}}
                        {{$animal->name}}.
                    </p>
                    <button type="button" id="target" class="btn btn-warning btn-lg btn-block">Weiter</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('javascript')
    <script type="application/javascript">
    $("#target" ).click(function() {
        $.getJSON( "animal/get", function( data ) {
            $("#animal_text").text('This is ' + data.prefix + ' ' + data.name + '.');
            $('#animal_img').attr('src', 'img/' + data.filename);
            $('#animal_img').attr('style', 'width:' + data.width + 'px;height:' + data.height + 'px');
            $('#animal_card').attr('style', 'width:' + data.width + 'px;');
        });
    });
    </script>
@endsection

