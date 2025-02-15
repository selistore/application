<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Layer
 * 
 * Represents a layer in the application.
 *
 * @property int $id
 * @property foreignId|int $placement_id
 * @property string $type
 * @property json $layer_options
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Layer extends Model
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