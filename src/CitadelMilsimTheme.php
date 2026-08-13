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
            hasDarkVariant: false,
            vars: [
                new ThemeVar(
                    key: 'c-accent',
                    label: 'Unit Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5b6a32',
                    help: 'The unit colour. Used for primary buttons, links, insignia and the header underline.',
                ),
                new ThemeVar(
                    key: 'c-oxide',
                    label: 'Stamp Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#8a3b2a',
                    help: 'Used for stamped section labels and destructive actions.',
                ),
                new ThemeVar(
                    key: 'c-paper',
                    label: 'Paper Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                    help: 'The page background.',
                ),
                new ThemeVar(
                    key: 'c-header-bg',
                    label: 'Header Background',
                    type: ThemeVarType::Color,
                    defaultValue: '#1e2318',
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
                    key: 'c-primary',
                    label: 'Primary Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1e2318',
                ),
                new ThemeVar(
                    key: 'c-primary-accent',
                    label: 'Primary Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5b6a32',
                ),
                new ThemeVar(
                    key: 'c-primary-text',
                    label: 'Primary Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                ),
                new ThemeVar(
                    key: 'c-secondary',
                    label: 'Secondary Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5f6357',
                ),
                new ThemeVar(
                    key: 'c-secondary-text',
                    label: 'Secondary Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                ),
                new ThemeVar(
                    key: 'c-call-to-action',
                    label: 'Call to Action Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5b6a32',
                ),
                new ThemeVar(
                    key: 'c-call-to-action-accent',
                    label: 'Call to Action Accent Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#47522a',
                ),
                new ThemeVar(
                    key: 'c-call-to-action-text',
                    label: 'Call to Action Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#ffffff',
                ),
                new ThemeVar(
                    key: 'c-text-primary',
                    label: 'Body Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1a1c18',
                ),
                new ThemeVar(
                    key: 'c-text-secondary',
                    label: 'Muted Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#5f6357',
                ),
                new ThemeVar(
                    key: 'c-elevation-0',
                    label: 'Elevation 0 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f2efe7',
                ),
                new ThemeVar(
                    key: 'c-elevation-1',
                    label: 'Elevation 1 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#fbfaf6',
                ),
                new ThemeVar(
                    key: 'c-elevation-2',
                    label: 'Elevation 2 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e9e5d9',
                ),
                new ThemeVar(
                    key: 'c-elevation-3',
                    label: 'Elevation 3 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e0dbcb',
                ),
                new ThemeVar(
                    key: 'c-elevation-4',
                    label: 'Elevation 4 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#d6d0bd',
                ),
                new ThemeVar(
                    key: 'c-elevation-5',
                    label: 'Elevation 5 Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#cbc4ae',
                ),
                new ThemeVar(
                    key: 'c-border',
                    label: 'Divider Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#dcd6c6',
                ),
                new ThemeVar(
                    key: 'c-hover',
                    label: 'Hover Colour',
                    type: ThemeVarType::Color,
                    defaultValue: 'rgba(26, 28, 24, 0.04)',
                ),
                new ThemeVar(
                    key: 'c-success',
                    label: 'Success Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e4f1e9',
                ),
                new ThemeVar(
                    key: 'c-success-text',
                    label: 'Success Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1f5c3d',
                ),
                new ThemeVar(
                    key: 'c-info',
                    label: 'Info Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#e6edf4',
                ),
                new ThemeVar(
                    key: 'c-info-text',
                    label: 'Info Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#1f4a6b',
                ),
                new ThemeVar(
                    key: 'c-warning',
                    label: 'Warning Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#fbf3dc',
                ),
                new ThemeVar(
                    key: 'c-warning-text',
                    label: 'Warning Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#7a5a0c',
                ),
                new ThemeVar(
                    key: 'c-error',
                    label: 'Error Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#f6e7e3',
                ),
                new ThemeVar(
                    key: 'c-error-text',
                    label: 'Error Text Colour',
                    type: ThemeVarType::Color,
                    defaultValue: '#8a3b2a',
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
