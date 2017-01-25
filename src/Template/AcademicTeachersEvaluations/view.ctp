<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Academic Teachers Evaluation'), ['action' => 'edit', $academicTeachersEvaluation->evaluation_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Academic Teachers Evaluation'), ['action' => 'delete', $academicTeachersEvaluation->evaluation_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $academicTeachersEvaluation->evaluation_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Academic Teachers Evaluations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Academic Teachers Evaluation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="academicTeachersEvaluations view large-9 medium-8 columns content">
    <h3><?= h($academicTeachersEvaluation->evaluation_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evaluation ID') ?></th>
            <td><?= $this->Number->format($academicTeachersEvaluation->evaluation_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Academic Teacher ID') ?></th>
            <td><?= $this->Number->format($academicTeachersEvaluation->academic_teacher_ID) ?></td>
        </tr>
    </table>
</div>
