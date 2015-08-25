<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Categorie'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="categorie form large-10 medium-9 columns">
    <?= $this->Form->create($categorie) ?>
    <fieldset>
        <legend><?= __('Add Categorie') ?></legend>
        <?php
            echo $this->Form->input('intitule');
            echo $this->Form->input('desciption');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
