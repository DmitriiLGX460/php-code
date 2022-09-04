<?php
class Model
{
    protected static array $data =[
        [], [], []
    ];

    public static function findOne(): array
    {
        return array_shift(self::$data);
    }

    public static function findAll(): array
    {
        return self::$data;
    }
}