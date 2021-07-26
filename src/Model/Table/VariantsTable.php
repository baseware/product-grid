<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Variants Model
 *
 * @property \CakeCart\Model\Table\UnitsTable&\Cake\ORM\Association\BelongsTo $Units
 * @property \CakeCart\Model\Table\ProductsTable&\Cake\ORM\Association\BelongsTo $Products
 * @property \CakeCart\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 * @property \CakeCart\Model\Table\VariantimagesTable&\Cake\ORM\Association\HasMany $Variantimages
 *
 * @method \CakeCart\Model\Entity\Variant newEmptyEntity()
 * @method \CakeCart\Model\Entity\Variant newEntity(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Variant[] newEntities(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Variant get($primaryKey, $options = [])
 * @method \CakeCart\Model\Entity\Variant findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeCart\Model\Entity\Variant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Variant[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\Variant|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Variant saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\Variant[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Variant[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Variant[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\Variant[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VariantsTable extends Table
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

        $this->setTable('variants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Units', [
            'foreignKey' => 'unit_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Units',
        ]);
        $this->belongsTo('Products', [
            'foreignKey' => 'product_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Products',
            'conditions' => ['Products.statuse_id'=>2],
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'statuse_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Statuses',
            'conditions' => ['Statuses.statuse_id'=>1],
        ]);
        $this->hasMany('Variantimages', [
            'foreignKey' => 'variant_id',
            'className' => 'CakeCart.Variantimages',
            'conditions' => ['Variantimages.statuse_id'=>2],
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
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

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
        $rules->add($rules->existsIn(['unit_id'], 'Units'), ['errorField' => 'unit_id']);
        $rules->add($rules->existsIn(['product_id'], 'Products'), ['errorField' => 'product_id']);
        $rules->add($rules->existsIn(['statuse_id'], 'Statuses'), ['errorField' => 'statuse_id']);

        return $rules;
    }
}
