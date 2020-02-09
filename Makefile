start: npm
	node node_modules/stylus/bin/stylus -w -c assets/styles/home.styl --out assets/build &
	node_modules/watchify/bin/cmd.js assets/scripts/home.js -o assets/scripts/home.dev.js &

build: npm
	node node_modules/stylus/bin/stylus -c assets/styles/home.styl --out assets/build &
	node node_modules/browserify/bin/cmd.js assets/scripts/home.js -t uglifyify -o assets/build/home.min.js

npm:
	npm install --quiet --production
