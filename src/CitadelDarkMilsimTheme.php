<?php

namespace Citadel\DarkMilsimTheme;

use Forumify\Plugin\AbstractForumifyTheme;
use Forumify\Plugin\PluginMetadata;
use Forumify\Plugin\ThemeConfig;
use Forumify\Plugin\ThemeVar;
use Forumify\Plugin\ThemeVarType;

class CitadelDarkMilsimTheme extends AbstractForumifyTheme
{

    public function getPluginMetadata(): PluginMetadata
    {
        return new Pluginmetadata(
            'Dark Milsim Theme',
            'Citadel Software Solutions',
            'war'
        );
    }

    public function getThemeConfig(): ThemeConfig
    {
        return new ThemeConfig(
            hasDarkVariant: false,
            vars: [
                new ThemeVar(
                    key: 'c-dawg',
                    label: 'Primary Dawg',
                    type: ThemeVarType::Color,
                    defaultValue: '#00ff00'
                )
            ]
        );
    }

    public function getStylesheets(): array
    {
        return ['test.css'];
    }
}