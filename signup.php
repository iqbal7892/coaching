<?php require_once('header.php') ?>
        <div class="form-wrap-22">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-xl-6 d-flex flex-wrap align-items-end">
                        <div class="logo-22">
                            <a href="#">
                                <img src="assets/logo.svg" alt="logo">
                            </a>
                        </div>
                        <div class="copyright-22">
                            <p class="m-0">Copyright 2019</p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-6">
                        <div class="card form-card-22 ml-lg-auto">
                            <div class="card-body">
                                <h2 class="card-title text-center">Sign Up</h2>
                                <form class="form-signup form-22 mt-65">
                                    <div class="form-group">
                                        <label class="control-label" for="fname">You First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Some User Name" name="f_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="lname">Last name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Enter your Last Name..." name="l_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="email">Email</label>
                                        <input type="email" class="form-control" placeholder="Your e-mail..." id="email" name="email">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="control-label">Phone</label>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="dropdown dropdown-country">
                                                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                                    <!-- <div class="flag us"></div>
                                                    <span class="dial-code">+1</span> -->
                                                    Code...
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-item" data-dial-code="1" data-country-code="us" aria-selected="false">
                                                        <div class="flag us"></div>
                                                        <span class="country-name">United States</span>
                                                        <span class="dial-code">+1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-dial-code="44" data-country-code="gb" aria-selected="false">
                                                        <div class="flag gb"></div>
                                                        <span class="country-name">United Kingdom</span>
                                                        <span class="dial-code">+44</span>
                                                    </li>
                                                    <li class="dropdown-item" data-dial-code="1" data-country-code="us" aria-selected="false">
                                                        <div class="flag us"></div>
                                                        <span class="country-name">United States</span>
                                                        <span class="dial-code">+1</span>
                                                    </li>
                                                    <li class="dropdown-item" data-dial-code="44" data-country-code="gb" aria-selected="false">
                                                        <div class="flag gb"></div>
                                                        <span class="country-name">United Kingdom</span>
                                                        <span class="dial-code">+44</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="tel" class="form-control" placeholder="Number"  name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-success btn-round btn-success-shadow pr-20" type="submit">Register
                                            <span class="icon ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19.51" height="14.826" viewBox="0 0 19.51 14.826">
                                                    <defs>
                                                        <style>
                                                            .cls-1{fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px}
                                                        </style>
                                                    </defs>
                                                    <g id="arrow-right" transform="translate(1 1.414)">
                                                        <path id="Line_343" d="M0 0h17.51" class="cls-1" data-name="Line 343" transform="translate(0 5.999)"></path>
                                                        <path id="Path_1863" d="M12 5l6 6-6 6" class="cls-1" data-name="Path 1863" transform="translate(-.489 -5)"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                                <div class="have-txt text-center">
                                    <p>Have an Account? <a href="login">Log In</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php require_once('footer.php') ?>
      