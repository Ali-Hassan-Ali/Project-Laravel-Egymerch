@extends('layouts.home.app')

@section('content')

	<div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Contact us
            </div>
        </div>
    </div>
    <section class="hero-2 bg-green">
        <div class="hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <h4 class="text-brand mb-20">Get in touch</h4>
                            <h1 class="mb-20 wow fadeIn animated font-xxl fw-900 animated animated" style="visibility: visible;">
                                Let's Talk About <br>Your <span class="text-style-1">Idea</span>
                            </h1>
                            <p class="w-50 m-auto mb-50 wow fadeIn animated animated animated" style="visibility: visible;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quam eius placeat, a quidem mollitia at accusantium reprehenderit pariatur provident nam ratione incidunt magnam sequi.</p>
                            <p class="wow fadeIn animated animated animated" style="visibility: visible;">
                                <a class="btn btn-brand btn-lg font-weight-bold text-white border-radius-5 btn-shadow-brand hover-up" href="http://ahmedsamidev.com/print/public/about">Start Selling </a>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 m-auto">
                    <div class="contact-from-area padding-20-row-col wow FadeInUp animated animated" style="visibility: visible;">
                        <h3 class="mb-10 text-center">Register As A seller / desginer </h3>
                        <p class="text-muted mb-30 text-center font-sm">Lorem ipsum dolor sit amet consectetur.</p>
                        <form class="contact-form-style text-center" id="contact-form" action="{{ route('seller.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="name" placeholder="username" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="email" placeholder="Your Email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="telephone" placeholder="password" type="tel">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="subject" placeholder="password confirmation" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <input name="subject" placeholder="your phone" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-style mb-20">
                                        <select name="" id="input" class="form-control" required="required">
                                            <option value=""> egypt </option>
                                            <option value=""> egypt </option>
                                            <option value=""> egypt </option>
                                            <option value=""> egypt </option>
                                            <option value=""> egypt </option>
                                            <option value=""> egypt </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label><span>Have you worked in the Print On Demand business before ? </span></label> <br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="yes" for="inlineRadio1">
                                          <label class="form-check-label" for="inlineRadio1">yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="no" for="inlineRadio2">
                                          <label class="form-check-label" for="inlineRadio2">no</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label>I have a store on</label> <br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="yes">
                                          <label class="form-check-label">Merch By Amazon</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Teespring (Spring)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Zazzle</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Teepublic</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Redbubble</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Etsy</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Spreadshirt</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" value="no">
                                          <label class="form-check-label">Others</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label><span>To work online, I use .. ? </span></label> <br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="mobile">
                                          <label class="form-check-label">Mobile</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">lap top</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label><span>To make designs, I use </span></label> <br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="mobile">
                                          <label class="form-check-label">
                                              Programs (Photoshop, Illustrator, Gimp, others)
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">
                                              Online design sites (Canva, Photopea, others
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">
                                              Mobile apps
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">
                                              Hire designers (Freelance sites
                                          </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label><span>I usually get traffic ? </span></label> <br>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="mobile">
                                          <label class="form-check-label">
                                              Free from social (Facebook, Instagram, Pinterest, ...)
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">
                                              ads
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" value="lap_top">
                                          <label class="form-check-label">
                                              Organically (site traffic)
                                          </label>
                                        </div>
                                    </div>
                                </div>

    

                                <div class="col-lg-12 col-md-12">
                                    <div class="input-style mb-20">
                                        <label> Please add your stores’ links </label>
                                        <input class="form-control" type="text" name="exampleCheckbox1" id="exampleCheckbox1"> 
                                       
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="textarea-style mb-30">
                                        <label for="">  Tell us more about yourself </label>
                                        <textarea name="message" 
                                        placeholder="What’s your experience in (online business, POD, design, marketing). What are your traffic sources? Why would you like to work on EgyMerch? "></textarea>
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Submit application</button>
                                </div>

                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

@push('reagiter')

<script type="text/javascript">
    $(document).ready(function() {

        alert('dsfdf');

    });
</script>

@endpush