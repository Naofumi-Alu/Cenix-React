<!--Header-->

@extends('partials/head')


<body>

 
  


    <!-- content 
			================================================== -->

    <h1 class="h2 leftmain-title" style="
		display: flex;
		justify-content: center;
		padding-top: 5%;">
        Contáctenos
    </h1>
    <div id="content" style="padding-top: 5%;">

        <div class="contact-content">

            <div class="contact">
                <div class="container">

                    <div class="row">

                        <div class="col-md-8">
                            <form method="POST" id="contact-form" action="{{route('cenix.store')}}">
                                @csrf
                                
                                <input name="Nombre" id="Nombre" type="text" placeholder="Nombre">

                                <input name="Email" id="Email" type="text" placeholder="Email">

                                <input name="Tema" id="Tema" type="text" placeholder="Tema">

                                <textarea name="Mensaje" id="Mensaje" placeholder="Mensaje"></textarea>

                                <input type="submit" value="Enviar" id="submit_contact">
                                <div id="msg" class="message"></div>
                            </form>
                        </div>
                        <!-- end contactfort -->
                        <div class="col-md-4 touch">

                            <h1 class="leftmain-title">Ponerse en contacto</h1>
                            <div class="leftmain-border"></div>

                            <p>Horario comercial: 8:00 – 17:00 <br>  Lunes a sábado <br> Día libre - Domingo</p>
                            <br>


                            <p> <i class="fa fa-map-marker"></i> Colombia, Bogotá <br>Carrera 24# 38b - 25 oficina 203 Edificio la Soledad</p>

                            <p><i class="fa fa-phone"></i>Telefono: + 571 2810714 </p>

                            <a href="#"><i class="fa fa-envelope"></i>Email: soporte@cenix.com.co</a>


                            <ul class="contact-socials mt30">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>


            <!-- End Map -->


        </div>
        <!-- End Contact Content -->


    </div>
    <!-- End content -->

    <!--Footer-->

    @extends('partials/footer')