<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluation'), ['action' => 'edit', $evaluation->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluation'), ['action' => 'delete', $evaluation->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluation->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Academic Teachers'), ['controller' => 'AcademicTeachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Teacher'), ['controller' => 'AcademicTeachers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluations view large-9 medium-8 columns content">
    <h3><?= h($evaluation->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= h($evaluation->room) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($evaluation->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Academic Teacher ID') ?></th>
            <td><?= $this->Number->format($evaluation->academic_teacher_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Framework ID') ?></th>
            <td><?= $this->Number->format($evaluation->framework_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Protocol ID') ?></th>
            <td><?= $this->Number->format($evaluation->protocol_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final Note') ?></th>
            <td><?= $this->Number->format($evaluation->final_note) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Academic Teachers') ?></h4>
        <?php if (!empty($evaluation->academic_teachers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Surname') ?></th>
                <th scope="col"><?= __('National Identification Number') ?></th>
                <th scope="col"><?= __('Occupation') ?></th>
                <th scope="col"><?= __('Degree') ?></th>
                <th scope="col"><?= __('Department') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evaluation->academic_teachers as $academicTeachers): ?>
            <tr>
                <td><?= h($academicTeachers->ID) ?></td>
                <td><?= h($academicTeachers->name) ?></td>
                <td><?= h($academicTeachers->surname) ?></td>
                <td><?= h($academicTeachers->national_identification_number) ?></td>
                <td><?= h($academicTeachers->occupation) ?></td>
                <td><?= h($academicTeachers->degree) ?></td>
                <td><?= h($academicTeachers->department) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AcademicTeachers', 'action' => 'view', $academicTeachers->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AcademicTeachers', 'action' => 'edit', $academicTeachers->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AcademicTeachers', 'action' => 'delete', $academicTeachers->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $academicTeachers->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
