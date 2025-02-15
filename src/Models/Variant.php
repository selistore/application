<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variant extends Model
{
  use HasFactory,
  SoftDeletes;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'printful_id',
    'catalog_product_id',
    'name',
    'size',
    'color',
    'color_code',
    'color_code2',
    'image',
    'product_id'
  ];

  /**
  * Get the product that owns the variant.
  */
  public function product() {
    return $this->belongsTo(Product::class);
  }
}