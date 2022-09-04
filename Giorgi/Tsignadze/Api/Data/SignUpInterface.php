<?php

namespace Giorgi\Tsignadze\Api\Data;

interface SignUpInterface
{

    const NAME = "fname";
    const DATE = "date";

    /**
     * @return mixed
     */
    public  function getId();

    /**
     * @param $fname
     * @return mixed
     */
    public function setFname(string $fname);

    /**
     * @return mixed
     */
    public function getFname();

    /**
     * @param $date
     * @return mixed
     */
    public function setDate(string $date);

    /**
     * @return mixed
     */
    public function getDate();
}
