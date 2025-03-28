<?php
namespace core\Middleware ;
class Middleware {
    public const MAP =[
        "guest" => Guest::class ,
        "registered" => Registered::class,
        "manager"=>Manager::class,
        "admin"=>Admin::class,
        "normal"=>Normal::class
    ];
    public static function resolve ($key){
        if (! $key){
            return ;
        }
        $middleware = static::MAP[$key] ?? false ;

        if(!$middleware){
            throw new \Exception("no mathing middileware found  for key {$key}");
        }
        (new $middleware)->handle();
    }


}