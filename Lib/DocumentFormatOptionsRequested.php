<?php

namespace FedexApi\Lib;

class DocumentFormatOptionsRequested
{

    /**
     * @var DocumentFormatOptionType[] $Options
     */
    protected $Options = null;

    /**
     * @param DocumentFormatOptionType[] $Options
     */
    public function __construct(array $Options)
    {
      $this->Options = $Options;
    }

    /**
     * @return DocumentFormatOptionType[]
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param DocumentFormatOptionType[] $Options
     * @return \FedexApi\Lib\DocumentFormatOptionsRequested
     */
    public function setOptions(array $Options)
    {
      $this->Options = $Options;
      return $this;
    }

}
