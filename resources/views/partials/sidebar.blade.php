<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset ('/assests/admin/images/icon/aa.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                            
                                <i class="fas fa-tachometer-alt" style="font-size:24px;color: blue"></i>Dashboard</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('merk.index') }}">Merk Mobil</a>
                                </li>
                                </ul>
                            <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ route('mobil.index') }}">Mobil</a>
                                </li>
                                
                                <li>
                                    <a href="{{ route('customer.index') }}">Customer</a>
                                </li>
                                <li>
                                    <a href="{{ route('supir.index') }}">Supir</a>
                                </li>
                                 <li>
                                    <a href="{{ route('pemesanan.index') }}">Pemesanan</a>
                                </li>
                                 
                                
                            </ul>
                        </li> -->
                        
                        <li>
                            <a href="{{ route('mobil.index') }}">
                                <i class="fa fa-car" style="font-size:24px; color: blue"></i>Mobil</a>
                        </li>
                        
                        <li>
                            <a href="{{ route('supir.index') }}">
                                <i class="fa fa-user-circle" style="font-size:24px; color:blue"></i>Supir</a>
                        </li>
                        <li>
                            <a href="{{ route('customer.index') }}">
                                <i class="fa fa-user" style="font-size:24px; color:blue"></i>Pengguna</a>
                        </li>

                       <!--  <li>
                            <a href="{{ route('pemesanan.index') }}">
                                <i class="fa fa-file" style="font-size:24px"></i>Pemesanan</a>
                        </li> -->

                        <li><a href="{{ route('booking.index') }}">
                        <i class="fa fa-link" style="font-size:24px; color:blue"></i>Booking</a>
                        </li>
                        
                            </ul>
                        </li>
                    </ul>

                </nav>

            </div>
        </aside>