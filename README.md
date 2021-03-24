# PhpMemcacheAdmin Docker Container Images

About image:

- Images based on Debian Linux
- Used code [clickalicious/phpmemadmin](https://github.com/clickalicious/phpmemadmin)
- [Docker Hub](https://hub.docker.com/repository/docker/eleventh/pmca)

Supported tags

- `5.6-0.3.1`

## Environment Variables

| Variable       | Default value       |
| -------------- | ------------------- |
| `USER_NAME`    | `admin`             |
| `PASSWORD`     | `admin`             |
| `HOST`         | `127.0.0.1`         |
| `PORT`         | `11211`             |
| `TIME_ZONE`    | `UTC`               |

## Build arguments

| Argument         | Default value |
| ---------------- | ------------- |
| `PHP_VER`        | `5.6`         |
| `PMCA_VER`       | `0.3.1`       |

## Tools you need

- ### [Composer](https://getcomposer.org)
