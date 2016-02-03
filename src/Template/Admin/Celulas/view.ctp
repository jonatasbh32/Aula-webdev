<div class="panel panel-default">
                        <div class="panel-heading">
                          <?= ('Células    ') ?>
                        </div>

    

  
<div class="panel-body">



<div class="celulas view large-9 medium-8 columns content">
    <h3><?= h($celula->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome:') ?></th>
            <td><?= h($celula->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Email:') ?></th>
            <td><?= h($celula->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereço:') ?></th>
            <td><?= h($celula->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro:') ?></th>
            <td><?= h($celula->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade:') ?></th>
            <td><?= h($celula->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Obs:') ?></th>
            <td><?= h($celula->obs) ?></td>
        </tr>
        <tr>
            <th><?= __('Dia:') ?></th>
            <td><?= $celula->has('dia') ? $this->Html->link($celula->dia->id, ['controller' => 'Dias', 'action' => 'view', $celula->dia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Hora:') ?></th>
            <td><?= $celula->has('hora') ? $this->Html->link($celula->hora->id, ['controller' => 'Horas', 'action' => 'view', $celula->hora->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id:') ?></th>
            <td><?= $this->Number->format($celula->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Lideres relacionados') ?></h4>
        <?php if (!empty($celula->lideres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Geracao') ?></th>
                <th><?= __('M12') ?></th>
                <th><?= __('Celula Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($celula->lideres as $lideres): ?>
            <tr>
                <td><?= h($lideres->id) ?></td>
                <td><?= h($lideres->nome) ?></td>
                <td><?= h($lideres->geracao) ?></td>
                <td><?= h($lideres->m12) ?></td>
                <td><?= h($lideres->celula_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lideres', 'action' => 'view', $lideres->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lideres', 'action' => 'edit', $lideres->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lideres', 'action' => 'delete', $lideres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lideres->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Membros') ?></h4>
        <?php if (!empty($celula->membros)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Celula Id') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Bairro') ?></th>
                <th><?= __('Cidade') ?></th>
                <th><?= __('Data Nasc') ?></th>
                <th><?= __('Lidercelu') ?></th>
                <th><?= __('Tel') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($celula->membros as $membros): ?>
            <tr>
                <td><?= h($membros->id) ?></td>
                <td><?= h($membros->nome) ?></td>
                <td><?= h($membros->celula_id) ?></td>
                <td><?= h($membros->endereco) ?></td>
                <td><?= h($membros->bairro) ?></td>
                <td><?= h($membros->cidade) ?></td>
                <td><?= h($membros->data_nasc) ?></td>
                <td><?= h($membros->lidercelu) ?></td>
                <td><?= h($membros->tel) ?></td>
                <td><?= h($membros->email) ?></td>
                <td><?= h($membros->departamento_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Membros', 'action' => 'view', $membros->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Membros', 'action' => 'edit', $membros->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Membros', 'action' => 'delete', $membros->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membros->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
</div>
</div>

