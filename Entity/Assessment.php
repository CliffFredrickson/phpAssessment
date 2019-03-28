<?php
/**
 * Created by PhpStorm.
 * User: Cliff
 * Date: 2019/03/25
 * Time: 7:15 PM
 */
class Assessment
{
    protected $success;
    protected $message;
    protected $result;

    public function getResult()
    {
        return $this->result;
    }
    public function setResult($value)
    {
        $this->result = $value;
    }

    public function getMessage()
    {
        return $this->message;
    }
    public function setMessage($value)
    {
        $this->message = $value;
    }

    public function getSuccess()
    {
        return $this->success;
    }
    public function setSuccess($value)
    {
        $this->success = $value;
    }
}