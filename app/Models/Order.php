<?php

namespace App\Models;

use \DateTimeInterface;
use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use App\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;
    use Tenantable;
    use Auditable;

    public $table = 'orders';

    public static $search = [
        'somedetails',
    ];

    public $orderable = [
        'id',
        'somedetails',
    ];

    public $filterable = [
        'id',
        'somedetails',
        'product.name',
    ];

    protected $fillable = [
        'somedetails',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
