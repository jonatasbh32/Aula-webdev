  <?= $this->Flash->render('positive') ?>

<div class="panel panel-default">
<div class="panel-heading">
<h4><?= __('Cadastrar Célula') ?></h4>


</div>
<div class="panel-body">

    <?= $this->Form->create($celula) ?>

    <fieldset>
    
        <div class="col-lg-6", class="form-group">
            <?php
                echo $this->Form->input('nome', [
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'Nome'
               ]);
            ?>    
        </div>


        <div class="col-lg-6", class="form-group">
            <?php          
                echo $this->Form->input('email', [
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'E-mail',
                            'type'=>'email'
                ]);
            ?> 
        </div>   


        <div class="col-lg-6", class="form-group">
        
            <?php    
                echo $this->Form->input('endereco', [   
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'Endereço'
                            
                ]);
            ?>  

        </div>


        <div class="col-lg-6", class="form-group">
        
        <?php  
            echo $this->Form->input('bairro', [
                        'label'=>'',
                        'class'=>'form-control',
                        'placeholder'=> 'Bairro'
            ]);
        ?> 
        </div>


        <div class="col-lg-6", class="form-group">
        
            <?php   

                echo $this->Form->input('cidade', [
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'Cidade'
                ]);
            ?>

        </div>


        <div class="col-lg-6", class="form-group">

            <?php    
                echo $this->Form->input('dia_id', [
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'Dia'],
                            ['options' => $dias
                        ]);
            ?>
        </div>


        <div class="col-lg-6", class="form-group">

        <?php
            echo $this->Form->input('hora_id', [
                        'label'=>'',
                        'class'=>'form-control',
                        'placeholder'=> 'Horário'],
                        ['options' => $horas
                    ]);
        ?>

        </div>
 

        <div class="col-lg-6", class="form-group">

            <?php
                  echo $this->Form->input('obs',[
                            'label'=>'',
                            'class'=>'form-control',
                            'placeholder'=> 'Observação', 
                            'rows'=>'3',  

                  ]);      
            ?>
        </div>

    </fieldset>
    <?= $this->Form->button('Salvar',[
                    'type'=>'submit',
                    'class'=>'btn btn-default'

    ]) 
    ?>

    <?= $this->Form->end() ?>
</div>
<div class="panel-footer">
</div>
</div>
</div>
  </div>  

