<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lidere'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Celulas'), ['controller' => 'Celulas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Celula'), ['controller' => 'Celulas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lideres index large-9 medium-8 columns content">
    <h3><?= __('Lideres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('geracao') ?></th>
                <th><?= $this->Paginator->sort('m12') ?></th>
                <th><?= $this->Paginator->sort('celula_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lideres as $lidere): ?>
            <tr>
                <td><?= $this->Number->format($lidere->id) ?></td>
                <td><?= h($lidere->nome) ?></td>
                <td><?= h($lidere->geracao) ?></td>
                <td><?= h($lidere->m12) ?></td>
                <td><?= $lidere->has('celula') ? $this->Html->link($lidere->celula->id, ['controller' => 'Celulas', 'action' => 'view', $lidere->celula->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lidere->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lidere->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lidere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lidere->id)]) ?>
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
