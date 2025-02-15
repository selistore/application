<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * 
 * Represents an order in the application.
 *
 * @property int $id
 * @property string $order_number
 * @property int $customer_id
 * @property float $total
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 */
class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
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