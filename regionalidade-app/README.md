# First Time Running [  Dev ]

```
cd regionalidade-app

docker run --rm \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install
```