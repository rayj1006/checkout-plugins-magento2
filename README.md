# latitude-checkout

Demo checkout module for Magneto 2

## Install module

### Open Command line interface and navigate to Magento directory

```sh
    cd /var/www/html/magento
```

### Configure Latitude checkout module

```sh
    # add -vvv for verbose mode
    composer require latitude/checkout  # new installation
    composer update latitude/checkout   # update existing installation
```

### Upgrade your store instance 

```sh
    php bin/magento setup:upgrade
```

### Compile and deploy static content

```sh
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy
```

### Flush the cache from Magento Admin

```
    System > Cache Management > Flush Cache Storage
```

## Enable payment method

> Before proceeding with next steps, make sure that you have credentials to use Latitude Checkout.


1. Navigate to Magento Admin > Stores > Configuration > Sales > Payment Methods> Latitude

1. Enter the Merchant ID and Secret Key

1. Click on Enabled checkbox

1. Enable Test mode for testing

1. Save the configuration
