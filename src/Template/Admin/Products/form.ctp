<?php
/**
 * @var AppView $this
 * @var EntityInterface $product
 */
use App\View\AppView;
use Cake\Datasource\EntityInterface;
use Cake\Utility\Inflector;
use Cake\Utility\Text;

$this->Html->script('/Cirici/AdminLTE/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js', ['block' => true, 'inline' => false]);
$this->Html->css('/Cirici/AdminLTE/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css', ['block' => true]);

$script = <<<SCRIPT
(function($) {
  $(function() {
    $('#available_on').datepicker();
  })
})(jQuery);
SCRIPT;
$this->Html->scriptBlock($script, ['block' => true, 'inline' => false]);

$action = __d('solidus', 'Add');
if ($this->request->getParam('action') == 'edit') {
    $action = __d('solidus', 'Edit');
}

$this->extend('Cirici/AdminLTE./Common/form');

$this->assign('subtitle', $action);

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__d('solidus', __d('solidus', 'Products')), ['action' => 'index'])
    ->add(__d('solidus', $action), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();

$this->assign('form-start', $this->Form->create($product, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('name') .
    $this->Form->control('slug', ['default' => Text::uuid()]) .
    $this->Form->control('description') .
    $this->Form->control('available_on', ['type' => 'text', 'id' => 'available_on']) .
    $this->Form->control('tax_category_id') .
    $this->Form->control('shipping_category_id') .
    $this->Form->control('promotionable') .
    $this->Form->control('meta_title') .
    $this->Form->control('Variants.Prices.amount') .
    $this->Form->control('meta_keywords') .
    $this->Form->control('meta_description');
$this->end();

$this->assign('form-button', $this->Form->button(__d('solidus', 'Submit')));

$this->assign('form-end', $this->Form->end());
