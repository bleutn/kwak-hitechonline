<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nom') ?></h6>
            <p><?= h($user->nom) ?></p>
            <h6 class="subheader"><?= __('Prenom') ?></h6>
            <p><?= h($user->prenom) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Code Postal') ?></h6>
            <p><?= $this->Number->format($user->code_postal) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= $this->Number->format($user->telephone) ?></p>
            <h6 class="subheader"><?= __('Telephone Mobile') ?></h6>
            <p><?= $this->Number->format($user->telephone_mobile) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= $this->Number->format($user->role) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Newsletter') ?></h6>
            <p><?= $user->newsletter ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Password') ?></h6>
            <?= $this->Text->autoParagraph(h($user->password)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Adresse') ?></h6>
            <?= $this->Text->autoParagraph(h($user->adresse)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Ville') ?></h6>
            <?= $this->Text->autoParagraph(h($user->ville)) ?>
        </div>
    </div>
</div>
