<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\Datasource\EntityInterface;
use Cake\Datasource\ResultSetInterface;
use Cake\ORM\Behavior\TimestampBehavior;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use CakeCart\Model\Entity\Product;
use Psr\Http\Message\UploadedFileInterface;
use ArrayObject;
use Cake\Event\Event;
use Search\Manager;
/**
 * Products Model
 *
 * @property \CakeCart\Model\Table\StatusesTable&\Cake\ORM\Association\BelongsTo $Statuses
 * @property \CakeCart\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \CakeCart\Model\Table\VariantsTable&\Cake\ORM\Association\HasMany $Variants
 *
 * @method Product newEmptyEntity()
 * @method Product newEntity(array $data, array $options = [])
 * @method Product[] newEntities(array $data, array $options = [])
 * @method Product get($primaryKey, $options = [])
 * @method Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method Product patchEntity(EntityInterface $entity, array $data, array $options = [])
 * @method Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method Product|false save(EntityInterface $entity, $options = [])
 * @method Product saveOrFail(EntityInterface $entity, $options = [])
 * @method Product[]|ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method Product[]|ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method Product[]|ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method Product[]|ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Statuses', [
            'foreignKey' => 'statuse_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Statuses',
            'conditions' => ['Statuses.statuse_id'=>1],
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Users',
        ]);
        $this->hasMany('Variants', [
            'foreignKey' => 'product_id',
            'className' => 'CakeCart.Variants',
            'conditions' => ['statuse_id'=>2],
        ]);
        $this->addBehavior('Search.Search');
         $this->searchManager()
            ->value('id')
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'mode' => 'or',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'fields' => ['name','description']
            ]);
    }

    /**
     * Default validation rules.
     *
     * @param Validator $validator Validator instance.
     * @return Validator
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
            ->scalar('image')
            ->maxLength('image', 255)
            ->allowEmptyString('image',null);

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->integer('sequence')
            ->notEmptyString('sequence');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param RulesChecker $rules The rules object to be modified.
     * @return RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['statuse_id'], 'Statuses'), ['errorField' => 'statuse_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
    
}
