<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Student extends Model implements HasMedia
{
    use HasMediaTrait;

    public const SESSIONS_RADIO = [
        'January'   => 'January',
        'April'     => 'April',
        'September' => 'September',
    ];

    public const EMPLOYMENT_STATUS_SELECT = [
        'Employed'      => 'Employed',
        'Self-employed' => 'Self-employed',
        'Unemployed'    => 'Unemployed',
    ];

    public $table = 'students';

    protected $appends = [
        'documents',
    ];

    protected $dates = [
        'date_of_birth',
        'date_of_entry',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'full_name',
        'address',
        'post_code',
        'contact_no',
        'email',
        'date_of_birth',
        'ni_no',
        'date_of_entry',
        'referred_by',
        'employment_status',
        'campus',
        'course_applying_for',
        'course_title',
        'course_time_table',
        'sessions',
        'previous_study',
        'availibility',
        'qualifications',
        'emergency_contact_name',
        'emergency_contact_phone',
        'emergency_contact_relation',
        'references',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getDateOfBirthAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDateOfEntryAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfEntryAttribute($value)
    {
        $this->attributes['date_of_entry'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDocumentsAttribute()
    {
        return $this->getMedia('documents');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}