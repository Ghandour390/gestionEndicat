<?php
namespace App\Repositories;

interface IClasseRepository{
    public function getAllClass();
    public function createClass(array $Data);
}