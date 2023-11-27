@extends('layouts.front')
@section('title', 'Continue Previous')

@section('content')
    <div class="sub_header bg_1">
        <div id="intro_txt">
            <h1>Online <strong>Apply</strong> course</h1>
            <p>Ex saepe accusata duo, vel ne summo option delenit.</p>
        </div>
    </div>
    <!--End sub_header -->

    <div class="container_gray_bg">
        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active </li>
                </ul>
            </div>
        </div><!-- Position -->
        <div class="container margin_60">
            <div class="row">

                <div class="col-md-9">
                    <div class="box_style_1">
                        <form action="{{ route('updateStudentAfter') }}"  enctype="multipart/form-data" id="apply_online" method="POST">
                            @csrf
                            <div class="indent_title_in">
                                <i class="pe-7s-study"></i>
                                <h3>Previous Information</h3>
                                <p>Preview & Update Record</p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail Address</label>
                                            <input type="email" class="form-control styled required" id="address_apply"
                                                name="email" placeholder="Enter registered E-mail...">
                                        </div>
                                        @error('email') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control styled required" id="address_apply"
                                                name="password" placeholder="**************">
                                        </div>
                                        @error('password') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="wrapper_indent">
                                <p><button type="submit" class="button">Submit</button></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3">

                    <h4><strong>How to apply</strong></h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum.</p>

                    <div class="box_side">
                        <h5>By Phone</h5> <i class="icon-phone"></i>
                        <p> + 0043 848293 43<br><small>Monday to Friday 9.00am - 6.00pm</small></p>
                    </div>

                    <div class="box_side">
                        <h5>By Postal Mail</h5> <i class="icon_pencil-edit"></i>
                        <p><a href="#0"><strong>Download the application form</strong></a>,<br> and send it to this
                            address:<br><br><em>4 West 31st Street New York<br>
                                10001 United States</em></p>
                    </div>
                    <hr class="styled">
                </div>
            </div>
            <!--End row -->
        </div>
        <!--End container -->
    </div>
    <!--End container_gray_bg -->

    <div class="container margin_60">
        <div class="main_title">
            <h2>Frequently questions</h2>
            <p>Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset.</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Et ius tota recusabo democritum?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Posse exerci volutpat has?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Te pri facete latine salutandi?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
        </div>
        <!--End row -->
        <div class="row">
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Et ius tota recusabo democritum?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Mediocritatem sea ex, nec id agam?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_style_2">
                    <h4>Te pri facete latine salutandi?</h4>
                    <p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete
                        latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit,
                        posse exerci volutpat has in.</p>
                </div>
            </div>
        </div>
        <!--End row -->
    </div>
    <!--End container -->

    <div class=" container_gray_line" id="newsletter_container">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Subscribe to our Newsletter for latest news.</h3>
                    <div id="message-newsletter"></div>
                    <form method="post" action="assets/newsletter.php" name="newsletter" id="newsletter"
                        class="form-inline">
                        <input name="email_newsletter" id="email_newsletter" type="email" value="" placeholder="Your Email"
                            class="form-control">
                        <button id="submit-newsletter" class="button"> Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- End newsletter_container -->

@endsection
