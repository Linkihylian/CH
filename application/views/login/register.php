        <div class="container">

        <br><br><br><br>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="card box-shadow">
                <div class="card-header text-center">

                  <div><img class="logo" src="<?php echo base_url("assets/img/coinhive-icon.png")?>" /></div>
                  <br/>
                  <h2>Registro</h2>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <form id="login">
                          <input type="text" name="email" onkeypress="validar_email()" value="" id="email" class="form-control" placeholder="Email..."/>
                          <br />
                          <input type="text" name="name" value="" id="name" class="form-control" placeholder="Nombre..."/>
                          <br />
                          <input type="text" name="lastname" value="" id="lastname" class="form-control" placeholder="Apellido..."/>
                          <br />
                          <input type="password" name="password" value="" id="password" class="form-control" placeholder="Contraseña..."/>
                          <br />
                          <input type="password" name="password2" value="" id="password2" class="form-control" placeholder="Ingrese nuevamente su contraseña..."/>
                          <br />
                          <input type="text" name="ci" value="" id="ci" class="form-control" placeholder="C.I...."/>
                        </form>
                      </div>
                    </div>

                    <div class="col-md-12">
                        <h6 class="text-muted"><a href="<?php echo base_url("index.php/login") ?>">Cuenta existente</a> </h6>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                        <div class="row">
                                <div class="col-sm-12">
                                        <button type="button" name="button" class="btn btn-outline-primary btn-block" onclick="test()">Entrar</button>
                                </div>
                        </div>
                </div>
              </div>
            </div>
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

        //Validar campo Email, Contraseña, Nombre, Apellido, Cedula de Identidad al enviar el formulario
                function test(){

                        var email = $("[name='email']").val();
                        var pass = $("[name='password']").val();
                        var pass2 = $("[name='password2']").val();
                        var name = $("[name='name']").val();
                        var lastname = $("[name='lastname']").val();
                        var ci = $("[name='ci']").val();

                        if(email === ''){
                                $("[name='email']").removeClass("is-valid");
                                $("[name='email']").addClass("is-invalid");
                                alert("Ingrese un Email");
                        }
                        if( name ===''){
                                $("[name='name']").removeClass("is-valid");
                                $("[name='name']").addClass("is-invalid");
                                alert("Ingrese su nombre");
                        }
                        if( lastname ===''){
                                $("[name='lastname']").removeClass("is-valid");
                                $("[name='lastname']").addClass("is-invalid");
                                alert("Ingrese su apellido");
                        }
                        if(pass ===''){
                                $("[name='password']").removeClass("is-valid");
                                $("[name='password']").addClass("is-invalid");
                                alert("Ingrese una contraseña");
                        }
                        if(pass2 ===''){
                                $("[name='password2']").removeClass("is-valid");
                                $("[name='password2']").addClass("is-invalid");
                                alert("Vuelva a ingresar su contraseña");
                        }
                        if( ci ===''){
                                $("[name='ci']").removeClass("is-valid");
                                $("[name='ci']").addClass("is-invalid");
                                alert("Ingrese su Cedula de Identidad");
                        }

                }

        //Funcion para recuperar




        </script>
