<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Utilisateur'), ['action' => 'edit', $utilisateur->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utilisateur'), ['action' => 'delete', $utilisateur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utilisateur'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilisateur'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="utilisateur view large-10 medium-9 columns">
    <h2><?= h($utilisateur->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nom') ?></h6>
            <p><?= h($utilisateur->nom) ?></p>
            <h6 class="subheader"><?= __('Penom') ?></h6>
            <p><?= h($utilisateur->penom) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($utilisateur->id) ?></p>
            <h6 class="subheader"><?= __('Code Postal') ?></h6>
            <p><?= $this->Number->format($utilisateur->code_postal) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= $this->Number->format($utilisateur->telephone) ?></p>
            <h6 class="subheader"><?= __('Telephone Mobile') ?></h6>
            <p><?= $this->Number->format($utilisateur->telephone mobile) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $this->Number->format($utilisateur->role) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Newsletter') ?></h6>
            <p><?= $utilisateur->newsletter ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Email') ?></h6>
            <?= $this->Text->autoParagraph(h($utilisateur->email)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Adresse') ?></h6>
            <?= $this->Text->autoParagraph(h($utilisateur->adresse)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Ville') ?></h6>
            <?= $this->Text->autoParagraph(h($utilisateur->ville)) ?>
        </div>
    </div>
</div>
