<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produit'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seance'), ['controller' => 'Seance', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seance'), ['controller' => 'Seance', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produit form large-10 medium-9 columns">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Edit Produit') ?></legend>
        <?php
            echo $this->Form->input('id_categorie');
            echo $this->Form->select('id_categorie', $categories_intitule, ['size' => 10]);
            echo $this->Form->input('intitule');
            echo $this->Form->input('description');
            echo $this->Form->input('prix');
            echo $this->Form->input('quantite');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
