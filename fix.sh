#!/bin/bash

for line in $(git diff --name-only | grep '.*.css'); do
	echo "node_modules/.bin/postcss --use autoprefixer -o $line $line"
	node_modules/.bin/postcss --use autoprefixer -o $line $line
done