<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\MtbSaleStatusesTable|\Cake\ORM\Association\BelongsTo $MtbSaleStatuses
 * @property \App\Model\Table\MessagesTable|\Cake\ORM\Association\HasMany $Messages
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'from_user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'to_users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MtbSaleStatuses', [
            'foreignKey' => 'mtb_sale_status_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'product_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('product_code')
            ->maxLength('product_code', 16)
            ->requirePresence('product_code', 'create')
            ->allowEmptyString('product_code', false)
            ->add('product_code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('ship_code')
            ->maxLength('ship_code', 16)
            ->allowEmptyString('ship_code')
            ->add('ship_code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('detail')
            ->requirePresence('detail', 'create')
            ->allowEmptyString('detail', false);

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->allowEmptyString('price', false);

        $validator
            ->scalar('image1')
            ->requirePresence('image1', 'create')
            ->allowEmptyFile('image1', false);

        $validator
            ->scalar('image2')
            ->allowEmptyFile('image2');

        $validator
            ->scalar('image3')
            ->allowEmptyFile('image3');

        $validator
            ->scalar('image4')
            ->allowEmptyFile('image4');

        $validator
            ->integer('from_user_assessment')
            ->allowEmptyString('from_user_assessment');

        $validator
            ->scalar('from_user_comment')
            ->allowEmptyString('from_user_comment');

        $validator
            ->integer('to_user_assessment')
            ->allowEmptyString('to_user_assessment');

        $validator
            ->scalar('to_user_comment')
            ->allowEmptyString('to_user_comment');

        $validator
            ->dateTime('published_at')
            ->allowEmptyDateTime('published_at');

        $validator
            ->dateTime('ordered_at')
            ->allowEmptyDateTime('ordered_at');

        $validator
            ->dateTime('shipped_at')
            ->allowEmptyDateTime('shipped_at');

        $validator
            ->dateTime('from_user_assessed_at')
            ->allowEmptyDateTime('from_user_assessed_at');

        $validator
            ->dateTime('to_user_assessed_at')
            ->allowEmptyDateTime('to_user_assessed_at');

        $validator
            ->scalar('return_reason')
            ->allowEmptyString('return_reason');

        $validator
            ->dateTime('return_requested_at')
            ->allowEmptyDateTime('return_requested_at');

        $validator
            ->dateTime('return_finished_at')
            ->allowEmptyDateTime('return_finished_at');

        $validator
            ->dateTime('admin_confirmed_at')
            ->allowEmptyDateTime('admin_confirmed_at');

        $validator
            ->scalar('prohibition_reason')
            ->allowEmptyString('prohibition_reason');

        $validator
            ->dateTime('prohibited_at')
            ->allowEmptyDateTime('prohibited_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['product_code']));
        $rules->add($rules->isUnique(['ship_code']));
        $rules->add($rules->existsIn(['from_user_id'], 'Users'));
        $rules->add($rules->existsIn(['to_users_id'], 'Users'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['mtb_sale_status_id'], 'MtbSaleStatuses'));

        return $rules;
    }
}
