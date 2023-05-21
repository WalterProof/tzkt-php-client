build:
	openapi-generator-cli generate -i https://api.tzkt.io/v1/swagger.json -g php -c config.yaml
	contents=`jq '{name: "bzzhh/tzkt-php-client"} + .' composer.json` ; \
		echo "$$contents" > composer.json
