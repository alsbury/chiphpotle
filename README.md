# Chiphpotle
## SpiceDB PHP library

*This library probably won't even work for you if you try it. Currently the generated classes have issues that may be indicative of a bug within the protobuf extension for PHP. If you are interested in helping me figure out how to get this working in PHP, let me know.*

### How to run example:
```
docker-compose up -d
docker-compose exec client bash
composer install
php ./examples/write.php
```