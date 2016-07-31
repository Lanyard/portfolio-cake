<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Project Link'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Links'), ['controller' => 'Links', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Link'), ['controller' => 'Links', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projectLinks index large-9 medium-8 columns content">
    <h3><?= __('Project Links') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('project_id') ?></th>
                <th><?= $this->Paginator->sort('link_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projectLinks as $projectLink): ?>
            <tr>
                <td><?= $this->Number->format($projectLink->id) ?></td>
                <td><?= $projectLink->has('project') ? $this->Html->link($projectLink->project->title, ['controller' => 'Projects', 'action' => 'view', $projectLink->project->id]) : '' ?></td>
                <td><?= $projectLink->has('link') ? $this->Html->link($projectLink->link->id, ['controller' => 'Links', 'action' => 'view', $projectLink->link->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projectLink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projectLink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projectLink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectLink->id)]) ?>
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
