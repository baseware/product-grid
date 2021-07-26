<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categories Model
 *
 * @property \CakeCart\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \CakeCart\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 * @property \CakeCart\Model\Table\CategoriesTable&\Cake\ORM\Association\HasMany $Categories
 *
 * @method \CakeCart\Model\Entity\Category newEmptyEntity()
 * @method \CakeCart\Model\Entity\Category newEntity(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Category[] newEntities(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Category get($primaryKey, $options = [])
 * @method \CakeCart\Model\Entity\Category findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeCart\Model\Entity\Category patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Category[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Category|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Category saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Category[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriesTable extends Table
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

        $this->setTable('categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Category', [
            'foreignKey' => 'category_id',
            'className' => 'CakeCart.Categories',
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'statuse_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Statuses',
            'conditions' => ['statuse_id'=>1],
        ]);
        $this->hasMany('Categories', [
            'foreignKey' => 'category_id',
            'className' => 'CakeCart.Categories',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('level')
            ->allowEmptyString('level');

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
        // $rules->add($rules->existsIn(['category_id'], 'Categories'), ['errorField' => 'category_id']);
        $rules->add($rules->existsIn(['statuse_id'], 'Statuses'), ['errorField' => 'statuse_id']);

        return $rules;
    }
}
