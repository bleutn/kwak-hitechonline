<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Categorie'), ['action' => 'edit', $categorie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorie'), ['action' => 'delete', $categorie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorie'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorie'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categorie view large-10 medium-9 columns">
    <h2><?= h($categorie->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Intitule') ?></h6>
            <p><?= h($categorie->intitule) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($categorie->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Desciption') ?></h6>
            <?= $this->Text->autoParagraph(h($categorie->desciption)) ?>
        </div>
    </div>
</div>
