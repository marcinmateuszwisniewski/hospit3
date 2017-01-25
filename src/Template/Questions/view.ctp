<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $question->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question Content') ?></th>
            <td><?= h($question->question_content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Open Answer') ?></th>
            <td><?= h($question->open_answer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discriminator') ?></th>
            <td><?= h($question->discriminator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($question->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Protocol ID') ?></th>
            <td><?= $this->Number->format($question->protocol_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Single Choice Answer') ?></th>
            <td><?= $this->Number->format($question->single_choice_answer) ?></td>
        </tr>
    </table>
</div>
