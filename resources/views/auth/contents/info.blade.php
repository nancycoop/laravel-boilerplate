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


                
                <div class="spacer large"></div>

                @foreach ($socials as $social)
                        <!-- {{$info->name}} -->
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label social-input {{$social->name}}">
                            <input
                                class="mdl-textfield__input"
                                id="{{$social->name}}"
                                type="url"
                                name="social-{{$social->name}}"
                                value="{{$social->value}}"
                            >
                            <label class="mdl-textfield__label" for="{{$social->name}}">
                                @if($social->iconType=="fa")
                                    <i class="fa {{$social->icon}}" aria-hidden="true"></i>
                                @endif
                            
                            </label>               
                        </div>
                    @endforeach
               



                <div class="spacer large"></div>
               
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored center">
                    Valider
                </button>

            </form>

        </div>
    </div>

@endsection