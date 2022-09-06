<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property string|null $meta_title
 * @property string|null $content
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereMetaTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUserId($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Departments extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string $name
 * @property string $degree
 * @property string|null $specialist
 * @property string $phone
 * @property string|null $job_location
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereJobLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpecialist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string|null $image
 * @property int $total_view
 * @property int $is_active
 * @property int $user_id
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTotalView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUserId($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tasks
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string $status
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tasks whereUpdatedAt($value)
 */
	class Tasks extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

