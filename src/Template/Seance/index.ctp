<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Seance'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Produit'), ['controller' => 'Produit', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Produit'), ['controller' => 'Produit', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="seance index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('date_deb') ?></th>
            <th><?= $this->Paginator->sort('date_fin') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($seance as $seance): ?>
        <tr>
            <td><?= $this->Number->format($seance->id) ?></td>
            <td><?= h($seance->date_deb) ?></td>
            <td><?= h($seance->date_fin) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $seance->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $seance->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $seance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seance->id)]) ?>
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
