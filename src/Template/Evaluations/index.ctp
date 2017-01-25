<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Academic Teachers'), ['controller' => 'AcademicTeachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Teacher'), ['controller' => 'AcademicTeachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluations index large-9 medium-8 columns content">
    <h3><?= __('Evaluations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('academic_teacher_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('framework_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('protocol_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final_note') ?></th>
                <th scope="col"><?= $this->Paginator->sort('room') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluations as $evaluation): ?>
            <tr>
                <td><?= $this->Number->format($evaluation->ID) ?></td>
                <td><?= $this->Number->format($evaluation->academic_teacher_ID) ?></td>
                <td><?= $this->Number->format($evaluation->framework_ID) ?></td>
                <td><?= $this->Number->format($evaluation->protocol_ID) ?></td>
                <td><?= $this->Number->format($evaluation->final_note) ?></td>
                <td><?= h($evaluation->room) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evaluation->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluation->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->ID)]) ?>
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
