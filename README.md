# Magento2 Module Rafique SharedCart

    `rafique/module-shared-cart`

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)


## Main Functionalities
Share Cart Across Multiple Websites in Magento 2. The module has been tested using subdomains but should also work with a fully qualified domain.
 subdomain example `eu.m2.dev` or `us.m2.dev`

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Rafique`
 - Enable the module by running `php bin/magento module:enable Rafique_SharedCart`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Run the compiler `php bin/magento setupLdi:compile` \*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer (Soon)

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require rafique/module-shared-cart`
 - enable the module by running `php bin/magento module:enable Rafique_SharedCart`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### If this has saved you some time send a tip 
    - BTC bc1qafztm68d3c49d8fyq36gx6pvrcmufn5kr3thkn

