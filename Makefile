start: npm
	node node_modules/stylus/bin/stylus -w -c assets/styles/home.styl --out assets/build &
	node node_modules/stylus/bin/stylus -w -c assets/styles/team.styl --out assets/build &
	node node_modules/stylus/bin/stylus -w -c assets/styles/case-studies.styl --out assets/build &
	node node_modules/stylus/bin/stylus -w -c assets/styles/case-study.styl --out assets/build &
	node_modules/watchify/bin/cmd.js assets/scripts/home.js -o assets/scripts/home.dev.js &
	node_modules/watchify/bin/cmd.js assets/scripts/team.js -o assets/scripts/team.dev.js &
	node_modules/watchify/bin/cmd.js assets/scripts/case-studies.js -o assets/scripts/case-studies.dev.js &
	node_modules/watchify/bin/cmd.js assets/scripts/case-study.js -o assets/scripts/case-study.dev.js

build: npm
	node node_modules/stylus/bin/stylus -c assets/styles/home.styl --out assets/build &
	node node_modules/stylus/bin/stylus -c assets/styles/team.styl --out assets/build &
	node node_modules/stylus/bin/stylus -c assets/styles/case-studies.styl --out assets/build &
	node node_modules/stylus/bin/stylus -c assets/styles/case-study.styl --out assets/build &
	node node_modules/browserify/bin/cmd.js assets/scripts/home.js -t uglifyify -m -o assets/build/home.min.js &
	node node_modules/browserify/bin/cmd.js assets/scripts/team.js -t uglifyify -m -o assets/build/team.min.js &
	node node_modules/browserify/bin/cmd.js assets/scripts/case-studies.js -t uglifyify -m -o assets/build/case-studies.min.js &
	node node_modules/browserify/bin/cmd.js assets/scripts/case-study.js -t uglifyify -m -o assets/build/case-study.min.js

npm:
	npm install --quiet --production
