# Changelog

All notable changes to `php-olc-sdk` will be documented in this file.

## 0.1.0 - 2026-09-23

**Breaking:** `Olc` and `OlcConnector` now require `url` and `token`; the package no longer depends on Laravel. Adds `ContentObject` / `ContentObjectCollection` and sends `insurance`. `billingAddress` is deprecated (the OLC API has no billing address).

### What's Changed

* Bump dependabot/fetch-metadata from 3.0.0 to 3.1.0 by @dependabot[bot] in https://github.com/smart-dato/php-olc-sdk/pull/18
* Update pestphp/pest requirement from ^3.0 to ^4.7 by @dependabot[bot] in https://github.com/smart-dato/php-olc-sdk/pull/20
* Bump actions/checkout from 6.0.3 to 7.0.1 by @dependabot[bot] in https://github.com/smart-dato/php-olc-sdk/pull/22
* Update pestphp/pest requirement from ^4.7 to ^5.2 by @dependabot[bot] in https://github.com/smart-dato/php-olc-sdk/pull/25
* fix: drop coverage report config to unbreak tests on PHPUnit 13 by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/26
* ci: check code style instead of auto-committing it by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/27
* ci: commit the changelog through the API so it is signed by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/28
* fix: drop the undeclared Laravel dependency, and add PHPStan by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/29
* fix: actually send the shipment content by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/30
* docs: update README and fix issues found while documenting by @michael-tscholl in https://github.com/smart-dato/php-olc-sdk/pull/31

**Full Changelog**: https://github.com/smart-dato/php-olc-sdk/compare/0.0.3...0.1.0

## 0.0.2 - 2025-07-03

### What's Changed

* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot in https://github.com/smart-dato/php-olc-sdk/pull/1

### New Contributors

* @dependabot made their first contribution in https://github.com/smart-dato/php-olc-sdk/pull/1

**Full Changelog**: https://github.com/smart-dato/php-olc-sdk/compare/0.0.1...0.0.2

## 0.0.1 - 2025-04-18

**Full Changelog**: https://github.com/smart-dato/php-olc-sdk/commits/0.0.1
