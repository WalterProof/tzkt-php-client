build:
	openapi-generator-cli generate -c config.yaml
	contents=`jq '{name: "bzzhh/tzkt-php-client"} + .' composer.json` ; \
		echo "$$contents" > composer.json
