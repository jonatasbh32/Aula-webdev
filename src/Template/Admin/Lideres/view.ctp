<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lidere'), ['action' => 'edit', $lidere->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lidere'), ['action' => 'delete', $lidere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lidere->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lideres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lidere'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Celulas'), ['controller' => 'Celulas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Celula'), ['controller' => 'Celulas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lideres view large-9 medium-8 columns content">
    <h3><?= h($lidere->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($lidere->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Geracao') ?></th>
            <td><?= h($lidere->geracao) ?></td>
        </tr>
        <tr>
            <th><?= __('M12') ?></th>
            <td><?= h($lidere->m12) ?></td>
        </tr>
        <tr>
            <th><?= __('Celula') ?></th>
            <td><?= $lidere->has('celula') ? $this->Html->link($lidere->celula->id, ['controller' => 'Celulas', 'action' => 'view', $lidere->celula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($lidere->id) ?></td>
        </tr>
    </table>
</div>
