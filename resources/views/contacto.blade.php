@extends('layouts.web')

@section('content')
    <div class='heroEffects'>
        <div class="bg" style="  background-image: url('{{asset('assets/images/contacto/fondos/1620.jpg')}}');">
            <div class="arrow bouncy">
                <svg height="25" width="50">
                    <polygon points="0,0 25,10 50,0 25,25" fill="rgba(255,255,255,.5)" stroke-width="0" stroke="rgba(255,255,255,.3)"/>
                </svg>
            </div>
            <div class="title centerV">
                <div>
                    <div class="text">
                        <h1>CONTACTOS</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="shade"></div>
    </div>
    <script>
        (function () {
            $(window).scroll(function () {
                var Num = $(window).scrollTop() / 500;
                var Num2 = $(window).scrollTop() * .0004; // higher number for more zoom
                var Num2mod = Num2 + 1;
                var Num3 = $(window).scrollTop() * .2; // Title speed
                var Num3mod = Num3 + 1;
                return $('.shade').css('opacity', Num),
                    $(".bg").css({"transform":"scale(" + Num2mod + ")"}),
                    $(".text").css({"margin-top":"-" + Num3mod + "px"});
            });
        }.call(this));
    </script>
<!-- ======= Contact Section ======= -->
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg ">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Información</h2>
                <p>Estaremos encantados de ayudarte, estamos para ofrecerte toda la asesoría que necesites.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Dirección:</h4>
                            <p>Quito  Av. 6 de Diciembre N49-69 Y de las Cucardas Sector la Luz</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>tecniempaque@hotmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Teléfonos:</h4>
                            <p>+593 990466225</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.1746330056619!2d-78.47551891197489!3d-0.1471704951815598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59aaaa6330597%3A0xce56462a7a6ec346!2sTecni%20Empaque!5e0!3m2!1ses-419!2sec!4v1654042903312!5m2!1ses-419!2sec" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Dirección:</h4>
                            <p>Calle de las Anonas y de los Nardos esq. diagonal al Centro de Colisiones Hyundai Av. Eloy Alfaro </p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>tecniempaque@hotmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Teléfonos:</h4>
                            <p>+593 997136946</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d785.9826248233162!2d-78.47022662942693!3d-0.1318119013409434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d58f79f99b0f71%3A0x185f4813d6e19d14!2sTecni-empaque!5e0!3m2!1ses-419!2sec!4v1654043167807!5m2!1ses-419!2sec" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Dirección:</h4>
                            <p>Av. Mariscal Sucre S25-216 y S25f Taisha Sector Santa Rita</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>tecniempaque@hotmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Teléfonos:</h4>
                            <p>+593 981296426 / +593 998606208</p>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.4614451190902!2d-78.55194332717879!3d-0.2688290084584783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d599e3a0793509%3A0x9abef89f25d3cfd1!2sTecni%20Empaques%20Sur!5e0!3m2!1ses-419!2sec!4v1654043264280!5m2!1ses-419!2sec" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-6 d-flex mt-4 align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Tu Nombre</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombres y Apellidos" required>
                            </div>
                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Asunto</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Tu Mensaje</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar</button></div>
                    </form>
                </div>
            </div>



        </div>
    </section><!-- End Contact Us Section -->



@endsection
