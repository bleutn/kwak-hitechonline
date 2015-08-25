<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Categorie'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="categorie index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('intitule') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($categorie as $categorie): ?>
        <tr>
            <td><?= $this->Number->format($categorie->id) ?></td>
            <td><?= h($categorie->intitule) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $categorie->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorie->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorie->id)]) ?>
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
