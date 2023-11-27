@extends('layouts.front')
@section('title', 'Admissions')

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
                    <li>Page active</li>
                </ul>
            </div>
        </div><!-- Position -->
        <div class="container margin_60">
            <div class="row">

                <div class="col-md-9">
                    <div class="box_style_1">
                        <form enctype="multipart/form-data" id="apply_online" method="POST">
                            @csrf
                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3>Personal Details</h3>
                                <p>Personal Information</p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->firstname}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->lastname}}">
                                        </div>
                                    </div>
                                </div><!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->phone}}">
                                        </div>
                                    </div>
                                </div><!-- End row -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Registration No.</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->regno}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label><br>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->gender}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->dob}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address line</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->state}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->lga}}">
                                    </div>


                                </div><!-- End row -->
                            </div>

                            <hr>

                            <div class="indent_title_in">
                                <i class="pe-7s-study"></i>
                                <h3>Academic Programme</h3>
                                <p>Preferred course of study</p>
                            </div>
                            <div class="wrapper_indent">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Choice</label>
                                        <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->first_choice}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Second Choice</label>
                                        <input readonly type="text" class="form-control styled required" name="" id="" value="{{$std->second_choice}}">
                                    </div>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload WAEC Result</label>
                                            <input type="text" class="form-control styled required" name="" id="" value="{{$std->firstname}}">
                                        </div>
                                        @error('waec') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload OND/HND/BSc Result</label>
                                            <input type="text" class="form-control styled required" name="" id="" value="{{$std->firstname}}">
                                        </div>
                                        @error('bsc') <p class=" text-danger">{{ $message }}</p> @enderror
                                    </div> --}}
                                    <div class="col-md-12">
                                        <img src="{{$std->student_img}}" alt="">
                                    </div>
                                </div><!-- End row -->
                            </div>

                            <div class="wrapper_indent">
                                <a href="{{route('front')}}"><p><button type="button" class="button">Done</button></p></a>
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
                    <div class="box_side">
                        <h4>Plan a visit</h4> <i class="icon_pencil-edit"></i>
                        <p>Per eu esse deleniti scripserit, sed ut nihil inimicus sadipscing. Eu iusto ignota officiis sit,
                            nullam ullamcorper eam ut. </p>
                        <a href="#0" class="button small">Plan a visit</a>
                    </div>

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
