<?php

/*
 * This file is part of the Droop7 package.
 */

namespace Droop7\Core\Processing;

/**
 * BlockAssembler merge blocks of a builder.
 * @author Matthieu Keromen
 */
class BlockAssembler extends Assembler
{

    /**
     * @param \Droop7\Core\Builder $builder
     * @return $this
     */
    public function add(\Droop7\Core\Builder $builder)
    {
        return parent::merge($builder->buildBlocks());
    }

}