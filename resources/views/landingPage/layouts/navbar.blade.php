    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('assets/landingPage') }}/img/bayesianheader.png" alt="..." width="150px">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarLandings" href="{{ url('/') }}" aria-haspopup="true"
                            aria-expanded="false">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="navbarLandings" href="{{ url('/analisa') }}" aria-haspopup="true"
                            aria-expanded="false">
                            Analisa
                        </a>
                    </li>
                </ul>

                <!-- Button -->
                @if (Auth::check())
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{ url('/dashboard') }}">
                        Dashboard
                    </a>
                @else
                    <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="{{ url('/login') }}">
                        Masuk
                    </a>
                @endif


            </div>

        </div>
    </nav>
