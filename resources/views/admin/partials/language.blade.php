       @php
           $local= LaravelLocalization::getCurrentLocale() == 'en'? 'ar' : 'en'
      @endphp
     <a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($local) }}" id="languageSwitcher" data-mode="light">
         {{ strtoupper($local)}}
    </a>
