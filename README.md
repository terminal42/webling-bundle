# terminal42/webling-bundle

A Symfony bundle for [our webling.ch API client](https://github.com/terminal42/webling-api).
This bundle is currently used for our own projects and is not stable at all.
It thus might be subject to heavy changes.
If you're interested in moving to a stable release (version 1.0.0) so you can be
sure there are no BC breaks until version 2.0.0 (semver), please feel free to
get in touch with us.


## Installation

```bash
$ composer.phar require terminal42/webling-bundle ^1.0
```


## Configuration

The following config options are available (usually add to `app/config/config.yml`).

```yaml
terminal42_webling:
    subdomain:      ""   # Mandatory; Your Webling subdomain
    api_key:        ""   # Mandatory; Your API key
    api_version:    ~    # Optional; Defaults to the API version in EntityManager (v1)
    entity_factory: ~    # Optional; Replace default class to create custom entity instances
```


## Available services

The bundle will provide services for all repositories and some more (see `services.xml`).
The useful ones:

- `terminal42_webling.entity_manager`
    preconfigured with the configuration (see above).
- `terminal42_webling.repository.member`
    to find and fetch members.
- `terminal42_webling.repository.membergroup`
    to find and fetch member groups.
- `terminal42_webling.repository.article`
    to find and fetch articles.
- `terminal42_webling.repository.articlegroup`
    to find and fetch article groups.
- `terminal42_webling.repository.document`
    to find and fetch documents.
- `terminal42_webling.repository.documentgroup`
    to find and fetch document groups.
