<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $term->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $term->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Terms'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="terms form large-9 medium-8 columns content">
    <?= $this->Form->create($term) ?>
    <fieldset>
        <legend><?= __('Edit Term') ?></legend>
        <?php
            echo $this->Form->input('term_year');
            echo $this->Form->input('term_type');
            echo $this->Form->input('term_start');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
