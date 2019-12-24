<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mamber extends Model
{
    protected $filable =['Member_titel',
                        'Member_name',
                        'Member_last_name',		
                        'Date_birth',	
                        'Member_age',	
                        'End_heiht',	
                        'Member_username',	
                        'Member_password',	
                        'Member_email'];
}

