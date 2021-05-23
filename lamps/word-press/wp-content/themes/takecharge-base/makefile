SHELL := /bin/bash
theme_dir = ../word-press/wp-content/themes/takecharge-base


all: style.css $(theme_dir)/*


style.css: style.scss variables.scss makefile
	sass style.scss style.css


$(theme_dir)/%: %
	@if [[ -d $< ]]; then \
		true; \
	else \
		echo "Moveing '$<'"; \
		cp $< $(theme_dir)/$<; \
	fi ;

.PHONY: install

install: style.css
	@ echo "Installing SCSSPHP"
	@-git clone --branch v1.5.2 https://github.com/scssphp/scssphp.git
	mkdir -p $(theme_dir)
	cp -R . $(theme_dir)
