<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Utilisateur'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="utilisateur form large-10 medium-9 columns">
    <?= $this->Form->create($utilisateur) ?>
    <fieldset>
        <legend><?= __('Add Utilisateur') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('penom');
            echo $this->Form->input('email');
            echo $this->Form->input('newsletter');
            echo $this->Form->input('adresse');
            echo $this->Form->input('code_postal');
            echo $this->Form->input('ville');
            echo $this->Form->input('telephone');
            echo $this->Form->input('telephone mobile');
            echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
