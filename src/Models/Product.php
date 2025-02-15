<?php
namespace Selistore\Selistore\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
* Class Product
*
* Represents a product in the application.
*
* @property int $id
* @property int $printful_id
* @property int $main_category_id
* @property string $type
* @property string $name
* @property string $brand
* @property string $model
* @property string $image
* @property int $variant_count
* @property bool $is_discontinued
* @property string $description
* @property \Illuminate\Support\Carbon|null $deleted_at
*/
class Product extends Model
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
    'main_category_id',
    'type',
    'name',
    'brand',
    'model',
    'image',
    'variant_count',
    'is_discontinued',
    'description'
  ];

  /**
  * Get the colors associated with the product.
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function colors() {
    return $this->hasMany(Color::class);
  }

  /**
  * Get the techniques associated with the product.
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function techniques() {
    return $this->hasMany(Technique::class);
  }

  /**
  * Get the placements associated with the product.
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function placements() {
    return $this->hasMany(Placement::class);
  }

  /**
  * Get the product options associated with the product.
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
  public function productOptions() {
    return $this->hasMany(ProductOption::class);
  }
  
  /**
     * Get the variants for the product.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variants()
    {
        return $this->hasMany(Variant::class);
    }
}