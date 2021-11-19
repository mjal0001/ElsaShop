<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Record $record
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->record_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->record_id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->record_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Records'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Record'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="records view content">
            <h3><?= h($record->record_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Record Name') ?></th>
                    <td><?= h($record->record_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Artist') ?></th>
                    <td><?= h($record->artist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($record->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= h($record->genre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number Of Disks') ?></th>
                    <td><?= h($record->number_of_disks) ?></td>
                </tr>
                <tr>
                    <th><?= __('Record Id') ?></th>
                    <td><?= $this->Number->format($record->record_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
