    <!-- navigation -->
    <header class="navigation bg-tertiary">
        <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ route('about.affiliate') }}">
                    <img loading="prelaod" decoding="async" class="img-fluid" width="70"
                        src="{{ asset('asset-affiliate/images/logo/peskin.png') }}" alt="PE Skinpro">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="{{ route('about.RaihKomisi') }}">Cara Raih Komisi</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('about.Keuntungan') }}">Keuntungan</a></li>
                    </ul>
                    <a href="{{ route('show_register') }}" class="btn btn-outline-primary">Join Affiliate</a>
                </div>
            </div>
        </nav>
    </header>
