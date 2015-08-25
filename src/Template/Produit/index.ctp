<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seance'), ['controller' => 'Seance', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Seance'), ['controller' => 'Seance', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="produit index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('id_categorie') ?></th>
            <th><?= $this->Paginator->sort('prix') ?></th>
            <th><?= $this->Paginator->sort('quantite') ?></th>
            <th><?= $this->Paginator->sort('nb_vendu') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($produit as $produit): ?>
        <tr>
            <td><?= $this->Number->format($produit->id) ?></td>
            <td><?= $this->Number->format($produit->id_categorie) ?></td>
            <td><?= $this->Number->format($produit->prix) ?></td>
            <td><?= $this->Number->format($produit->quantite) ?></td>
            <td><?= $this->Number->format($produit->nb_vendu) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $produit->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produit->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
