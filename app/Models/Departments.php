<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Departments
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $logo
 * @property string|null $reg_no
 * @property string|null $trade_license_no
 * @property string|null $tin_no
 * @property string|null $vat_no
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $mobile
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Departments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments query()
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereRegNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereTinNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereTradeLicenseNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departments whereVatNo($value)
 * @mixin \Eloquent
 */
class Departments extends Model
{
    use HasFactory;
}
