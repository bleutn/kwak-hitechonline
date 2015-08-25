<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produit'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seance'), ['controller' => 'Seance', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Seance'), ['controller' => 'Seance', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="produit view large-10 medium-9 columns">
    <h2><?= h($produit->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($produit->id) ?></p>
            <h6 class="subheader"><?= __('Id Categorie') ?></h6>
            <p><?= $this->Number->format($produit->id_categorie) ?></p>
            <h6 class="subheader"><?= __('Prix') ?></h6>
            <p><?= $this->Number->format($produit->prix) ?></p>
            <h6 class="subheader"><?= __('Quantite') ?></h6>
            <p><?= $this->Number->format($produit->quantite) ?></p>
            <h6 class="subheader"><?= __('Nb Vendu') ?></h6>
            <p><?= $this->Number->format($produit->nb_vendu) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Intitule') ?></h6>
            <?= $this->Text->autoParagraph(h($produit->intitule)) ?>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($produit->description)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Seance') ?></h4>
    <?php if (!empty($produit->seance)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Date Deb') ?></th>
            <th><?= __('Date Fin') ?></th>
            <th><?= __('Titre') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($produit->seance as $seance): ?>
        <tr>
            <td><?= h($seance->id) ?></td>
            <td><?= h($seance->date_deb) ?></td>
            <td><?= h($seance->date_fin) ?></td>
            <td><?= h($seance->titre) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Seance', 'action' => 'view', $seance->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Seance', 'action' => 'edit', $seance->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seance', 'action' => 'delete', $seance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seance->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
