<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Links'), ['controller' => 'ProjectLinks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Link'), ['controller' => 'ProjectLinks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="links index large-9 medium-8 columns content">
    <h3><?= __('Links') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('url') ?></th>
                <th><?= $this->Paginator->sort('text') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($links as $link): ?>
            <tr>
                <td><?= $this->Number->format($link->id) ?></td>
                <td><?= h($link->url) ?></td>
                <td><?= h($link->text) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $link->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $link->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]) ?>
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
