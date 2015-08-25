<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Seance'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Produit'), ['controller' => 'Produit', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produit', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="seance form large-10 medium-9 columns">
    <?= $this->Form->create($seance) ?>
    <fieldset>
        <legend><?= __('Add Seance') ?></legend>
        <?php
            echo $this->Form->input('date_deb');
            echo $this->Form->input('date_fin');
            echo $this->Form->input('titre');
            echo $this->Form->input('produit._ids', ['options' => $produit]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
