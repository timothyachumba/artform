start: npm
	node node_modules/stylus/bin/stylus -w -c assets/styles/home.styl --out assets/build &
	node node_modules/stylus/bin/stylus -w -c assets/styles/about.styl --out assets/build &
	node_modules/watchify/bin/cmd.js assets/scripts/home.js -o assets/scripts/home.dev.js &
	node_modules/watchify/bin/cmd.js assets/scripts/about.js -o assets/scripts/about.dev.js

build: npm
	node node_modules/stylus/bin/stylus -c assets/styles/home.styl --out assets/build &
	node node_modules/stylus/bin/stylus -c assets/styles/about.styl --out assets/build &
	node node_modules/browserify/bin/cmd.js assets/scripts/home.js -t uglifyify -o assets/build/home.min.js &
	node node_modules/browserify/bin/cmd.js assets/scripts/home.js -t uglifyify -o assets/build/about.min.js 

npm:
	npm install --quiet --production
