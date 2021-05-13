
all: style.css style-rtl.css


style.css: $(shell find sass -type f)
	sass sass/style.scss

style-rtl.css: style.css
	npm run compile:rtl 


.PHONY: checker sr

# checks all PHP files against PHP Coding Standards.
# checks all PHP files for syntax errors.
# checks all SASS files against CSS Coding Standards.
# checks all JavaScript files against JavaScript Coding Standards.
checker:
	@- { composer lint:wpcs; composer lint:php; npm run lint:scss; npm run lint:js;} > /tmp/errors.txt
	less /tmp/errors.txt

# Used for localization I think
# composer make-pot 		# generates a .pot file in the languages/ directory.
