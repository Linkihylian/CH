        <div class="container">

        <br><br><br><br>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="card box-shadow">
                <div class="card-header text-center">

                  <div><img class="logo" src="<?php echo base_url("assets/img/coinhive-icon.png")?>" /></div>
                  <br/>
                  <h2>Iniciar sesion</h2>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <form id="login" onsubmit="">
                          <input type="text"  onkeypress="validar_email()" name="email"  value="" id="email" class="form-control" placeholder="Correo@gmail.com..."/>
                          <br />
                          <input type="password" onkeypress="validar_pass()" name="password" value="" id="password" class="form-control" placeholder="Contraseña..."/>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <h6 class="text-muted"> <a  data-target="#RecuperarContraseña" data-toggle="modal">¿Olvidó su contraseña?</a> </h6>
                    </div>
                    <div class="col-md-12">
                        <h6 class="text-muted"><a href="<?php echo base_url("index.php/register") ?>">Registrate aqui</a> </h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                        <div class="row">
                                <div class="col-sm-12">
                                        <button type="submit"  name="submit" class="btn btn-outline-primary btn-block" onclick="test()">Entrar</button>
                                </div>
                        </div>
                </div>


              </div>
            </div>
            <!--INICIO DEL MODAL-->
            <div class="modal fade" id="RecuperarContraseña" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <h5 class="modal-title" id="ModalCenterTitle">Recuperar Contraseña</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                    <div class="modal-body">
                                            <!-- Inicio Recuperar_contraseña T-bone-->
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                                <div class="row">
                                                                    <div class="col-md-7 col-xs-7">
                                                                        <label>Ingrese el Correo electronico:</label>
                                                                    </div>
                                                                </div>

                                        <form id="login">
                                          <input type="text" name="correo" value="" id="1" class="form-control" placeholder="Correo@gmail.com...">
                                        </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Final Recuperar_contraseña T-bone-->
                                    </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                            <button type="button" name="button" class="btn btn-outline-primary" onclick="recuperar()">Enviar</button>
                                    </div>
                            </div>
                    </div>
            </div>
            <!--FINAL DEL MODAL-->
          </div>
        </div>

        <style media="screen">

        .box-shadow{
                box-shadow: 0px 10px 50px #888888;
        }

        .logo{
                background-color: black;
                width: 150px;
                height: 150px;
                position: relative;
                border-radius: 100px;
                left: 50%;
                margin-left: -95%;
        }


        </style>

<script type="text/javascript">
 //Validar campo email onkeypress
        function validar_email(){
                var aux = $("[name='email']").val();
                var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if (eregex.test(aux)) {
                        $("[name='email']").removeClass("is-invalid");
                        $("[name='email']").addClass("is-valid");

                }else{

                        $("[name='email']").removeClass("is-valid");
                        $("[name='email']").addClass("is-invalid");
                }
        }

//Validar campo password onkeypress falta terminar bien
       function validar_pass(){
               var aux = $("[name='password']").val();

               if (aux !== "") {
                       $("[name='email']").removeClass("is-invalid");
                       $("[name='email']").addClass("is-valid");

               }else{

                       $("[name='email']").removeClass("is-valid");
                       $("[name='email']").addClass("is-invalid");
              }
      }



//Validar campo email y contraseña al enviar el formulario
        function test(){

                var email = $("[name='email']").val();
                var pass = $("[name='password']").val();

                if(email === ''){
                        $("[name='email']").removeClass("is-valid");
                        $("[name='email']").addClass("is-invalid");
                        alert("Ingrese un Email");
                }
                if(pass ===''){
                        $("[name='password']").removeClass("is-valid");
                        $("[name='password']").addClass("is-invalid");
                        alert("Ingrese una contraseña");
                }
        }

//Funcion para  Recuperar T-bone

function recuperar(){

  $.ajax({
      type: "POST",
      url: "<?php echo base_url() ?>index.php/Login/recuperar",
      data: $("form").serialize(),
      beforeSend: function () {
        swal.showLoading();
      },
      success: function(data){
        $("#resultado").html(data);
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status+" "+thrownError+"\n\n", "Error cargar pagina");
      },
  });

}

function alerta(tipo, titulo, mensaje){
  swal({
    type: tipo,
    title: titulo,
    text: mensaje,
  })

  if (tipo === "success") {
    $(".swal2-confirm").click(function(){
      window.location.href = "<?php echo base_url() ?>index.php/";
    });
  }

}



</script>
