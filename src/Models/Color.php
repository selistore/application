<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Color
 * 
 * Represents a color in the application.
 *
 * @property int $id
 * @property foreignId|int product_id
 * @property string $name
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Color extends Model
{
    use HasFactory, SoftDeletes;
    
    /**
     * The attributes that are mass guarded.
     *
     * @var array
     */
    protected $guarded = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}