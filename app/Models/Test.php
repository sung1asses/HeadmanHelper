<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Test",
 *      required={"title"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="post_date",
 *          description="post_date",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="body",
 *          description="body",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="author_gender",
 *          description="author_gender",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="post_type",
 *          description="post_type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="post_visits",
 *          description="post_visits",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="category",
 *          description="category",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="category_short",
 *          description="category_short",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="is_private",
 *          description="is_private",
 *          type="boolean"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Test extends Model
{
    use SoftDeletes;

    public $table = 'tests';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'post_date',
        'body',
        'email',
        'author_gender',
        'post_type',
        'post_visits',
        'category',
        'category_short',
        'is_private'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'post_date' => 'datetime',
        'body' => 'string',
        'email' => 'string',
        'author_gender' => 'integer',
        'post_type' => 'string',
        'post_visits' => 'integer',
        'category' => 'string',
        'category_short' => 'string',
        'is_private' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function customRelationName()
    {
        return $this->hasMany(\App\Models\User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'user_roles', 'user_id', 'role_id');
    }
}
