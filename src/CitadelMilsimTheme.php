<?php

declare(strict_types=1);

namespace Citadel\MilsimTheme;

use Forumify\Plugin\AbstractForumifyTheme;
use Forumify\Plugin\PluginMetadata;
use Forumify\Plugin\ThemeConfig;
use Forumify\Plugin\ThemeVar;
use Forumify\Plugin\ThemeVarType;

class CitadelMilsimTheme extends AbstractForumifyTheme
{
    public function getPluginMetadata(): PluginMetadata
    {
        return new PluginMetadata(
            'Milsim Theme',
            'Citadel Software Solutions',
            'A light, document-inspired theme for military simulation units, covering the forum and the full MilHQ surface.',
        );
    }

    public function getStylesheets(): array
    {
        return ['framework.css'];
    }

    public function getThemeConfig(): ThemeConfig
    {
        return new ThemeConfig(
            hasDarkVariant: true,
            vars: [
                new ThemeVar(
                    key: 'c-accent',
                    label: 'Unit Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5b6a32',
                    defaultDarkValue: '#9cb35a',
                    help: 'The unit colour. Used for primary buttons, links, insignia and the header underline.',
                ),
                new ThemeVar(
                    key: 'c-oxide',
                    label: 'Stamp Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#8a3b2a',
                    defaultDarkValue: '#e08573',
                    help: 'Used for stamped section labels and destructive actions.',
                ),
                new ThemeVar(
                    key: 'c-paper',
                    label: 'Paper Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                    defaultDarkValue: '#17181a',
                    help: 'The page background.',
                ),
                new ThemeVar(
                    key: 'c-header-bg',
                    label: 'Header Background',
                    type: ThemeVarType::Color,
                    defaultValue: '#1e2318',
                    defaultDarkValue: '#101112',
                ),
                new ThemeVar(
                    key: 'ms-display-font',
                    label: 'Display Font',
                    type: ThemeVarType::String,
                    defaultValue: "'Oswald', sans-serif",
                    help: 'Used for headings, buttons and navigation.',
                ),
                new ThemeVar(
                    key: 'ms-data-font',
                    label: 'Data Font',
                    type: ThemeVarType::String,
                    defaultValue: "'IBM Plex Mono', monospace",
                    help: 'Used for dates, ranks, assignments and other record data.',
                ),
                new ThemeVar(
                    key: 'c-on-dark',
                    label: 'Text on Dark Surfaces',
                    type: ThemeVarType::Color,
                    defaultValue: '#e9e7e2',
                    help: 'Text and icons on the header, hero and other permanently dark chrome. Stays light in both modes.',
                ),
                new ThemeVar(
                    key: 'c-header-hover',
                    label: 'Header Hover Colour',
                    type: ThemeVarType::String,
                    defaultValue: 'rgba(233, 231, 226, 0.1)',
                    help: 'Hover wash on the header and on buttons placed over dark surfaces. The header is dark in both modes, so this stays a light wash.',
                ),
                new ThemeVar(
                    key: 'ms-hero-overlay',
                    label: 'Hero Overlay',
                    type: ThemeVarType::String,
                    defaultValue: 'rgba(30, 35, 24, 0.72)',
                    defaultDarkValue: 'rgba(16, 17, 18, 0.78)',
                    help: 'Scrim drawn over hero background images to keep text legible.',
                ),
                new ThemeVar(
                    key: 'c-primary',
                    label: 'Primary Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5b6a32',
                    defaultDarkValue: '#9cb35a',
                    help: 'Links and primary buttons. Follows the unit accent by default.',
                ),
                new ThemeVar(
                    key: 'c-primary-accent',
                    label: 'Primary Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#47522a',
                    defaultDarkValue: '#b3c977',
                ),
                new ThemeVar(
                    key: 'c-primary-text',
                    label: 'Primary Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#ffffff',
                    defaultDarkValue: '#0a0b08',
                ),
                new ThemeVar(
                    key: 'c-secondary',
                    label: 'Secondary Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5f6357',
                    defaultDarkValue: '#a0a09a',
                ),
                new ThemeVar(
                    key: 'c-secondary-text',
                    label: 'Secondary Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#ffffff',
                    defaultDarkValue: '#0a0b08',
                ),
                new ThemeVar(
                    key: 'c-call-to-action',
                    label: 'Call to Action Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#8a3b2a',
                    defaultDarkValue: '#e08573',
                    help: 'Reserved for enlistment and other high-intent actions.',
                ),
                new ThemeVar(
                    key: 'c-call-to-action-accent',
                    label: 'Call to Action Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#6f2f21',
                    defaultDarkValue: '#eda08f',
                ),
                new ThemeVar(
                    key: 'c-call-to-action-text',
                    label: 'Call to Action Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#ffffff',
                    defaultDarkValue: '#0a0b08',
                ),
                new ThemeVar(
                    key: 'c-text-primary',
                    label: 'Body Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1a1c18',
                    defaultDarkValue: '#e9e7e2',
                ),
                new ThemeVar(
                    key: 'c-text-secondary',
                    label: 'Muted Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5f6357',
                    defaultDarkValue: '#a0a09a',
                ),
                new ThemeVar(
                    key: 'c-elevation-0',
                    label: 'Elevation 0 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                    defaultDarkValue: '#17181a',
                ),
                new ThemeVar(
                    key: 'c-elevation-1',
                    label: 'Elevation 1 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#fbfaf6',
                    defaultDarkValue: '#1f2124',
                ),
                new ThemeVar(
                    key: 'c-elevation-2',
                    label: 'Elevation 2 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e9e5d9',
                    defaultDarkValue: '#282a2e',
                ),
                new ThemeVar(
                    key: 'c-elevation-3',
                    label: 'Elevation 3 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e5e0d1',
                    defaultDarkValue: '#303338',
                ),
                new ThemeVar(
                    key: 'c-elevation-4',
                    label: 'Elevation 4 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#d6d0bd',
                    defaultDarkValue: '#383b41',
                ),
                new ThemeVar(
                    key: 'c-elevation-5',
                    label: 'Elevation 5 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#cbc4ae',
                    defaultDarkValue: '#42464d',
                ),
                new ThemeVar(
                    key: 'c-border',
                    label: 'Divider Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#dcd6c6',
                    defaultDarkValue: '#3a3d42',
                ),
                new ThemeVar(
                    key: 'c-hover',
                    label: 'Hover Colour',
                    type: ThemeVarType::Color,
                    defaultValue: 'rgba(26, 28, 24, 0.04)',
                    defaultDarkValue: 'rgba(233, 231, 226, 0.06)',
                ),
                new ThemeVar(
                    key: 'c-success',
                    label: 'Success Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e4f1e9',
                    defaultDarkValue: '#1a2e24',
                ),
                new ThemeVar(
                    key: 'c-success-text',
                    label: 'Success Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1f5c3d',
                    defaultDarkValue: '#7fd8a4',
                ),
                new ThemeVar(
                    key: 'c-info',
                    label: 'Info Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e6edf4',
                    defaultDarkValue: '#1b2a36',
                ),
                new ThemeVar(
                    key: 'c-info-text',
                    label: 'Info Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1f4a6b',
                    defaultDarkValue: '#8ab4dd',
                ),
                new ThemeVar(
                    key: 'c-warning',
                    label: 'Warning Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#fbf3dc',
                    defaultDarkValue: '#322a17',
                ),
                new ThemeVar(
                    key: 'c-warning-text',
                    label: 'Warning Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#7a5a0c',
                    defaultDarkValue: '#e3c06a',
                ),
                new ThemeVar(
                    key: 'c-error',
                    label: 'Error Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f6e7e3',
                    defaultDarkValue: '#331f1b',
                ),
                new ThemeVar(
                    key: 'c-error-text',
                    label: 'Error Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#8a3b2a',
                    defaultDarkValue: '#e08573',
                ),
                new ThemeVar(
                    key: 'border-style',
                    label: 'Border Style',
                    type: ThemeVarType::String,
                    defaultValue: 'solid',
                ),
                new ThemeVar(
                    key: 'border-width',
                    label: 'Border Width',
                    type: ThemeVarType::Size,
                    defaultValue: '1px',
                ),
                new ThemeVar(
                    key: 'border-color',
                    label: 'Border Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#dcd6c6',
                    defaultDarkValue: '#3a3d42',
                ),
                new ThemeVar(
                    key: 'border',
                    label: 'Border',
                    type: ThemeVarType::String,
                    defaultValue: 'var(--border-style) var(--border-width) var(--border-color)',
                ),
                new ThemeVar(
                    key: 'border-radius',
                    label: 'Border Radius',
                    type: ThemeVarType::Size,
                    defaultValue: '0',
                ),
                new ThemeVar(
                    key: 'button-border-radius',
                    label: 'Button Border Radius',
                    type: ThemeVarType::Size,
                    defaultValue: '0',
                ),
                new ThemeVar(
                    key: 'font-size',
                    label: 'Font Size',
                    type: ThemeVarType::Size,
                    defaultValue: '16px',
                ),
            ],
        );
    }
}
