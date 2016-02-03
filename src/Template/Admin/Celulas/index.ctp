



<div class="panel panel-default">
<div class="panel-heading">

    <h4>
        <?= $this->Html->link('', ['controller' => 'Celulas', 'action' => 'add'], [
                                                'type'=>'button', 
                                                'class'=>'btn btn-info btn-circle',
                                                 'type'=>'button',
                                                 'class'=>' fa fa-plus'
                                    ]); 
        ?>
        <?= ('Células    ') ?>
        
    </h4>
 

    

</div>
<div class="panel-body">


 <div class="row">
<div class="col-lg-3">
<div class="form-group input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
            </button>







        </span>
    </div>

</div>
</div>






    <div class="table-responsive">
    <table class="table table-striped">

                    
    
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('endereço') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th class="actions"><?= ('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($celulas as $celula): ?>
            <tr>
                <td><?= h($celula->nome) ?></td>
                <td><?= h($celula->email) ?></td>
                <td><?= h($celula->endereco) ?></td>
                <td><?= h($celula->bairro) ?></td>
              
                <td class="actions">



                    <?= $this->Html->link('Ver', ['action' => 'view', $celula->id], ['class'=>'btn  btn-default btn-xs']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $celula->id], ['class'=>'btn  btn-default btn-xs']) ?>
                    <?= $this->Form->postLink('Deletar', ['action' => 'delete', $celula->id],['class'=>'btn  btn-default btn-xs', 'confirm' => __('Você tem certeza que deletar # {0}?', $celula->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

</div>
<div class="panel-footer">

</div>
</div>
