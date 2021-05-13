
all: style.css style-rtl.css


style.css: $(shell find sass -type f)
	npm run compile:css

style-rtl.css: style.css
	npm run compile:rtl 


.PHONY: checker sr

sr:
	find . -type f -name "*" -exec sed -i -e 's/\'_s\'/\'takecharge-base\'/g' {} +

checker:
	composer lint:wpcs   	# checks all PHP files against PHP Coding Standards.
	composer lint:php 	 	# checks all PHP files for syntax errors.
	npm run lint:scss 		# checks all SASS files against CSS Coding Standards.
	npm run lint:js       # checks all JavaScript files against JavaScript Coding Standards.

# Used for localization I think
# composer make-pot 		# generates a .pot file in the languages/ directory.
