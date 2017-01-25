<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Protocol'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="protocols index large-9 medium-8 columns content">
    <h3><?= __('Protocols') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discussed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discussion_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commital_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hour') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($protocols as $protocol): ?>
            <tr>
                <td><?= $this->Number->format($protocol->ID) ?></td>
                <td><?= h($protocol->discussed) ?></td>
                <td><?= h($protocol->discussion_day) ?></td>
                <td><?= h($protocol->commital_day) ?></td>
                <td><?= h($protocol->evaluation_day) ?></td>
                <td><?= $this->Number->format($protocol->hour) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $protocol->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $protocol->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $protocol->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $protocol->ID)]) ?>
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
