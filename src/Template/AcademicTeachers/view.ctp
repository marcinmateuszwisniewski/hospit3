<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Academic Teacher'), ['action' => 'edit', $academicTeacher->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Academic Teacher'), ['action' => 'delete', $academicTeacher->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $academicTeacher->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Academic Teachers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Teacher'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="academicTeachers view large-9 medium-8 columns content">
    <h3><?= h($academicTeacher->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($academicTeacher->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($academicTeacher->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($academicTeacher->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= h($academicTeacher->degree) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($academicTeacher->department) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($academicTeacher->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('National Identification Number') ?></th>
            <td><?= $this->Number->format($academicTeacher->national_identification_number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evaluations') ?></h4>
        <?php if (!empty($academicTeacher->evaluations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Academic Teacher ID') ?></th>
                <th scope="col"><?= __('Framework ID') ?></th>
                <th scope="col"><?= __('Protocol ID') ?></th>
                <th scope="col"><?= __('Final Note') ?></th>
                <th scope="col"><?= __('Room') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($academicTeacher->evaluations as $evaluations): ?>
            <tr>
                <td><?= h($evaluations->ID) ?></td>
                <td><?= h($evaluations->academic_teacher_ID) ?></td>
                <td><?= h($evaluations->framework_ID) ?></td>
                <td><?= h($evaluations->protocol_ID) ?></td>
                <td><?= h($evaluations->final_note) ?></td>
                <td><?= h($evaluations->room) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evaluations', 'action' => 'view', $evaluations->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evaluations', 'action' => 'edit', $evaluations->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evaluations', 'action' => 'delete', $evaluations->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluations->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
