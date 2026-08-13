<?php

declare(strict_types=1);


namespace Citadel\NebulaTheme;

use Forumify\Plugin\AbstractForumifyTheme;
use Forumify\Plugin\PluginMetadata;

class CitadelMilsimTheme extends AbstractForumifyTheme
{
    public function getPluginMetadata(): PluginMetadata
    {
        return new PluginMetadata(
            'Milsim Theme',
            'Citadel Software Solutions'
        );
    }

    public function getStylesheets(): array
    {
        return ['framework.css'];
    }
}