<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\MtbAreasTable|\Cake\ORM\Association\BelongsTo $MtbAreas
 * @property \App\Model\Table\MtbUserStatusesTable|\Cake\ORM\Association\BelongsTo $MtbUserStatuses
 * @property \App\Model\Table\PointsTable|\Cake\ORM\Association\HasMany $Points
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MtbAreas', [
            'foreignKey' => 'mtb_area_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('MtbUserStatuses', [
            'foreignKey' => 'mtb_user_status_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Points', [
            'foreignKey' => 'user_id'
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
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false)
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->allowEmptyString('password', false);

        $validator
            ->scalar('lastname')
            ->requirePresence('lastname', 'create')
            ->allowEmptyString('lastname', false);

        $validator
            ->scalar('firstname')
            ->requirePresence('firstname', 'create')
            ->allowEmptyString('firstname', false);

        $validator
            ->scalar('lastname_reading')
            ->requirePresence('lastname_reading', 'create')
            ->allowEmptyString('lastname_reading', false);

        $validator
            ->scalar('firstname_reading')
            ->requirePresence('firstname_reading', 'create')
            ->allowEmptyString('firstname_reading', false);

        $validator
            ->integer('gender_flg')
            ->requirePresence('gender_flg', 'create')
            ->allowEmptyString('gender_flg', false);

        $validator
            ->scalar('member_code')
            ->maxLength('member_code', 6)
            ->requirePresence('member_code', 'create')
            ->allowEmptyString('member_code', false)
            ->add('member_code', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('postcode')
            ->maxLength('postcode', 7)
            ->requirePresence('postcode', 'create')
            ->allowEmptyString('postcode', false);

        $validator
            ->scalar('address1')
            ->requirePresence('address1', 'create')
            ->allowEmptyString('address1', false);

        $validator
            ->scalar('address2')
            ->requirePresence('address2', 'create')
            ->allowEmptyString('address2', false);

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->allowEmptyDate('birthday', false);

        $validator
            ->scalar('telephone_number')
            ->requirePresence('telephone_number', 'create')
            ->allowEmptyString('telephone_number', false);

        $validator
            ->scalar('id_card_surface_pic')
            ->requirePresence('id_card_surface_pic', 'create')
            ->allowEmptyString('id_card_surface_pic', false);

        $validator
            ->scalar('id_card_back_pic')
            ->requirePresence('id_card_back_pic', 'create')
            ->allowEmptyString('id_card_back_pic', false);

        $validator
            ->scalar('token')
            ->maxLength('token', 20)
            ->requirePresence('token', 'create')
            ->allowEmptyString('token', false);

        $validator
            ->dateTime('email_approval_at')
            ->requirePresence('email_approval_at', 'create')
            ->allowEmptyDateTime('email_approval_at', false);

        $validator
            ->dateTime('information_approval_at')
            ->requirePresence('information_approval_at', 'create')
            ->allowEmptyDateTime('information_approval_at', false);

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['member_code']));
        $rules->add($rules->existsIn(['mtb_area_id'], 'MtbAreas'));
        $rules->add($rules->existsIn(['mtb_user_status_id'], 'MtbUserStatuses'));

        return $rules;
    }
}
