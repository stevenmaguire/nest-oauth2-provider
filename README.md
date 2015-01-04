# Nest provider for league/oauth2-client

This is a package to integrate Google Nest authentication with the OAuth2 client library by
[The League of Extraordinary Packages](https://github.com/thephpleague/oauth2-client).

To install, use composer:

```bash
composer require grumpydictator/nest-oauth2-provider
```

Usage is the same as the league's OAuth client, using `\Grumpydictator\NestOauth2Provider\Provider\NestProvider` as the provider.
For example:

```php
$provider = new \Grumpydictator\NestOauth2Provider\Provider\NestProvider([
    'clientId' => "YOUR_CLIENT_ID",
    'clientSecret' => "YOUR_CLIENT_SECRET",
    'redirectUri' => "http://your-redirect-uri"
]);


if (isset($_GET['code']) && $_GET['code']) {
    $token = $this->provider->getAccessToken("authorizaton_code", [
        'code' => $_GET['code']
    ]);

    
}
```

## Attention

This is still a beta release. Other than the access token, it doesn't do much more.