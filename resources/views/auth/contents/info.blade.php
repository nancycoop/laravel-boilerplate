@extends('auth.master')
@section('title', 'Admin')
@section('content')

    <div class="mdl-color--white mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Informations</h2>
        </div>
        <div class="mdl-card__supporting-text mdl-cell--12-col">
            <form action="{{ url('/admin/info') }}" method="POST">

                    {{ csrf_field() }}

                    @foreach ($infos as $info)
                        <!-- {{$info->name}} -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{$info->name}}">
                            <input
                                class="mdl-textfield__input"
                                id="{{$info->name}}"
                                type="{{$info->type}}"
                                name="{{$info->name}}"
                                value="{{$info->value}}"
                                @if($info->pattern)
                                    pattern="{{$info->pattern}}"
                                @endif
                            >
                            <label class="mdl-textfield__label" for="{{$info->name}}">{{$info->label}}</label>               
                        </div>
                    @endforeach


                <!--
                <div class="spacer large"></div>

                
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" id="facebook" type="text" name="facebook" value="">
                    <label class="mdl-textfield__label" for="facebook">Facebook</label>               
                </div>
                -->



                <div class="spacer large"></div>
               
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored center">
                    Valider
                </button>

            </form>

        </div>
    </div>

@endsection