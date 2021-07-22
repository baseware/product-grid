<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statuses Model
 *
 * @property \CakeCart\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 *
 * @method \CakeCart\Model\Entity\Status newEmptyEntity()
 * @method \CakeCart\Model\Entity\Status newEntity(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Status[] newEntities(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Status get($primaryKey, $options = [])
 * @method \CakeCart\Model\Entity\Status findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeCart\Model\Entity\Status patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Status[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Status|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Status saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StatusesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('statuses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Status', [
            'foreignKey' => 'statuse_id',
            'className' => 'CakeCart.Statuses',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        // $rules->add($rules->existsIn(['statuse_id'], 'Statuses'), ['errorField' => 'statuse_id']);

        return $rules;
    }
}
