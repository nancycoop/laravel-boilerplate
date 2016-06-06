<div class="drawer mdl-layout__drawer mdl-color--grey-900 mdl-color-text--blue-grey-50">
    <header class="drawer-header">
        <div class="avatar-dropdown">
            <span>Administrateur</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons" role="presentation">arrow_drop_down</i>
                <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <li class="mdl-menu__item"><a href="#">Modifier les coordonées</a></li>
                <li class="mdl-menu__item"><a href="{{ url('/') }}" target="_blank">Accéder au site</a></li>
            </ul>
        </div>
    </header>
    <nav class="navigation mdl-navigation">
        
        
        <a class="mdl-navigation__link" href="{{ url('/admin') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Accueil</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">view_agenda</i>Pages</a>
        
        
        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href="{{ url('/logout') }}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">close</i>Déconexion</a>
        
        
    </nav>
</div>