<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Link'), ['action' => 'edit', $link->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Project Links'), ['controller' => 'ProjectLinks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project Link'), ['controller' => 'ProjectLinks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="links view large-9 medium-8 columns content">
    <h3><?= h($link->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Url') ?></th>
            <td><?= h($link->url) ?></td>
        </tr>
        <tr>
            <th><?= __('Text') ?></th>
            <td><?= h($link->text) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($link->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Project Links') ?></h4>
        <?php if (!empty($link->project_links)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Project Id') ?></th>
                <th><?= __('Link Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($link->project_links as $projectLinks): ?>
            <tr>
                <td><?= h($projectLinks->id) ?></td>
                <td><?= h($projectLinks->project_id) ?></td>
                <td><?= h($projectLinks->link_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProjectLinks', 'action' => 'view', $projectLinks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProjectLinks', 'action' => 'edit', $projectLinks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProjectLinks', 'action' => 'delete', $projectLinks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projectLinks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
