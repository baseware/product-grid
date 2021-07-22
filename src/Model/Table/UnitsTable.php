<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Units Model
 *
 * @method \CakeCart\Model\Entity\Unit newEmptyEntity()
 * @method \CakeCart\Model\Entity\Unit newEntity(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Unit[] newEntities(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Unit get($primaryKey, $options = [])
 * @method \CakeCart\Model\Entity\Unit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeCart\Model\Entity\Unit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Unit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Unit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Unit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Unit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Unit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Unit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Unit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UnitsTable extends Table
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

        $this->setTable('units');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('short')
            ->maxLength('short', 20)
            ->requirePresence('short', 'create')
            ->notEmptyString('short');

        return $validator;
    }
}
