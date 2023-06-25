build:
	openapi-generator-cli generate -c config.yaml
	contents=`jq '{name: "bzzhh/tzkt-php-client"} + .' composer.json | jq '.license = "MIT"'` ; \
		echo "$$contents" > composer.json
