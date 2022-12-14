<div class="header-outs" id="home">
    <div class="header-bar">
        <div class="info-top-grid">
            <div class="info-contact-agile">
                <ul>
                    <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>0373 177 267</p>
                    </li>
                    <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">viethoangnhu@gmail.com</a></p>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="hedder-up row">
                <div class="col-lg-3 col-md-3 logo-head">
                    <h1><a class="navbar-brand" href="index.html">Dinos Shop</a></h1>
                </div>
                <div class="col-lg-5 col-md-6 search-right">
                    <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-3 right-side-cart">
                    <div class="cart-icons">
                        <ul>
                            <li>
                                <span class="far fa-heart"></span>
                            </li>
                            @if (Auth::guard('customer')->check())
                            <li>
                                <button type="button" data-toggle="modal" data-target="#exampleModal-two"> <span class="far fa-user"></span></button>
                            </li>
                           
                            @else
                            <li>
                                <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                            </li>
                            @endif
                            
                            <li class="toyscart toyscart2 cart cart box_1">
                               
                                    <button class="top_toys_cart" data-toggle="modal" data-target="#exampleModal-cart">
                                         <span class="fas fa-cart-arrow-down"></span>
                                    </button>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
           </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="service.html" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="shop.html" class="nav-link">Shop Now</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pages
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="icon.html">404 Page</a>
                            <a class="nav-link " href="typography.html">Typography</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="product.html">Kids Toys</a>
                            <a class="nav-link " href="product.html">Dolls</a>
                            <a class="nav-link " href="product.html">Key Toys</a>
                            <a class="nav-link " href="product.html">Boys Toys</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Slideshow 4 -->
    <div class="slider text-center">
        <div class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <div class="slider-img one-img">
                        <div class="container">
                            <div class="slider-info ">
                                <h5>Pick The Best Toy For <br>Your Kid</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img two-img">
                        <div class="container">
                            <div class="slider-info ">
                                <h5>Sort Toys And Teddy bears<br>For Kids</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-img three-img">
                        <div class="container">
                            <div class="slider-info">
                                <h5>Best Toys And Dolls<br> For Kids</h5>
                                <div class="bottom-info">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                                </div>
                                <div class="outs_more-buttn">
                                    <a href="about.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- This is here just to demonstrate the callbacks -->
        <!-- <ul class="events">
           <li>Example 4 callback events</li>
           </ul>-->
        <div class="clearfix"></div>
    </div>
</div>