<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Error extends JsonResource
{
    protected $message;
    protected $errors;
    protected $code;
    public function __construct($code,$message= "Failed operation",$errors="")
    {
        $this->code=$code;
        $this->message=$message;
        if(is_array($errors)){
            $this->errors= $errors;
        }else{
            $this->errors= ["target" => [$errors]];
        }
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            "message"=>$this->message,
            "errors"=> 
                $this->errors
            
        ];
    }

    public function withResponse($request, $response)
    {
        $response->setStatusCode($this->code);
    }
}
