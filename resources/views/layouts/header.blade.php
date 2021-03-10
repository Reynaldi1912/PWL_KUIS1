 <!-- MENU BAR -->
 <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
              <i class="fa fa-line-chart"></i>
              KUIS 1 TI2D (Kelompok 5)
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href={{ url('/')}} class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/barang') }} class="nav-link">Barang</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/supplier') }} class="nav-link">Supplier</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/pelanggan') }} class="nav-link">Pelanggan</a>
                    </li>
                    <li class="nav-item">
                        <a href={{ url('/Pegawai') }} class="nav-link">Pegawai</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
