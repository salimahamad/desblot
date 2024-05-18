<?php include 'header.php'; ?>
<section id="banner">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-11 text-center">
          <h1 class="cd-headline clip is-full-width">
            #1 Agencia en  <br>
             <span class="cd-words-wrapper">
                <b class="is-visible">desbloqueo y </b>
                <b class="is-hidden">liberación de </b> 
             </span>
             iPhones
          </h1>
          <p>Nuestra agencia verificada permite <strong>desbloquear</strong>, o <strong>liberar</strong> o <strong>eliminiar bloqueo</strong> de un iPhone. 100% online, de forma remota y de forma personalizada via Whatsapp.</p>

          <form class="searchFormBanner g-2 row align-items-center" action="checkout.php"> 
            <div class="col-12 col-sm-5"> 
              <div class="input-group">
                <div class="form-floating">
                  <select class="form-select" name="NetworkName" id="NetworkName" aria-label="Floating label select example">
                    <option value="">Seleccione la red</option>
                    <option value="Claro Argentina">Claro Argentina</option>
                    <option value="Movistar Argentina">Movistar Argentina</option>
                    <option value="Personal Argentina">Personal Argentina</option>
                  </select>
                  <label for="NetworkName">La red</label>
                </div>
                <div class="input-group-text">
                  <span  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Seleccione las redes en las que su dispositivo está bloqueado actualmente.">
                    <img src="assets/img/question.png" alt="icon" height="18" />
                  </span>
                </div>
              </div>

            </div>
            <div class="col-12 col-sm-5">
              <div class="input-group">
                <div class="input-group-text">
                  <img src="assets/img/iphone.png" alt="phone" height="20" />
                </div>
                <div class="form-floating">
                  <input type="text" id="IngresarIMEI" placeholder="Número IMEI" class="form-control" name="imei" minlength="15">
                  <span class="validIMEITag"><span class="material-symbols-outlined"> check_circle </span> Valid</span>
                  <label for="IngresarIMEI"> Ingresar Número IMEI</label>
                </div> 
              </div>
            </div>

            <div class="col-12 col-sm-2">
              <button type="submit" class="btn btn-primary py-3 w-100" >Verificar</button>
            </div>
            
            <div class="col-12 my-0">
              <div class="gap-2 text-start align-items-center mt-2 bg-light p-2 rounded" id="showPhoneModal">
                <div class="bg-primary p-2 rounded">
                  <img id="brandBanner" src="assets/img/brands/apple.png" height="40">
                </div>
                <div>
                  <div>Dispositivo identificado:</div>
                  <input type="hidden" id="brandNameItem" value="" />
                  <input type="hidden" id="brandNameItemModal" value="" />
                  <h6><strong id="brandName">Brand Name</strong></h6>
                </div>
              </div> 
            </div>

            <div class="col-12 showErrorSelect">Por favor seleccione una red</div>
            <div class="col-12 showErrorimei">Por favor ingresa un número IMEI</div>
            <div class="col-12 imeierror">
              <div>Número IMEI no válido. Debe tener al menos 15 caracteres.</div>
            </div>

          </form> 
          <div class="mt-4"><small>Su IMEI se puede encontrar en Configuración> General> Acerca de la pantalla, o marcando *#06#</small></div>
      </div>
    </div>
    <img src="assets/img/modal.png" alt="modal" class="bannerimg1" />
    
  </div>
  <img src="assets/img/bannerShape1.png" alt="modal" class="bannerimg2" />
</section>
 
<section class="howItworks">
  <div class="container">
    <div class="pb-4 text-center row justify-content-center">
      <div class="col-md-7">
        <h3 class="title"><span class="text-primary">Desbloquee su teléfono</span> usando Desblot.</h3>
        <p>Desbloqueo instantáneo y remoto. Utilice su teléfono con cualquier red al instante.</p>
      </div>
    </div>
    <div class="row mb-4">
        <div class="col-6 col-md-3 mb-3">
          <div class="card m-0 serviceItem">
            <div class="card-body">
              <div class="serviceIconInner">
                <div class="serviceIcon">
                  <span class="material-symbols-outlined"> wifi </span>
                </div>
              </div>
              <h3>Desbloqueo remoto</h3>
              <p>Acceder y liberar dispositivos desde una ubicación externa, utilizando tecnologías como redes móviles, Wi-Fi o Bluetooth.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <div class="card m-0 serviceItem">
            <div class="card-body">
              <div class="serviceIconInner">
                <div class="serviceIcon">
                  <span class="material-symbols-outlined"> schedule </span>
                </div>
              </div>
              <h3>Entrega en 24 horas</h3>
              <p> Servicio que garantiza la entrega de productos o servicios dentro de un plazo máximo de un día.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <div class="card m-0 serviceItem">
            <div class="card-body">
              <div class="serviceIconInner">
                <div class="serviceIcon">
                  <span class="material-symbols-outlined"> lock_open_right </span>
                </div>
              </div>
              <h3>Desbloqueo permanente</h3>
              <p>Proceso que permite acceder y liberar un dispositivo de manera indefinida, sin restricciones temporales o limitaciones adicionales.</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3 mb-3">
          <div class="card m-0 serviceItem">
            <div class="card-body">
              <div class="serviceIconInner">
                <div class="serviceIcon">
                  <span class="material-symbols-outlined"> location_on </span>
                </div>
              </div>
              <h3>Seguimiento en directo de órdenes</h3>
              <p>Función que permite monitorear y seguir el progreso de las órdenes en tiempo real, proporcionando actualizaciones instantáneas.</p>
            </div>
          </div>
        </div>
      </div>
    <div class="brandIcon">
      <img src="assets/img/Apple.png" style="background-color: #111111;" alt="Apple" />
      <img src="assets/img/Blackberry.png" alt="Blackberry" style="background-color: #000000;"/>
      <img src="assets/img/Huawei.png" alt="Huawei" style="background-color: #CF0A2C;"/>
      <img src="assets/img/LG.png" alt="LG" style="background-color: #C70851;"/>
      <img src="assets/img/Motorola.png" alt="Motorola" style="background-color: #5c92fa;"/>
      <img src="assets/img/Samsung.png" alt="Samsung" style="background-color: #0c4da2;"/>
    </div>
  </div>
</section> 

<!-- step -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="stepItemLargeImage position-relative">
          <img src="assets/img/iphoneMobile.png" class="img-fluid" />
          <div class="imeiType"></div>
        </div>
      </div>
      <div class="col-md-6">
        <h3 class="title mb-4">
          <span class="text-primary">Desbloquea tu teléfono en 3 sencillos pasos.</span> Desbloqueo seguro, legal y garantizado para teléfonos iPhone y Android a través de Desblot.
        </h3>
        <div class="stepItem position-relative d-flex">
          <div class="stepItemIcon">
            <span>
               <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="https://www.w3.org/2000/svg">
                  <g style="mix-blend-mode:multiply">
                  <path class="main-bg" d="M4.66766 18.8519C-4.37425 32.8161 8.5593 40 19.4834 40C30.2244 40 42.3709 35.9136 42.3709 23.3559C42.3655 -8.96311 20.1854 -5.10428 4.66766 18.8519Z" fill="currentColor"/>
                  </g>
                  <path d="M0.886829 32.563C0.845942 32.563 0.805948 32.5509 0.771881 32.5281C0.737814 32.5053 0.711194 32.4729 0.695366 32.4349C0.679538 32.3968 0.675208 32.355 0.682925 32.3145C0.690641 32.274 0.710058 32.2367 0.738733 32.2073L8.96478 23.9395C9.00472 23.9178 9.05069 23.9101 9.09546 23.9176C9.14022 23.9251 9.18125 23.9474 9.21208 23.981C9.24291 24.0145 9.2618 24.0575 9.26578 24.1031C9.26975 24.1487 9.25859 24.1943 9.23404 24.2328L1.03493 32.5033C1.01546 32.5227 0.992326 32.538 0.966886 32.5483C0.941447 32.5585 0.914223 32.5635 0.886829 32.563V32.563Z" fill="white"/>
                  <path d="M33.901 20.2052C33.8744 20.2053 33.8481 20.2001 33.8236 20.1899C33.7991 20.1796 33.7769 20.1645 33.7583 20.1455C33.7201 20.1064 33.6987 20.0537 33.6987 19.9989C33.6987 19.944 33.7201 19.8914 33.7583 19.8522C34.1056 19.4911 42.2751 11.0306 42.9887 10.55C43.0343 10.5237 43.0882 10.5159 43.1393 10.5281C43.1905 10.5403 43.2351 10.5717 43.2642 10.6159C43.2933 10.66 43.3047 10.7137 43.296 10.766C43.2873 10.8183 43.2593 10.8653 43.2175 10.8975C42.6548 11.2749 36.4132 17.6991 34.0625 20.1428C34.0415 20.1642 34.0163 20.1808 33.9884 20.1916C33.9606 20.2023 33.9308 20.207 33.901 20.2052V20.2052Z" fill="white"/>
               </svg>
               <b>01</b>
            </span>
           
          </div>
          <div class="stepItemContent">
            <h5>Proporcione los detalles de su dispositivo.</h5>
            <p>Seleccione la red y el modelo de teléfono que desea desbloquear y proporcione el número IMEI. Gracias a nuestra conexión directa con las bases de datos de los fabricantes, el desbloqueo se procesará de forma inmediata y sin afectar la garantía.</p>
          </div>
          <div class="stepItemShape-1 d-none d-md-block">
             <svg class="line-dash-path" width="38" height="122" viewBox="0 0 38 122" fill="none" xmlns="https://www.w3.org/2000/svg">
                <path d="M0.279297 1C41.9846 20.0005 55.1988 87.9525 2.74393 121.294" stroke="#A7ACB3" stroke-dasharray="4 4"/>
             </svg>
          </div>
        </div>
        <div class="stepItem position-relative d-flex">
          <div class="stepItemIcon">
            <span>
               <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="https://www.w3.org/2000/svg">
                  <g style="mix-blend-mode:multiply">
                  <path class="main-bg-2" d="M4.66766 18.8519C-4.37425 32.8161 8.5593 40 19.4834 40C30.2244 40 42.3709 35.9136 42.3709 23.3559C42.3655 -8.96311 20.1854 -5.10428 4.66766 18.8519Z" fill="currentColor"/>
                  </g>
                  <path d="M0.886829 32.563C0.845942 32.563 0.805948 32.5509 0.771881 32.5281C0.737814 32.5053 0.711194 32.4729 0.695366 32.4349C0.679538 32.3968 0.675208 32.355 0.682925 32.3145C0.690641 32.274 0.710058 32.2367 0.738733 32.2073L8.96478 23.9395C9.00472 23.9178 9.05069 23.9101 9.09546 23.9176C9.14022 23.9251 9.18125 23.9474 9.21208 23.981C9.24291 24.0145 9.2618 24.0575 9.26578 24.1031C9.26975 24.1487 9.25859 24.1943 9.23404 24.2328L1.03493 32.5033C1.01546 32.5227 0.992326 32.538 0.966886 32.5483C0.941447 32.5585 0.914223 32.5635 0.886829 32.563V32.563Z" fill="white"/>
                  <path d="M33.901 20.2052C33.8744 20.2053 33.8481 20.2001 33.8236 20.1899C33.7991 20.1796 33.7769 20.1645 33.7583 20.1455C33.7201 20.1064 33.6987 20.0537 33.6987 19.9989C33.6987 19.944 33.7201 19.8914 33.7583 19.8522C34.1056 19.4911 42.2751 11.0306 42.9887 10.55C43.0343 10.5237 43.0882 10.5159 43.1393 10.5281C43.1905 10.5403 43.2351 10.5717 43.2642 10.6159C43.2933 10.66 43.3047 10.7137 43.296 10.766C43.2873 10.8183 43.2593 10.8653 43.2175 10.8975C42.6548 11.2749 36.4132 17.6991 34.0625 20.1428C34.0415 20.1642 34.0163 20.1808 33.9884 20.1916C33.9606 20.2023 33.9308 20.207 33.901 20.2052V20.2052Z" fill="white"/>
               </svg>
               <b>02</b>
            </span>
           
          </div>
          <div class="stepItemContent">
            <h5>Nos encargamos de su proceso de desbloqueo.</h5>
            <p>Al recibir el pago, procesamos de forma remota el desbloqueo de su dispositivo. Puede seguir el progreso de su pedido en la página de seguimiento. El desbloqueo de dispositivos Samsung y de otros fabricantes suele tardar entre 1 y 6 horas, mientras que el desbloqueo de dispositivos iPhone tarda 24 horas.</p>
          </div>
          <div class="stepItemShape-2 d-none d-md-block">
             <svg class="line-dash-path" width="42" height="122" viewBox="0 0 42 122" fill="none" xmlns="https://www.w3.org/2000/svg">
                <path d="M41.3076 1.22192C-1.33493 18.0137 -18.0874 85.181 32.5507 121.222" stroke="#A7ACB3" stroke-dasharray="4 4"></path>
             </svg>
          </div>
        </div>
        <div class="stepItem position-relative d-flex">
          <div class="stepItemIcon">
            <span>
               <svg width="44" height="40" viewBox="0 0 44 40" fill="none" xmlns="https://www.w3.org/2000/svg">
                  <g style="mix-blend-mode:multiply">
                  <path class="main-bg-3" d="M4.66766 18.8519C-4.37425 32.8161 8.5593 40 19.4834 40C30.2244 40 42.3709 35.9136 42.3709 23.3559C42.3655 -8.96311 20.1854 -5.10428 4.66766 18.8519Z" fill="currentColor"/>
                  </g>
                  <path d="M0.886829 32.563C0.845942 32.563 0.805948 32.5509 0.771881 32.5281C0.737814 32.5053 0.711194 32.4729 0.695366 32.4349C0.679538 32.3968 0.675208 32.355 0.682925 32.3145C0.690641 32.274 0.710058 32.2367 0.738733 32.2073L8.96478 23.9395C9.00472 23.9178 9.05069 23.9101 9.09546 23.9176C9.14022 23.9251 9.18125 23.9474 9.21208 23.981C9.24291 24.0145 9.2618 24.0575 9.26578 24.1031C9.26975 24.1487 9.25859 24.1943 9.23404 24.2328L1.03493 32.5033C1.01546 32.5227 0.992326 32.538 0.966886 32.5483C0.941447 32.5585 0.914223 32.5635 0.886829 32.563V32.563Z" fill="white"/>
                  <path d="M33.901 20.2052C33.8744 20.2053 33.8481 20.2001 33.8236 20.1899C33.7991 20.1796 33.7769 20.1645 33.7583 20.1455C33.7201 20.1064 33.6987 20.0537 33.6987 19.9989C33.6987 19.944 33.7201 19.8914 33.7583 19.8522C34.1056 19.4911 42.2751 11.0306 42.9887 10.55C43.0343 10.5237 43.0882 10.5159 43.1393 10.5281C43.1905 10.5403 43.2351 10.5717 43.2642 10.6159C43.2933 10.66 43.3047 10.7137 43.296 10.766C43.2873 10.8183 43.2593 10.8653 43.2175 10.8975C42.6548 11.2749 36.4132 17.6991 34.0625 20.1428C34.0415 20.1642 34.0163 20.1808 33.9884 20.1916C33.9606 20.2023 33.9308 20.207 33.901 20.2052V20.2052Z" fill="white"/>
               </svg>
               <b>03</b>
            </span>
           
          </div>
          <div class="stepItemContent">
            <h5>¡El teléfono está listo!</h5>
            <p>Su dispositivo ha sido desbloqueado, tanto legal como permanentemente. Recibirás la confirmación de esto por correo electrónico. Los iPhone se desbloquean de forma inalámbrica, mientras que los dispositivos Samsung requieren la entrada de un código. Nuestro personal está disponible las 24 horas, los 7 días de la semana para cualquier ayuda que pueda necesitar.</p>
          </div>
          <div class="stepItemShape-3 d-none d-md-block">
             <svg class="line-dash-path" width="38" height="122" viewBox="0 0 38 122" fill="none" xmlns="https://www.w3.org/2000/svg">
                <path d="M0.279297 1C41.9846 20.0005 55.1988 87.9525 2.74393 121.294" stroke="#A7ACB3" stroke-dasharray="4 4"/>
             </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="no-margin-top background-right home-content">
  <div class="container">
    <div class="row align-items-center flex-row-reverse">
      <div class="col-md-6 col-xs-12 pt-5">
        <img src="assets/img/content.png" alt="" class="img-fluid">
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="row">
          <div class="text-center-xs text-center-sm col-md-8 col-xs-12 mt-3">
            <h3 class="title"><span class="text-primary">Servicio de </span> desbloqueo de teléfonos</h3>
            <p>En Desblot, nuestro equipo de expertos está listo para facilitar el proceso de desbloqueo del teléfono lo máximo posible y para ofrecerle tranquilidad en cada paso del proceso. Una vez que seleccione el fabricante y modelo de su teléfono, nos proporcione su número IMEI y pague la tarifa de desbloqueo, podrá mantenerse al tanto del proceso gracias a nuestro servicio de seguimiento en directo. Una vez completado el desbloqueo, su código estará desbloqueado o recibirá un código de desbloqueo mediante 3G/4G/WIFI.</p> 
          </div>
        </div>
      </div> 
    </div>
  </div>
</section>
<!-- faq -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 position-relative">
        <img src="assets/img/faq.png" alt="faq" class="img-fluid position-relative z-3 p-5 pb-0">
       
      </div>
      <div class="col-md-6">
        <h3 class="title mb-4"><span class="text-primary">Preguntas frecuentes</span> sobre el desbloqueo del teléfono</h3>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                ¿Cómo puedo desbloquear mi teléfono?
              </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Desbloquear tu teléfono es más sencillo de lo que imaginas. Simplemente proporcione a Desblot el IMEI de su teléfono (un código único de 15 dígitos que identifica su teléfono) y lo desbloquearemos permanentemente a través de nuestro servicio de desbloqueo remoto. Su desbloqueo se realiza sin problemas "por aire" mediante WIFI/3G/4G.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
               ¿Es legal el desbloqueo del teléfono?
              </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
              Nos complace confirmar que desbloquear su teléfono es completamente legal y no afectará su garantía de ninguna manera. Incluso si tiene contrato con un proveedor específico, aún puede desbloquear su teléfono para usarlo con un transportista alternativo. 
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                ¿Cuánto tiempo lleva desbloquear mi teléfono? 
              </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               En numerosos casos, los teléfonos se pueden desbloquear dentro de las 24 horas, aunque la duración puede variar según el estado del contrato de su dispositivo. Además, no necesitará enviar su teléfono a ningún otro lugar .
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
               ¿Cómo puedo verificar el estado de desbloqueo de mi teléfono?
              </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                En Desblot, brindamos un servicio de seguimiento en vivo para mantenerlo informado sobre el estado del desbloqueo de su teléfono .
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                ¿Cuál es el significado de 'Lista Negra'? 
              </button>
            </h2>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
               El término 'Incluido en la lista negra' indica que su dispositivo ha sido reportado como perdido o robado, o que tiene facturas impagas asociadas con su contrato. Si no está seguro de si su dispositivo está en la lista negra, puede utilizar nuestro servicio de verificación de lista negra. Utilizar esta verificación también salvaguarde su garantía de devolución de dinero, ya que no podemos desbloquear ningún dispositivo que haya sido incluido en la lista negra por ningún motivo.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- why choose us -->
<section class="whyChooseus">
  <div class="container">
    <div class="row">
      <div class="col-md-6"> 

        <h3 class="title"><span class="text-primary">¿Por qué elegir Desblot</span> para tus necesidades de desbloqueo de teléfono?</h3>
        <p>Desbloquear su teléfono con Desblot tiene varias ventajas:</p> <br>
        <div>
          <h6><strong>Servicio de desbloqueo seguro y legal:</strong></h6>
          <p>Nuestro servicio de desbloqueo de SIM es completamente legal y seguro, lo que garantiza que la garantía y el rendimiento de su teléfono no se vean afectados.</p>
        </div>
        <div>
          <h6><strong>Método de desbloqueo permanente recomendado:</strong></h6>
          <p>Nuestro método de desbloqueo recomendado es permanente, lo que garantiza que su teléfono permanezca desbloqueado independientemente de futuras actualizaciones de software, lo que le permite usarlo con cualquier proveedor a nivel internacional.</p>
        </div>
        <div>
          <h6><strong>Asequible y confiable:</strong></h6>
          <p>El acceso a varias tarifas le permite ahorrar dinero cambiando de operador o evitando cargos de roaming mientras viaja al extranjero.</p>
        </div>
        <div>
          <h6><strong>Mayor valor de su teléfono:</strong></h6>
          <p>Transfiera fácilmente su teléfono desbloqueado a amigos o familiares o véndalo a un valor más alto cuando actualice a un nuevo modelo en el futuro.</p>
        </div>
        <div>
          <h6><strong>Servicio de seguimiento de pedidos en vivo:</strong></h6>
          <p>¡Priorizamos mantenerlo informado durante todo el proceso de desbloqueo, brindándole un servicio de seguimiento en vivo para su tranquilidad!</p>
        </div> 
      </div>
      <div class="col-md-6">
        <img src="assets/img/why.png" class="img-fluid" />
      </div>
    </div>
  </div>
</section>
<!-- testmonial -->
<section class="text-center" id="testmonial">
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col-md-4 my-4 bg-white">
        <h3><strong>Opiniones de nuestros provedores</strong></h3>
        <h2 class="mt-4"><strong>Excelente</strong></h2>
        <img src="assets/img/stars-5.svg" alt="star" height="40">
        <p class="mt-2">En base a <strong><u>23.905 opiniones</u></strong></p>
        <img src="assets/img/trustlogo.png" alt="icon" height="40">
      </div>
      <div class="col-md-8">
        <div class="testmonialButton text-end mb-2"> 
          <button class="btn btn-outline-primary btn-sm prevTsetmonial">
            <span class="material-symbols-outlined"> arrow_back_ios </span>
          </button>
          <button class="btn btn-outline-primary btn-sm nextTsetmonial">
            <span class="material-symbols-outlined "> arrow_forward_ios </span>
          </button>
        </div>
        <div class="testmonialList"> 
          <div>
            <div class="testmonialItem">
              <img src="assets/img/stars.png" alt="stars" class="mb-3">
              <h6 class="text-muted">Favian M</h6>
              <h5>Increíble realmente fácil y me encanta cómo funciona esto y yo...</h5>
              <p>¡Increíble, realmente fácil y me encanta cómo funciona esto y no tengo que ir a la tienda solo para desbloquear! Muy barato también 10/10 debe recomendar.</p>
            </div>
          </div>
          <div>
            <div class="testmonialItem">
              <img src="assets/img/stars.png" alt="stars" class="mb-3">
              <h6 class="text-muted">Terry S</h6>
              <h5>Buen servicio, me esforcé mucho para que at&amp;t desbloqueara...</h5>
              <p>Buen servicio, me esforcé mucho para que at&amp;t desbloqueara mi teléfono que les compré y es imposible. Desbloqueaste mi primer teléfono tan rápido, fue genial y simple. Primero pensé que el dinero era un poco alto, pero es mucho mejor que gastar otro gran en un teléfono nuevo.</p>
            </div>
          </div>
          <div>
            <div class="testmonialItem">
              <img src="assets/img/stars.png" alt="stars" class="mb-3">
              <h6 class="text-muted">Keith L</h6>
              <h5>Ellos hicieron el trabajo...</h5>
              <p>Desbloqueo móvil desbloqueó mi teléfono en poco más de 1 día. Gracias.</p>
            </div>
          </div>
          <div>
            <div class="testmonialItem">
              <img src="assets/img/stars.png" alt="stars" class="mb-3">
              <h6 class="text-muted">Laura F</h6>
              <h5>¡Impresionante!...</h5>
              <p>¡Impresionante! ¡Realmente rápido y eficiente! ¡Pasos muy fáciles de seguir!. Gracias.</p>
            </div>
          </div>
          <div>
            <div class="testmonialItem">
              <img src="assets/img/stars.png" alt="stars" class="mb-3">
              <h6 class="text-muted">Audrey L</h6>
              <h5>Rápido y fácil...</h5>
              <p>Rápido y fácil de usar. El teléfono se desbloqueó muy rápido.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-5">
        <div class="pb-5">
          <h3><strong>Operadores telefonicos</strong></h3>
          <img src="assets/img/partner.png" class="img-fluid">
        </div> 
      </div>
    </div> 
  </div>
</section>
<?php include 'footer.php'; ?>