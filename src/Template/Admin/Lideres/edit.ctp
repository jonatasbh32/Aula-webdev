<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lidere->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lidere->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lideres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Celulas'), ['controller' => 'Celulas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Celula'), ['controller' => 'Celulas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lideres form large-9 medium-8 columns content">
    <?= $this->Form->create($lidere) ?>
    <fieldset>
        <legend><?= __('Edit Lidere') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('geracao');
            echo $this->Form->input('m12');
            echo $this->Form->input('celula_id', ['options' => $celulas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
