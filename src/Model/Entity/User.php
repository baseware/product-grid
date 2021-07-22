<?php
declare(strict_types=1);

namespace CakeCart\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * User Entity
 *
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $encrypt
 * @property int $role_id
 * @property string|null $name
 * @property string|null $mobile
 * @property string|null $verify
 * @property int|null $statuse_id
 * @property string|null $activation
 * @property int|null $user_id
 * @property int|null $event_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \CakeCart\Model\Entity\Role[] $roles
 * @property \CakeCart\Model\Entity\SocialAccount[] $social_accounts
 * @property \CakeCart\Model\Entity\UsersOld[] $users_old
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'encrypt' => true,
        'role_id' => true,
        'name' => true,
        'mobile' => true,
        'verify' => true,
        'statuse_id' => true,
        'activation' => true,
        'user_id' => true,
        'event_id' => true,
        'created' => true,
        'modified' => true,
        'roles' => true,
        'social_accounts' => true,
        'users_old' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
	
    protected function _setEncrypt(string $encrypt)
    {
        return base64_encode($encrypt);
    }
    
    protected function _setActivationcode(string $activationcode)
    {
        return base64_encode($activationcode);
    }
}
