<style>
    .modal-backdrop {
        z-index: 0;
    }
</style>
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e2eaff">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>Wardrobe Chances</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'About' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $pagetitle == 'Products' ? 'active' : '' }}" href="/product">Product</a>
                </li>

            </ul>

            <!-- Button trigger modal -->
            <button type="button" class="btn " style="color: grey" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Contact Us
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Contact Us</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Don't hestitate to contact us through whatsapp!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn " style="background-color: #c5cfea"
                                data-bs-dismiss="modal">Close</button>
                            <a href="https://wa.me/6285173380018?text=Halo%20kak,%20saya%20tertarik%20dengan%20produknya,%20apakah%20boleh%20tanya-tanya%20dulu?" target="_blank"><button type="button" class="btn "
                                    style="background-color: #516ab0; color: white">Send a Message</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
