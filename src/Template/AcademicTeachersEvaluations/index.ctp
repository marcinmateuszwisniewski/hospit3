<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Academic Teachers Evaluation'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="academicTeachersEvaluations index large-9 medium-8 columns content">
    <h3><?= __('Academic Teachers Evaluations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('evaluation_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('academic_teacher_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($academicTeachersEvaluations as $academicTeachersEvaluation): ?>
            <tr>
                <td><?= $this->Number->format($academicTeachersEvaluation->evaluation_ID) ?></td>
                <td><?= $this->Number->format($academicTeachersEvaluation->academic_teacher_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $academicTeachersEvaluation->evaluation_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academicTeachersEvaluation->evaluation_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academicTeachersEvaluation->evaluation_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $academicTeachersEvaluation->evaluation_ID)]) ?>
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
