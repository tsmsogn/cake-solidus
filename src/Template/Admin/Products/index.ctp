<?php
/**
 * @var AppView $this
 * @var EntityInterface[]|CollectionInterface $products
 */
use App\View\AppView;
use Cake\Collection\CollectionInterface;
use Cake\Datasource\EntityInterface;

//$this->extend('Cirici/AdminLTE./Common/index');

$this->assign('subtitle', __d('solidus', 'Index'));

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__d('solidus', 'Products'), ['action' => 'index'])
    ->add(__d('solidus', 'Index'), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="box-tools pull-right">
                    <?= $this->Html->link(__d('solidus', 'New Product'), ['action' => 'add'], ['class' => 'btn btn-info btn-xs']) ?>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th><?= __d('solidus', 'SKU') ?></th>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= __d('solidus', 'Master Price') ?></th>
                        <th><?= __d('solidus', 'Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= h($product->master->sku); ?></td>
                            <td><?= h($product->name) ?></td>
                            <td><?= $this->Number->currency($product->master->prices[0]->amount, $product->master->prices[0]->currency); ?></td>
                            <td class="actions" style="white-space:nowrap">
                                <?= $this->Html->link(__d('solidus', 'Edit'), ['action' => 'edit', $product->id], ['class' => 'btn btn-default btn-xs']) ?>
                                <?= $this->Form->postLink(__d('solidus', 'Delete'), ['action' => 'delete', $product->id], ['confirm' => __d('solidus', 'Are you sure?', $product->id), 'class' => 'btn btn-danger btn-xs']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="box-footer clearfix">
                <?= $this->Paginator->numbers() ?>
            </div>
        </div>
    </div>
</div>
