@extends('auth.auth-master')

@section('content')


    <div class=" login-center">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Inscription</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" id="email" type="email" name="email" value="{{ old('email') }}">
                        <label class="mdl-textfield__label" for="email">E-Mail</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" id="name" type="text" name="name" value="{{ old('name') }}">
                        <label class="mdl-textfield__label" for="name">Nom</label>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" id="password" type="password" name="password" value="{{ old('password') }}">
                        <label class="mdl-textfield__label" for="password">Mot de passe</label>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" id="password_confirmation" type="password" name="password_confirmation">
                        <label class="mdl-textfield__label" for="password_confirmation">Confimation du mot de passe</label>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>




                    <div class="form-input">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Valider
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection