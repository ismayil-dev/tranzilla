# Omnipay: Tranzila

**Tranzila driver for the Omnipay PHP payment processing library**

This package implements Tranzila support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply require `league/omnipay` and `futureecom/omnipay-tranzila` with Composer:

```
composer require league/omnipay futureecom/omnipay-tranzila
```

## Basic Usage

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay) repository.

The following gateways are supported by this package:
* Authorize
* Capture
* Purchase
* Refund
* Void

### Tranzila Documentation

* [English](http://tranzila:express2017!secret@doctren.interspace.net/?type=1)

We are not the authors of the Tranzila API! 
Please direct any questions about Tranzila to Tranzila Support.

### Supported currencies

Tranzila supports only four currencies:
- EUR
- GBP
- ILS
- USD

If you will use an unsupported currency, you'll  receive an `InvalidRequestException`.
