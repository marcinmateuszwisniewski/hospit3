<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Questions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('protocol_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('question_content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('open_answer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('single_choice_answer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discriminator') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <td><?= $this->Number->format($question->ID) ?></td>
                <td><?= $this->Number->format($question->protocol_ID) ?></td>
                <td><?= h($question->question_content) ?></td>
                <td><?= h($question->open_answer) ?></td>
                <td><?= $this->Number->format($question->single_choice_answer) ?></td>
                <td><?= h($question->discriminator) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $question->ID)]) ?>
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
