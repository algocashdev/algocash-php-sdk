<?php

namespace Algocash\Model;

/**
 * Error Class
 *
 */
class Error
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $type;


    /**
     * Constructor
     * 
     * @param  array $data
     *
     */
    public function __construct($data)
    {
        $this->code = $data['code'];
        $this->description = $data['description'];
        $this->type = $data['type'];
    }
}