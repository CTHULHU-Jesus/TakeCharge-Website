
all: style.css ../word-press/wp-content/themes/takecharge-base/


style.css: style.scss
	sass style.scss style.css

../word-press/wp-content/themes/takecharge-base/: $(shell find .)
	cp -R * ../word-press/wp-content/themes/takecharge-base/
