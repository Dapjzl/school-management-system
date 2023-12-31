@extends('layouts.front')
@section('title', 'Contact Us')

@section('content')

		<div id="map"></div><!-- end map-->

        <div class="container_gray_bg">
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
                </div>
            </div><!-- Position -->

            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-9">
                        <div class="box_style_1">
                            <div class="indent_title_in">
                                <i class="pe-7s-mail-open-file"></i>
                                <h3>Contact us</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="wrapper_indent">
                                <div id="message-contact"></div>
                                <form method="post" action="assets/contact.php" id="contactform">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="Phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Your message</label>
                                                <textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Are you human? 3 + 1 =</label>
                                                <input type="text" id="verify_contact" class=" form-control styled" placeholder="Are you human? 3 + 1 =">
                                            </div>
                                            <input type="submit" value="Submit" class="button add_bottom_30" id="submit-contact"/>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- End wrapper_indent -->

                            <hr class="styled_2">

                            <div class="indent_title_in">
                                <i class="pe-7s-look"></i>
                                <h3>Plan a visit</h3>
                                <p>
                                    Mussum ipsum cacilds, vidis litro abertis.
                                </p>
                            </div>
                            <div class="wrapper_indent">
                                <div id="message-visit"></div>
                                <form method="post" action="assets/visit.php" id="visit">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control styled" id="name_visit" name="name_visit" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control styled" id="lastname_visit" name="lastname_visit" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" id="email_visit" name="email_visit" class="form-control styled" placeholder="Enter Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" id="phone_visit" name="phone_visit" class="form-control styled" placeholder="Phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Preferred visit date</label>
                                                <input class="date-pick form-control styled" data-date-format="M d, D" type="text" name="date_visit" id="date_visit" placeholder="Select date">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label>Preferred visit time</label>
                                                <input class="time-pick form-control styled" type="text" name="time_visit" id="time_visit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="submit" value="Submit" class="button add_bottom_30" id="submit-visit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- End wrapper_indent -->
                        </div><!-- End box style 1-->
                    </div><!-- End col-md-9 -->

                    <aside class="col-md-3">
                    <h3>Contacts info</h3>
                    <p>
                         11 Fifth Ave - New York, US<br>
                         + 61 (2) 8093 3400 / + 61 (2) 8093 3402<br>
                        <a href="#">info@domain.com</a>
                    </p>
                    <h5>Get directions</h5>
                    <form action="http://maps.google.com/maps" method="get" target="_blank">
                        <div class="form-group">
                            <input type="text" name="saddr" placeholder="Enter your location" class="form-control styled">
                            <input type="hidden" name="daddr" value="New York, NY 11430">
                            <!-- Write here your end point -->
                        </div>
                        <input type="submit" value="Get directions" class="button small nomargin">
                    </form>
                    <hr class="styled">
                    <h3>Dipartmens</h3>
                    <ul class="contacts_info">
                        <li><strong>Administration</strong><br>
                        <a href="tel://003823932342">0038 23932342</a> - <a href="tel://003823932342">admin@atena.com</a><br>
                        <small>Monday to Friday 9am - 7pm</small></li>
                        <li><strong>Admission</strong><br>
                        <a href="tel://003823932342">0038 23932342</a> - <a href="tel://003823932342">admission@atena.com</a><br>
                        <small>Monday to Friday 9am - 7pm</small></li>
                        <li><strong>General questions</strong><br>
                        <a href="tel://003823932342">0038 23932342</a> - <a href="tel://003823932342">questions@atena.com</a><br>
                        <small>Monday to Friday 9am - 7pm</small></li>
                    </ul>
                    <hr class="styled">
                    <div class="banner">
                        <i class=" iconcustom-school"></i>
                        <h3>Take a campus tour</h3>
                        <p>
                            Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius.
                        </p>
                        <a href="tour.html" class="banner_bt">Start tour</a>
                    </div>
                    </aside>

                </div><!--End row -->
            </div><!--End container -->
        </div><!--End container_gray_bg -->

 		<div class=" container_gray_line" id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter" class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email" class="form-control">
                        <button id="submit-newsletter" class="button"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
