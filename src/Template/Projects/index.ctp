<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Project Links'), ['controller' => 'ProjectLinks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project Link'), ['controller' => 'ProjectLinks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projects index large-9 medium-8 columns content">
    <h3><?= __('Projects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('priority') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('subtitle') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
            <tr>
                <td><?= $this->Number->format($project->id) ?></td>
                <td><?= $this->Number->format($project->priority) ?></td>
                <td><?= h($project->title) ?></td>
                <td><?= h($project->subtitle) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
