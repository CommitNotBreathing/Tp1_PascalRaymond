<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RefBillStatus Model
 *
 * @property \App\Model\Table\BillsTable&\Cake\ORM\Association\HasMany $Bills
 *
 * @method \App\Model\Entity\RefBillStatus get($primaryKey, $options = [])
 * @method \App\Model\Entity\RefBillStatus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RefBillStatus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RefBillStatus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefBillStatus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RefBillStatus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RefBillStatus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RefBillStatus findOrCreate($search, callable $callback = null, $options = [])
 */
class RefBillStatusTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ref_bill_status');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Bills', [
            'foreignKey' => 'ref_bill_status_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('bill_status_description')
            ->maxLength('bill_status_description', 25)
            ->requirePresence('bill_status_description', 'create')
            ->notEmptyString('bill_status_description');

        return $validator;
    }
}
