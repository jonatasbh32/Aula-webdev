<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dias form large-9 medium-8 columns content">
    <?= $this->Form->create($dia) ?>
    <fieldset>
        <legend><?= __('Edit Dia') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
