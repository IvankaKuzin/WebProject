<?php namespace Kuzin73\Testdata\Models;

use Model;

/**
 * Model
 */
class Comments extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'kuzin73_testdata_comments';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
    	'image' => 'System\Models\File'
      ];
}
