<?php
return [
    /*
    |---------------------------------------------------------------------------
    | Catalog Serving
    |---------------------------------------------------------------------------
    |
    | Set whether to serve catalog from API or Synced(from Printful and stored in database).
    |
    | When set to `API`, catalog data such as products, variants, etc, shall be fetched from Printful and served to visitors.
    | Otherwise, `Synced` means serving visitors with data already synced and stored in database or datastore.
    |
    */
    
    "catalog_serving" => 'API',
    
    /*
    |---------------------------------------------------------------------------
    | API KEY
    |---------------------------------------------------------------------------
    |
    */
    "api_key" => "",
    
    /*
    |---------------------------------------------------------------------------
    | Printful Locale
    |---------------------------------------------------------------------------
    | Available localizations 
    | ['en_US',
      'en_GB',
      'en_CA',
      'es_ES',
      'fr_FR',
      'de_DE',
      'it_IT',
      'ja_JP']
    |
    | It worth noting that Printful localizations might be different from laravel's. Especially the name.
    | Please choose the available names supplied by Printful.
    */
    "locale" => "en_US"
  ];