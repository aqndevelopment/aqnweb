<footer class="site-footer footer-dark">
    <section id="contact">
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top">
            <div class="container">
                <div class="row pb-5">
                    <!-- ABOUT COMPANY -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="widget widget_about">
                            <div class="logo-footer clearfix p-b15">
                                <a href="index.html" class="sx-text-primary"><img src="{{ asset('images/footer-logo.png') }}" alt="image"></a>
                            </div>
                            <p>Komplek Deplu 2, Jl. Gaharu 1 No. 5, Cilandak Barat, RT.5/RW.11, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12410
                            </p>
                            <div class="widget_about-call-section">
                                <div class="sx-f-call-icon"><i class="flaticon-telephone"></i></div>
                                <div class="sx-f-call-section">
                                    <span>Contact us</span>
                                    <a href="tel:+62(021)27651000">(021) 27651000</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EXPLORE LINKS -->
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6 col">
                        <h4 class="sx-title text-light">Get In Touch</h4>
                        <form class="" method="POST" action="{{ route('contact.send') }}">
                             @csrf
                            <div class="input input-animate">
                                <input type="text" name="name" id="name" required="" placeholder="Your Name" class="bg-secondary p-1 contactus">
                                <span class="spin" style="width: 0px;"></span>
                            </div>

                            <div class="input input-animate">
                                <input type="email" name="email" id="email" required="" placeholder="Your Email" class="bg-secondary p-1 contactus">
                                <span class="spin" style="width: 0px;"></span>
                            </div>

                            <div class="input input-animate">
                                <input type="text" name="subject" id="subject" required="" placeholder="Subject" class="bg-secondary p-1 contactus">
                                <span class="spin" style="width: 0px;"></span>
                            </div>

                            <div class="input textarea input-animate">
                                <textarea name="message" id="message" required="" placeholder="Your Message" class="bg-secondary p-1 contactus h-100"></textarea>
                                <span class="spin" style="width: 0px;"></span>
                            </div>

                            <div class="sx-btn-center text-right p-t5">
                                <button type="submit" class="site-button sx-btn-primary icon sx-btn-lg">
                                    <i class="fa fa-long-arrow-right"></i>
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                   
                        <div class="sx-f-copy pt-30 text-center">
                            ©2023 by <a href="" style="color:#fa9a0b"> PT. Asia Quattro Net</a> All rights reserved.
                        </div>
                    
                </div>
                <!-- FOOTER COPYRIGHT -->
                <!-- Success Popup Modal -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Your message has been sent successfully.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @if(session('success'))
                <script>
                    $(document).ready(function () {
                        $('#successModal').modal('show');
                    });
                </script>
                @endif


    </section>
</footer>