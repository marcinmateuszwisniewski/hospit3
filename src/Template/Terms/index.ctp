<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Term'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="terms index large-9 medium-8 columns content">
    <h3><?= __('Terms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('term_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('term_start') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($terms as $term): ?>
            <tr>
                <td><?= $this->Number->format($term->ID) ?></td>
                <td><?= h($term->term_type) ?></td>
                <td><?= h($term->term_start) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $term->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $term->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $term->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $term->ID)]) ?>
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
