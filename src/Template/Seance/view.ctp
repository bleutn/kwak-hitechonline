<head>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('blue.css') ?>
</head>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Seance'), ['action' => 'edit', $seance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Seance'), ['action' => 'delete', $seance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seance'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produit'), ['controller' => 'Produit', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produit', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="seance view large-10 medium-9 columns">
    <h2><?= h($seance->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($seance->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Deb') ?></h6>
            <p><?= h($seance->date_deb) ?></p>
            <h6 class="subheader"><?= __('Date Fin') ?></h6>
            <p><?= h($seance->date_fin) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Titre') ?></h6>
            <?= $this->Text->autoParagraph(h($seance->titre)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Produit') ?></h4>
    <?php if (!empty($seance->produit)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Id Categorie') ?></th>
            <th><?= __('Intitule') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Prix') ?></th>
            <th><?= __('Quantite') ?></th>
            <th><?= __('Nb Vendu') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($seance->produit as $produit): ?>
        <tr>
            <td><?= h($produit->id) ?></td>
            <td><?= h($produit->id_categorie) ?></td>
            <td><?= h($produit->intitule) ?></td>
            <td><?= h($produit->description) ?></td>
            <td><?= h($produit->prix) ?></td>
            <td><?= h($produit->quantite) ?></td>
            <td><?= h($produit->nb_vendu) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Produit', 'action' => 'view', $produit->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Produit', 'action' => 'edit', $produit->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produit', 'action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
