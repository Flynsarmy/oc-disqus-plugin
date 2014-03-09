<?php namespace Flynsarmy\Disqus\Models;

use October\Rain\Database\Model;

/**
 * Settings Model
 */
class Settings extends Model
{
	public $implement = ['System.Behaviors.SettingsModel'];

	public $settingsCode = 'flynsarmy_disqus_settings';

	public $settingsFields = 'fields.yaml';

	/**
	 * Validation rules
	 */
	public $rules = [
		'shortname' => 'required',
	];
}