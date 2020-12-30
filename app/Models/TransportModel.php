<?php namespace App\Models;

use CodeIgniter\Model;

class TransportModel extends Model
{
    protected $table      = 'transports';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['count'];
    protected $skipValidation     = true;
}