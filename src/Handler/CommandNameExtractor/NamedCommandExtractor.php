<?php

namespace League\Tactician\Handler\CommandNameExtractor;

/**
 * Extract the name from a NamedCommand
 */
class NamedCommandExtractor implements CommandNameExtractor
{
    /**
     * {@inheritdoc}
     */
    public function extract($command)
    {
        if ($command instanceof NamedCommand) {
            return $command->getCommandName();
        }

        // fallback to class name
        return get_class($command);
    }
}
