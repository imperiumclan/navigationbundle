# Imperium Clan - Navigation Bundle
This bundle provide Bootstrap Navigation bar configure in config files

## Installation

EasyAdmin 3 requires PHP 7.2 or higher and Symfony 5.1 or higher. Run the following command to install it in your application:

```
$ composer require imperiumclan/navigation-bundle
```

## Documentation

### Configuration

```yaml
navigation:
  navbars:
    mainnav:
      brand: BrandText
      brandIcon: fa fa-check
      color: dark
      fixed: sticky
      searchenabled: true
      searchroute: homepage
      items:
        homepage:
          lib: homepage
          icon: fa fa-home
          route: homepage

  usermenu:
    activate: true
    connexionroute: homepage
    autolib: false
    childs:
      logout:
        lib: Sign-out
        icon: fa fa-sign-out
        route: homepage
```

## License

This software is published under the MIT License