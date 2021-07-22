<?php
declare(strict_types=1);

namespace CakeCart\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Utility\Security;
use Firebase\JWT\JWT;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * Users Model
 *
 * @property \CakeCart\Model\Table\RolesTable&\Cake\ORM\Association\BelongsTo $Roles
 * @property \CakeCart\Model\Table\RolesTable&\Cake\ORM\Association\BelongsToMany $Roles
 *
 * @method \CakeCart\Model\Entity\User newEmptyEntity()
 * @method \CakeCart\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \CakeCart\Model\Entity\User get($primaryKey, $options = [])
 * @method \CakeCart\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \CakeCart\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \CakeCart\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \CakeCart\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \CakeCart\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
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
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER',
            'className' => 'CakeCart.Roles',
        ]);
        $this->belongsTo('Statuses', [
            'foreignKey' => 'statuse_id',
            'className' => 'CakeCart.Statuses',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Users',
        ]);
        $this->belongsTo('Events', [
            'foreignKey' => 'event_id',
            'className' => 'CakeCart.Events',
        ]);
        $this->hasMany('Accommodations', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Accommodations',
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Addresses',
        ]);
        $this->hasMany('Badges', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Badges',
        ]);
        $this->hasMany('Categories', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Categories',
        ]);
        $this->hasMany('Chats', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Chats',
        ]);
        $this->hasMany('Comments', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Comments',
        ]);
        $this->hasMany('Companies', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Companies',
        ]);
        $this->hasMany('CompaniesEvents', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.CompaniesEvents',
        ]);
        $this->hasMany('Competitions', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Competitions',
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Contacts',
        ]);
        $this->hasMany('Designations', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Designations',
        ]);
        $this->hasMany('Entries', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Entries',
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Events',
        ]);
        $this->hasMany('Feedbacks', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Feedbacks',
        ]);
        $this->hasMany('Files', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Files',
        ]);
        $this->hasMany('Halls', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Halls',
        ]);
        $this->hasMany('Images', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Images',
        ]);
        $this->hasMany('Members', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Members',
        ]);
        $this->hasMany('Menus', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Menus',
        ]);
        $this->hasMany('Messages', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Messages',
        ]);
        $this->hasMany('Mobiles', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Mobiles',
        ]);
        $this->hasMany('Notifications', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Notifications',
        ]);
        $this->hasMany('Organizations', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Organizations',
        ]);
        $this->hasMany('Profiles', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Profiles',
        ]);
        $this->hasMany('Questions', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Questions',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'user_id',
            'className' => 'CakeCart.Users',
        ]);
        $this->belongsToMany('Chats', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'chat_id',
            'joinTable' => 'chats_users',
            'className' => 'CakeCart.Chats',
        ]);
        $this->belongsToMany('Questions', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'question_id',
            'joinTable' => 'questions_users',
            'className' => 'CakeCart.Questions',
        ]);
        $this->belongsToMany('Sessions', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'session_id',
            'joinTable' => 'sessions_users',
            'className' => 'CakeCart.Sessions',
        ]);
        $this->belongsToMany('Topics', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'topic_id',
            'joinTable' => 'topics_users',
            'className' => 'CakeCart.Topics',
        ]);
        $this->belongsToMany('Devices', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'device_id',
            'joinTable' => 'users_devices',
            'className' => 'CakeCart.Devices',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'users_events',
            'className' => 'CakeCart.Events',
        ]);
        $this->belongsToMany('Programmes', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'programme_id',
            'joinTable' => 'users_programmes',
            'className' => 'CakeCart.Programmes',
        ]);
        $this->belongsToMany('Roles', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'role_id',
            'joinTable' => 'users_roles',
            'className' => 'CakeCart.Roles',
        ]);
        $this->belongsToMany('Socials', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'social_id',
            'joinTable' => 'users_socials',
            'className' => 'CakeCart.Socials',
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
            ->scalar('email')
            ->maxLength('email', 255)
            ->requirePresence('email', 'create')
            ->notEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('encrypt')
            ->maxLength('encrypt', 255)
            ->requirePresence('encrypt', 'create')
            ->notEmptyString('encrypt');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('mobile')
            ->maxLength('mobile', 20)
            ->allowEmptyString('mobile');

        $validator
            ->scalar('verify')
            ->allowEmptyString('verify');

        $validator
            ->scalar('activation')
            ->maxLength('activation', 255)
            ->allowEmptyString('activation');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->existsIn(['role_id'], 'Roles'), ['errorField' => 'role_id']);
        $rules->add($rules->existsIn(['statuse_id'], 'Statuses'), ['errorField' => 'statuse_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn(['event_id'], 'Events'), ['errorField' => 'event_id']);

        return $rules;
    }
    
    public function Authkey($data){//604800
         $user = $this->find('all',['conditions'=>['username'=>$data->username],'fields'=>['id','username','password','name','role_id']])->first();
         if(!empty($user)){
            if((new DefaultPasswordHasher)->check($data->password,$user->password)){
                    if(!empty($user->id)){
                        $token=JWT::encode([
                            'sub' => $user->id,
                            'exp' =>  time() + 86400
                        ],
                        Security::getSalt());
                        return ['success'=>true,'message'=>"Logged In",'data'=>['username'=>$user['username'],'name'=>$user['name'],'role'=>$user['role_id'],'token'=>$token] ];
                     }
            }
         }
         return ['success'=>false,'message'=>'Invalid username or password, try again','data'=>[]];
    }
}
