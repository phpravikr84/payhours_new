<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnzBankTransferSetup extends Model
{
    protected $fillable = [
        'anz_customer_reference',
        'anz_folder_directory',
        'gl_account_code',
    ];
}
