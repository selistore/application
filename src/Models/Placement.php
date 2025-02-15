<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Placement
 * 
 * Represents a placement in the application.
 *
 * @property int $id
 * @property foreignId|int $product_id
 * @property string $placement
 * @property string $technique
 * @property int $print_area_width
 * @property int $print_area_height
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Placement extends Model
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