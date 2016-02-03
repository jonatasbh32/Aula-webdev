
<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gênises- Sistemas</title>

     <?php 
        echo $this->Html->css([
            '/bower_components/bootstrap/dist/css/bootstrap.min',
            '/bower_components/metisMenu/dist/metisMenu.min',
            '/dist/css/timeline',
            '/dist/css/sb-admin-2',
            '/bower_components/morrisjs/morris',
            '/bower_components/font-awesome/css/font-awesome.min',
            



        ]);
    ?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Faça o seu Login</h3>
                    </div>
                    <div class="panel-body">
                     <?= $this->Flash->render('auth') ?>
                     <?= $this->Form->create() ?>
                        <form role="form">
                            <fieldset>
                                <div class="form-group">

                               <?= $this->Form->input('email',[ 
                               		'label'=> '', 
                               		'class'=>'form-control', 
                               		'placeholder'=>'E-mail',
                               		'type'=>'email',
                               		'autofocus'
                               		]) ?>
                                </div>

                                <div class="form-group">
                                <?= $this->Form->input('password',[ 
                               		'label'=> '', 
                               		'class'=>'form-control', 
                               		'placeholder'=>'Password',
                               		'type'=>'password',
                               		'value'=>''
                               		]) ?>
                                    
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?= $this->Form->button('Login',[
                                	'class'=>'btn btn-lg btn-success btn-block'
                                ]); ?>
                                <?= $this->Form->end() ?>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php 
    echo $this->Html->script([
        '/bower_components/jquery/dist/jquery.min',
        '/bower_components/bootstrap/dist/js/bootstrap.min',
        '/bower_components/metisMenu/dist/metisMenu.min',
        '/bower_components/raphael/raphael-min',
        '/bower_components/morrisjs/morris.min',
        '/js/morris-data.js',
        '/dist/js/sb-admin-2'
    ]);
?>
</body>

</html>
