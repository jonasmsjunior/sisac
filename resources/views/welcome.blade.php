
<!DOCTYPE html>
<html lang="pt-br"  ng-app="MyApp">

<head>
    <meta charset="utf-8">

    <title>SISAC</title>
    <link href="{{asset('assets')}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-default">
                <h1 class="title pager">Acesso ao SISCA (sistema de atividades complementares)</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
             <div class="login-panel panel panel-default" >
                <div class="panel-heading">
                    <h3 class="panel-title">Acessar como Aluno</h3>
                </div>
                 <div class="panel-body pager">
                     <img src="{{asset('assets')}}/img/aluno.png" alt="..." width="100" class="img-circle -align-center"><br>
                     <a href="{{asset('login\aluno')}}" class="btn btn-primary">Entrar</a>
                 </div>
             </div>
        </div>
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Acessar como Professor</h3>
                </div>
                <div class="panel-body pager">
                    <img src="{{asset('assets')}}/img/professor.png" alt="..." width="100" class="img-circle -align-center"><br>
                    <a href="{{asset('login\professor')}}" class="btn btn-primary">Entrar</a>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Acessar como Administrador</h3>
                </div>
                <div class="panel-body pager">
                    <img src="{{asset('assets')}}/img/funcionario.png" alt="..." width="100" class="img-circle -align-center"><br>
                    <a href="{{asset('login\adm')}}" class="btn btn-primary">Entrar</a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="{{asset('assets')}}/bower_components/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="{{asset('assets')}}/dist/js/sb-admin-2.js"></script>

</body>

</html>
