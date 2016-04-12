<?php
 include ("header.php");
?>
<main id="main">

	<div class="container">
		<div class="row topspace">
			<div class="col-sm-8 col-sm-offset-2">
<form action="post">
	<div class="container-fluid">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Área da comunidade</div>
                    </div>     
 
                    <div style="padding-top:30px" class="panel-body" >
 
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Usuário">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Senha">
                                    </div>
                                    
 
                                
                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar
                                        </label>
                                      </div>
                                    </div>
 
 
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
 
                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Login  </a><br>
                                      <!--<a id="btn-fblogin" href="#" class="btn btn-primary">Login com Facebook</a>-->    
 
                                    </div>
                                </div>
 
 
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Não tem uma conta ainda?
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Crie uma agora.
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     
 
 
 
                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Criar usuário</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Erro:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Nome:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Nome de usuário:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="user" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Formação:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="formacao" placeholder="">
                                    </div>
                                </div>                                  

                                <div class="form-group">
                                    <label for="suscard" class="col-md-3 control-label">Cargo:</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="cargo" placeholder="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">E-mail</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Repita a Senha</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd2" placeholder="">
                                    </div>
                                </div>

 
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> Cadastrar</button>
                                        <button id="btn-signup" type="reset" class="btn btn-info"><i class="icon-hand-right"></i> Cancelar</button>
                                    </div>
                                </div>

                               
                                
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <!--<div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Cadastre-se com o Facebook</button>
                                    </div>-->
                                    <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Voltar à tela de Login <<<</a></div>                                           
                                        
                                </div>         
                            </form>
                         </div>
                    </div>
         </div> 
    </div>
</form>

	</div>

	</div>	<!-- /container -->

</main>
<?php
 include ("footer.php");
?>