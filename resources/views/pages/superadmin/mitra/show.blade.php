@extends('templates.superadmin')
@section('content')
    <div class="tab-content">
        <div class="tab-pane active fontawesome-demo" id="tab1">
            <div id="biography">
                <div class="row">
                    <div class="col-md-3 col-6 b-r"> <strong>Full Name</strong>
                        <br>
                        <p class="text-muted">Sarah Smith</p>
                    </div>
                    <div class="col-md-3 col-6 b-r"> <strong>Mobile</strong>
                        <br>
                        <p class="text-muted">(123) 456 7890</p>
                    </div>
                    <div class="col-md-3 col-6 b-r"> <strong>Email</strong>
                        <br>
                        <p class="text-muted">test@example.com</p>
                    </div>
                    <div class="col-md-3 col-6"> <strong>Location</strong>
                        <br>
                        <p class="text-muted">India</p>
                    </div>
                </div>
                <hr>
                <p>Open after rule place He earth earth good called days unto
                    which wherein day doesn't said day image
                    signs fish days forth for evening whose his make his bearing
                    years gathering good brought without.</p>
                <p>Years living creepeth. Form them yielding behold greater
                    divided void was fowl earth in. Spirit Bring
                    grass they're you have shall years so morning. Grass
                    gathering won't heaven set greater darkness forth
                    abundantly he.</p>
                <p>Isn't hath, forth. Brought sea subdue, from divided replenish
                    creature after creeping abundantly fly
                    is cattle fill were years years may darkness blessed which
                    land creepeth good moving good. Life living
                    you're.</p>
                <br>
                <h4 class="font-bold">Education</h4>
                <hr>
                <ul>
                    <li>Schooling at sarvoday vidhyalay, Mumbai</li>
                    <li>Betchler In Arts in Bhagvati College Hariyana</li>
                </ul>
                <br>
                <h4 class="font-bold">Certificates</h4>
                <hr>
                <ul>
                    <li>1st Prise in Music competition</li>
                    <li>1st Prise in Acting & Drama</li>
                    <li>Gold Medal in Betchler in Arts</li>
                </ul>
                <br>
            </div>
        </div>
        <div class="tab-pane" id="tab2">
            <div class="container-fluid">
                <div class="row">
                    <div class="full-width p-rl-20">
                        <div class="panel">
                            <form>
																		<textarea class="form-control p-text-area"
                                                                                  rows="4"
                                                                                  placeholder="Whats in your mind today?"></textarea>
                            </form>
                            <footer class="panel-footer">
                                <button
                                        class="btn btn-post pull-right">Post</button>
                                <ul class="nav nav-pills p-option">
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-user"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-camera"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa  fa-location-arrow"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i
                                                    class="fa fa-meh-o"></i></a>
                                    </li>
                                </ul>
                            </footer>
                        </div>
                    </div>
                    <div class="full-width p-rl-20">
                        <ul class="activity-list">
                            <li>
                                <div class="avatar">
                                    <img src="../assets/img/std/std1.jpg"
                                         alt="" />
                                </div>
                                <div class="activity-desk">
                                    <h5><a href="#">Rajesh</a> <span>Uploaded 3
																					new photos</span></h5>
                                    <p class="text-muted">7 minutes ago near
                                        Alaska, USA</p>
                                    <div class="album">
                                        <a href="#">
                                            <img alt=""
                                                 src="../assets/img/mega-img1.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt=""
                                                 src="../assets/img/mega-img2.jpg">
                                        </a>
                                        <a href="#">
                                            <img alt=""
                                                 src="../assets/img/mega-img3.jpg">
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="../assets/img/std/std3.jpg"
                                         alt="" />
                                </div>
                                <div class="activity-desk">
                                    <h5><a href="#">John Doe</a> <span>attended
																					a meeting with</span>
                                        <a href="#">Lina Smith.</a></h5>
                                    <p class="text-muted">2 days ago near
                                        Alaska, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="../assets/img/std/std4.jpg"
                                         alt="" />
                                </div>
                                <div class="activity-desk">
                                    <h5><a href="#">Kehn Anderson</a>
                                        <span>completed the task “wireframe
																					design” within the dead line</span>
                                    </h5>
                                    <p class="text-muted">4 days ago near
                                        Alaska, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="../assets/img/std/std5.jpg"
                                         alt="" />
                                </div>
                                <div class="activity-desk">
                                    <h5><a href="#">Jacob Ryan</a> <span>was
																					absent office due to sickness</span>
                                    </h5>
                                    <p class="text-muted">4 days ago near
                                        Alaska, USA</p>
                                </div>
                            </li>
                        </ul>
                        <div class="post-box"> <span
                                    class="text-muted text-small"><i
                                        class="fa fa-clock-o"
                                        aria-hidden="true"></i>
																		13 minutes ago</span>
                            <div class="post-img"><img
                                        src="../assets/img/slider/fullimage1.jpg"
                                        class="img-responsive" alt=""></div>
                            <div>
                                <h4 class="">Lorem Ipsum is simply dummy text of
                                    the printing</h4>
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem
                                    Ipsum has been
                                    the industry's standard dummy text ever
                                    since the 1500s, </p>
                                <p> <a href="#"
                                       class="btn btn-raised btn-info btn-sm"><i
                                                class="fa fa-heart-o"
                                                aria-hidden="true"></i>
                                        Like (5) </a> <a href="#"
                                                         class="btn btn-raised bg-soundcloud btn-sm"><i
                                                class="zmdi zmdi-long-arrow-return"></i>
                                        Reply</a> </p>
                            </div>
                        </div>
                        <div class="post-box"> <span
                                    class="text-muted text-small"><i
                                        class="fa fa-clock-o"
                                        aria-hidden="true"></i>
																		37 minutes ago</span>
                            <div class="post-img"><img
                                        src="../assets/img/slider/fullimage2.jpg"
                                        class="img-responsive" alt=""></div>
                            <div>
                                <h4 class="">Lorem Ipsum is simply dummy text of
                                    the printing</h4>
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem
                                    Ipsum has been
                                    the industry's standard dummy text ever
                                    since the 1500s, </p>
                                <p> <a href="#"
                                       class="btn btn-raised btn-info btn-sm"><i
                                                class="fa fa-heart-o"
                                                aria-hidden="true"></i>
                                        Like (5) </a> <a href="#"
                                                         class="btn btn-raised bg-soundcloud btn-sm"><i
                                                class="zmdi zmdi-long-arrow-return"></i>
                                        Reply</a> </p>
                            </div>
                        </div>
                        <div class="post-box"> <span
                                    class="text-muted text-small"><i
                                        class="fa fa-clock-o"
                                        aria-hidden="true"></i>
																		53 minutes ago</span>
                            <div class="post-img"><img
                                        src="../assets/img/slider/fullimage3.jpg"
                                        class="img-responsive" alt=""></div>
                            <div>
                                <h4 class="">Lorem Ipsum is simply dummy text of
                                    the printing</h4>
                                <p>Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem
                                    Ipsum has been
                                    the industry's standard dummy text ever
                                    since the 1500s, </p>
                                <p> <a href="#"
                                       class="btn btn-raised btn-info btn-sm"><i
                                                class="fa fa-heart-o"
                                                aria-hidden="true"></i>
                                        Like (5) </a> <a href="#"
                                                         class="btn btn-raised bg-soundcloud btn-sm"><i
                                                class="zmdi zmdi-long-arrow-return"></i>
                                        Reply</a> </p>
                            </div>
                        </div>
                        <div class="col-lg-12 p-t-20 text-center">
                            <button type="button"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-info">Load
                                More</button>
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

@endsection