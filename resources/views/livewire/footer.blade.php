<footer class="border-2 border-gray-400 border-opacity-20 border-t-2 mt-14 pt-6">

    <div class="max-w-8xl mx-auto px-2  grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-6 md:gap-16 ">
        <div>
            <div class="mb-6 flex justify-center md:justify-start md:block">
                <x-jet-application-mark class="block h-10 md:h-10 w-auto object-cover object-center" />
            </div>
            <div class="flex space-x-2 mb-6 justify-center md:justify-start md:block">
                <div>
                    <p class="font-medium">SÍGUENOS EN:</p>
                </div>
                <div class="flex space-x-4 mt-3">
                    {{-- <a class="cursor-pointer" href="">
                        <img src="{{asset('imgt/insta.png')}}" class="w-10 hover:shadow-xl" alt="">
                    </a> --}}
                    <a class="cursor-pointer" target="_blank" href="https://www.facebook.com/Trepstom">
                        <img src="{{asset('imgt/face.png')}}" class="w-10 hover:shadow-xl" alt="">
                    </a>
                    <a class="cursor-pointer" target="_blank" href="https://www.linkedin.com/company/trepstom/?miniCompanyUrn=urn%3Ali%3Afs_miniCompany%3A86949983">
                        <img src="{{asset('imgt/linkedin.png')}}" class="w-10 hover:shadow-xl" alt="">
                    </a>
                </div>
                
            </div>
            
        </div>
        <div>
            <p class="text-base font-medium mb-3 text-center md:text-left">BIENVENIDO</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli     ">
                    <li><a href="{{route('home')}}">Inicio</a></li>
                    <li><a href="{{route('conocenos')}}">Planes</a></li>
                    <li><a href="{{route('servicios')}}">Servicios</a></li>
                    <li><a href="{{route('contacto')}}">Contácto</a></li>
                    <li><a href="{{route('register')}}">Registrate</a></li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-medium mb-3 text-center md:text-left">COMPAÑIA</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ">
                    <li><a href="{{ route('politicas') }}">Políticas de privacidad</a> </li>
                    <li><a href="{{ route('terminos') }}"> Términos y condiciones</a></li>
                    <li>Preguntas Frecuentes</li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-medium mb-3 text-center md:text-left">SERVICIOS</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ">
                    <li>Desarrollo web</li>
                    <li>Imagen Corporativa</li>
                </ul>
            </div>
        </div>
        <div>
            <p class="text-base font-medium mb-3 text-center md:text-left">CONTÁCTO</p>
            <div class="flex justify-center md:block">
                <ul class="text-sm ulli ">
                    <li><i class="fas fa-mobile-alt color-icon-footer mr-2"></i> +51 902829056 </li>
                    <li><i class="far fa-envelope color-icon-footer mr-2"></i>atencion@trepstom.com</li>

                </ul>
            </div>
        </div>
    </div>

    <div class="mt-8 border-t-2 border-gray-100 py-4 text-sm text-center text-gray-600">
        <div class="flex justify-center">
            <p>Copyright © 2022 | Consultora Trepstom </p>
        </div>
    </div>
    <a href="https://wa.me/+51998905385" target="_blank" class="wsp-icon wsp-display">
        <img src="{{asset('img/otros/wspdesk3.png')}}" alt="">
    </a>
    <div id="wws-chat" class="wsp-desk wws-popup-container wws-popup-container--position">
        <div class="wws-gradient wws-gradient--position"></div>
        <div class="wws-popup" data-wws-popup-status="0">
            <div class="wws-popup__header">
                <div class="wws-popup__close-btn wws--bg-color wws--text-color wws-shadow">
                    <i class="fas fa-times wws-popup__close-icon"></i>
                </div>
                <div class="wws-clearfix"></div>
            </div>
            <div class="wws-popup__body">
                <div class="wws-popup__support-wrapper  wws-shadow">
                    <div class="wws-popup__support">
                        <div class="wws-popup__support-about wws--bg-color wws--text-color"> Nuestro equipo de atención al cliente está aquí para responder a sus preguntas.</div>
                    </div>
                </div>
                <div class="wws-clearfix"></div>
                <div class="wws-popup__support-person-container wws-shadow">
                    <div class="wws-popup__support-person-wrapper">
                        <a class="wws-popup__support-person-link" href="https://wa.me/51998905385?text=" target="_blank" data-wws-pre-msg="" data-ga-analytics-label="Multi Person - Atención">
                            <div class="wws-popup__support-person">
                                <div class="wws-popup__support-person-img-wrapper">
                                    <img class="wws-popup__support-person-img" src="{{asset('img/otros/worker2.png')}}" alt="WhatsApp" width="54">
                                    <div class="wws-popup__support-person-available"></div>
                                </div>
                                <div class="wws-popup__support-person-info-wrapper">
                                    <div class="wws-popup__support-person-title"></div>
                                    <div class="wws-popup__support-person-name">Atención al cliente</div>
                                    <div class="wws-popup__support-person-status">Disponible</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="wws-popup__footer">
            <div class="wp-open">
                <div class="wws-popup__open-btn wws--bg-color wws--text-color wws-shadow">
                    <span>Hola, ¿en qué puedo ayudarte?</span> 
                </div>
                <a href="https://wa.me/+51998905385" target="_blank">
                    <img src="{{asset('img/otros/wspdesk3.png')}}" class=" inline-block" width="50px">
                </a>
               
            </div>
        </div>
        
    </div>
</footer>
