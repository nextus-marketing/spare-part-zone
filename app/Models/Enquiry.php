<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
class Enquiry extends BaseModel
{
    protected $fillable = ['full_name', 'last_name', 'email', 'mobile', 'message', 'remark', 'subject', 'action'];
}
