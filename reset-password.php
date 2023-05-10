<?php require_once('header.php') ?>
    <div class="form-wrap-22 d-flex align-items-lg-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-6 d-flex flex-wrap align-items-center">
                    <div class="logo-22">
                        <a href="#">
                            <img src="assets/logo.svg" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-6">
                    <div class="card form-card-22 ml-lg-auto pb-65">
                        <div class="card-body">
                            <h2 class="card-title text-center">Reset Password</h2>
                            <form class="form-reset-password form-22 mt-65">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter Your E-mail..." id="email" name="email">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success btn-round btn-success-shadow" type="button">Send Me Instructions
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
                                <p><a class="text-decoration-none">Cancel</a></p>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade modal-reset-password" id="reset-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                                <defs>
                                                    <style>
                                                        .cls-21{fill:#0e1a2a;opacity:.16}.cls-22{fill:#fff}.cls-22{filter:url(#Ellipse_886)}
                                                    </style>
                                                    <filter id="Ellipse_886" width="102" height="102" x="0" y="0" filterUnits="userSpaceOnUse">
                                                        <feOffset dy="5"/>
                                                        <feGaussianBlur result="blur" stdDeviation="10"/>
                                                        <feFlood flood-opacity=".259"/>
                                                        <feComposite in2="blur" operator="in"/>
                                                        <feComposite in="SourceGraphic"/>
                                                    </filter>
                                                </defs>
                                                <g id="Group_4602" data-name="Group 4602">
                                                    <g class="cls-3" transform="translate(-30 -25)">
                                                        <circle id="Ellipse_886-2" cx="21" cy="21" r="21" class="cls-21" data-name="Ellipse 886" transform="rotate(-90 48.5 18.5)"/>
                                                    </g>
                                                    <g id="Group_4540" data-name="Group 4540" transform="translate(13 12.818)">
                                                        <path id="Rectangle_2345" d="M0 0h19v2H0z" class="cls-22" data-name="Rectangle 2345" transform="rotate(45 .49 1.796)"/>
                                                        <path id="Rectangle_2398" d="M0 0h19v2H0z" class="cls-22" data-name="Rectangle 2398" transform="rotate(135 7.21 3.815)"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </button>   
                                        <div class="modal-body">
                                            <div class="modal-text22 d-flex">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56">
                                                        <defs>
                                                            <style>
                                                                .cls-12{fill:#6fda44}.cls-13{fill:#fff}
                                                            </style>
                                                        </defs>
                                                        <g id="Group_5316" data-name="Group 5316" transform="translate(-.376)">
                                                            <circle id="Ellipse_906" cx="28" cy="28" r="28" class="cls-12" data-name="Ellipse 906" transform="translate(.376)"/>
                                                            <path id="shield_1_" d="M79.221 21.336l3.36 3.018L66.31 42.468 55.632 32.3l3.114-3.271 7.311 6.959z" class="cls-13" data-name="shield (1)" transform="translate(-40.015 -4.632)"/>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <p>Your password has <br> been changed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once('footer.php') ?>
         
      