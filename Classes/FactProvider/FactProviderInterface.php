<?php

namespace Bitmotion\Locate\FactProvider;


/**
 * Fact provider interface
 *
 * @author Rene Fritz (r.fritz@bitmotion.de)
 * @package    Locate
 * @subpackage FactProvider
 */
interface FactProviderInterface
{

    /**
     *
     * @param string $baseName The basename for the factsArray. This name comes from configuration.
     * @param array $configArray TypoScript configuration array for this fact provider
     */
    public function __construct($baseName, $configArray);

    /**
     * Call the fact module which might add some data to the factArray
     *
     * @param array $factsArray
     */
    public function Process(&$factsArray);
}

