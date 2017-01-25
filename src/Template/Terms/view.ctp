<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Term'), ['action' => 'edit', $term->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Term'), ['action' => 'delete', $term->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $term->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Terms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Term'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="terms view large-9 medium-8 columns content">
    <h3><?= h($term->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Term Type') ?></th>
            <td><?= h($term->term_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($term->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Term Start') ?></th>
            <td><?= h($term->term_start) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Term Year') ?></h4>
        <?= $this->Text->autoParagraph(h($term->term_year)); ?>
    </div>
</div>
