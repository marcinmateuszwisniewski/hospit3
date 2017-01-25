<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Framework'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="frameworks index large-9 medium-8 columns content">
    <h3><?= __('Frameworks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('term_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('submission_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accepted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acceptation_day') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($frameworks as $framework): ?>
            <tr>
                <td><?= $this->Number->format($framework->ID) ?></td>
                <td><?= $this->Number->format($framework->term_ID) ?></td>
                <td><?= h($framework->submission_day) ?></td>
                <td><?= h($framework->accepted) ?></td>
                <td><?= h($framework->acceptation_day) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $framework->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $framework->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $framework->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $framework->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
