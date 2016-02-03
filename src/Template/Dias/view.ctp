<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dia'), ['action' => 'edit', $dia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dia'), ['action' => 'delete', $dia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dias view large-9 medium-8 columns content">
    <h3><?= h($dia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($dia->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dia->id) ?></td>
        </tr>
    </table>
</div>
