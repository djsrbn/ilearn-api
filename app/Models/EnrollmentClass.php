<?php

namespace App\Models;

use App\Transformers\BaseTransformer;

class EnrollmentClass extends BaseModel
{
    protected $table = 'ilearndb.enrollclasses';

    /**
     * @var string UUID key
     */
    public $primaryKey = 'id';

    /**
     * @var array Relations to load implicitly by Restful controllers
     */
    public static $localWith = [];

    /**
     * @var null|BaseTransformer The transformer to use for this model, if overriding the default
     */
    public static $transformer = null;

    /**
     * @var array The attributes that are mass assignable.
     */
    protected $fillable = [];

    /**
     * @var array The attributes that should be hidden for arrays and API output
     */
    protected $hidden = [];

    /**
     * Return the validation rules for this model
     *
     * @return array Rules
     */
    public function getValidationRules()
    {
        return [];
    }

}
