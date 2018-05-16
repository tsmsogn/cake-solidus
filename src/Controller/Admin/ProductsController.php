<?php
namespace Solidus\Controller\Admin;

use Cake\Core\Configure;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Datasource\ResultSetInterface;
use Cake\Http\Response;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Query;
use Solidus\Model\Entity\Product;
use Solidus\Model\Table\ProductsTable;

/**
 * Products Controller
 *
 * @property ProductsTable $Products
 *
 * @method Product[]|ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return Response|void
     */
    public function index()
    {
        // TODO Assets
        $query = $this->Products->find('kept')
            ->limit(10)
            ->order('name')
            ->contain('Master')
            ->contain('Master.Prices', function (Query $q) {
                // TODO
                return $q
                    ->where([
                        'Prices.currency' => Configure::read('Solidus.currency')
                    ]);
            });
        $products = $this->paginate($query);

        $this->set(compact('products'));
    }

    /**
     * Add method
     *
     * @return Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setTemplate('form');

        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__d('solidus', 'The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__d('solidus', 'The product could not be saved. Please, try again.'));
        }
        $taxCategories = $this->Products->TaxCategories->find('list', ['limit' => 200]);
        $shippingCategories = $this->Products->ShippingCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'taxCategories', 'shippingCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Spree Product id.
     * @return Response|null Redirects on successful edit, renders view otherwise.
     * @throws NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setTemplate('form');

        $product = $this->Products->get($id, [
            'contain' => ['Master', 'Prices' => function (Query $q) {
                return $q
                    ->where([
                        'Prices.currency' => Configure::read('Solidus.currency')
                    ]);
            }]
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__d('solidus', 'The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__d('solidus', 'The product could not be saved. Please, try again.'));
        }
        $taxCategories = $this->Products->TaxCategories->find('list', ['limit' => 200]);
        $shippingCategories = $this->Products->ShippingCategories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'taxCategories', 'shippingCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Spree Product id.
     * @return Response|null Redirects to index.
     * @throws RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->discard($product)) {
            $this->Flash->success(__d('solidus', 'The product has been deleted.'));
        } else {
            $this->Flash->error(__d('solidus', 'The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
