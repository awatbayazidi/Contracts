<?php
namespace AwatBayazidi\Contracts\Payam;


interface SessionStore
{
    public function flash($name, $data);
    
    public function forget($keys);

    public function put($key, $value = null);

}