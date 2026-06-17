# Contributing

Thanks for helping improve Weekly Wildcat.

## Development approach

This theme should stay as WordPress-native as possible:

- Prefer block templates over PHP templates.
- Prefer template parts and patterns over custom settings panels.
- Prefer Query Loop blocks over custom loops.
- Keep frontend JavaScript out unless WordPress blocks and CSS cannot solve the problem.
- Put newsroom data/features in the companion plugin, not the theme.

## Pull requests

Before opening a pull request:

1. Make sure the theme still activates in WordPress.
2. Check that `theme.json` and files in `styles/` are valid JSON.
3. Check PHP files with `php -l`.
4. Test the homepage, single post, archive, search, author, category, tag, and 404 templates.
