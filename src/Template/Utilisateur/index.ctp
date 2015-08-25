<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Utilisateur'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="utilisateur index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nom') ?></th>
            <th><?= $this->Paginator->sort('penom') ?></th>
            <th><?= $this->Paginator->sort('newsletter') ?></th>
            <th><?= $this->Paginator->sort('code_postal') ?></th>
            <th><?= $this->Paginator->sort('telephone') ?></th>
            <th><?= $this->Paginator->sort('telephone mobile') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($utilisateur as $utilisateur): ?>
        <tr>
            <td><?= $this->Number->format($utilisateur->id) ?></td>
            <td><?= h($utilisateur->nom) ?></td>
            <td><?= h($utilisateur->penom) ?></td>
            <td><?= h($utilisateur->newsletter) ?></td>
            <td><?= $this->Number->format($utilisateur->code_postal) ?></td>
            <td><?= $this->Number->format($utilisateur->telephone) ?></td>
            <td><?= $this->Number->format($utilisateur->telephone mobile) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $utilisateur->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilisateur->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilisateur->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilisateur->id)]) ?>
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
