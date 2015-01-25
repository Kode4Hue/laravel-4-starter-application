<?php namespace Model\System\Gender;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Eloquence\Database\Traits\CamelCaseModel as CamelCaseModel;

class User extends UuidModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait,
            CamelCaseModel;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
