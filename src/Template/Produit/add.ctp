<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Produit'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seance'), ['controller' => 'Seance', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seance'), ['controller' => 'Seance', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produit form large-10 medium-9 columns">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Add Produit') ?></legend>
        <?php
            echo $this->Form->input('id_categorie');
            echo $this->Form->input('intitule');
            echo $this->Form->input('description');
            echo $this->Form->input('prix');
            echo $this->Form->input('quantite');
            echo $this->Form->input('nb_vendu');
            echo $this->Form->input('seance._ids', ['options' => $seance]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
