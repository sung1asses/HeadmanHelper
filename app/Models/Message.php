<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Message",
 *      required={"text", "author"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="text",
 *          description="text",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="author",
 *          description="author",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="post_id",
 *          description="post_id",
 *          type="integer",
 *          format="int32"
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
class Message extends Model
{
    use SoftDeletes;

    public $table = 'messages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'text',
        'author',
        'post_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'text' => 'string',
        'author' => 'string',
        'post_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'text' => 'required',
        'author' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function post()
    {
        return $this->belongsTo(\App\Models\Post::class, 'post_id', 'id');
    }
}
