<?php include 'header.php'; ?> 
<section class="py-5 mt-5">
  <div class="container">
    <div class="card">
      <div class="card-body bg-light rounded">
        <div class="d-flex align-items-center gap-3">
          <div class="bg-white p-2 rounded">
            <img id="networkItemImage" src="assets/img/Claro.png" height="50">
          </div>
          <div>
            <h5><strong>Order your <span class="namePhoneImei">iPhone 14 Pro</span> Unlock</strong></h5>
            <div>via eligibility check</div>
          </div>
        </div>
      </div>
    </div>
    <form class="row flex-row-reverse mt-4"  method="POST" id="submitFrom">
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="text-primary">Resumen de la orden</h5>
            <table class="table mb-0">
              <thead>
                <tr>
                  <th>PRODUCTO</th>
                  <th class="text-nowrap text-end">TOTAL PARCIAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>
                    <span class="namePhoneImei"></span> - 
                    <div class="fw-normal">
                      <small class="IMEI"><small>Número IMEI:</small><br><span class="codePhoneImei">352130212294507</span></small>
                    </div>
                  </th>
                  <td class="text-end">$30.00 Check</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card mb-4 bg-light">
          <div class="card-body">
          
            <table class="table mb-0">
              <thead>
                <tr>
                  <td class="text-nowrap">iempo medio de entrega:</td>
                  <td class="text-nowrap text-end">Instant</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>
                     <h5>Total</h5>
                  </th>
                  <td class="text-end">
                    <h5>$30.00 (USD)</h5>
                  </td>
                </tr>
                <tr>
                  <th>
                     
                  </th>
                  <td class="text-end">
                    <div class="d-flex align-items-center justify-content-end">
                       <span class="material-symbols-outlined"> lock </span> Pagos seguros 
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <p>Una vez que se realiza el pedido, su IMEI se enviará a la base de datos para liberar el desbloqueo.</p>
        <div class="row mb-2">
          <div class="col-md-3 col-xs-4">
              <label>IMEI / Redes:</label>
          </div>
          <div class="col-md-9 col-xs-8">
              <span class="codePhoneImei">352130212294507</span> / <span class="networkNameText">Movistar Argentina</span>
          </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-3 col-xs-4">
                <label class="margin-bottom-15">Avg. Delivery:</label>
            </div>
            <div class="col-md-9 col-xs-8">
                Instant
            </div>
        </div>
        <h5 class="mt-5">Ingrese sus datos a continuación:</h5>
        <div class="input-group mb-4">
          <div class="input-group-text text-primary">
            <span class="material-symbols-outlined"> mail </span>
          </div>
          <div class="form-floating">
            <input type="email" id="emailaddess" placeholder="Enter email address" class="form-control" name="emailaddress" required>
            <label for="IngresarIMEI"> Introducir la dirección de correo electrónico </label>
          </div> 
        </div>
        <h5 class="mt-5">Seleccione un método de pago:</h5>
        <div class="border p-3 rounded mb-4">
          <div class="form-check d-flex gap-2 align-items-center">
            <input class="form-check-input mt-0" type="radio" name="paymentmathord" id="CardPayment" required>
            <label class="form-check-label d-flex gap-2 align-items-center" for="CardPayment">
              Mercadopago  <img src="assets/img/buttonPagar.png" height="30" /> 
            </label>
          </div>
          
        </div>
        <div class="mb-4">
          <label>
            <input  name="terms" type="checkbox" value="" id="tremsPolicy"> Al marcar esta casilla, confirma que ha leído y entendido nuestro <a href="trems.php" target="_blank">Términos y condiciones</a> and <a href="privacy.php" target="_blank">Política de privacidad</a>  documentos.</label>
        </div>
        <button type="submit" class="btn btn-primary btn-lg d-flex align-items-center px-5 rounded-pill">Pagar Ahora &nbsp;&nbsp;&nbsp; <span class="material-symbols-outlined"> credit_score </span></button>
      </div>
    </form>
  </div>
</section>

</script>
<?php include 'footer.php'; ?>