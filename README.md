# What is 'Material'? <img src="https://travis-ci.org/codyn329/Material.svg?branch=master" align="right"/>
> A MediaWiki skin based on Google's Material Design language

This is a project in **early alpha phase** that aims to combine Material Design with MediaWiki to create a new skin. In the visual environment, everything is interactive, showing movement to support the idea that the user is in control. Elements inside it aren't just about the aesthetics, but also about structure and meaning. The interface has colors that convey emotion, typefaces to encourage readability, pictures that are worth a thousand words, and more. 

As it's continuously being developed, we keep in mind seven important factors listed below to always create a harmonious experience for the user to engage in. 
- **Accessibility**  
- **Cross-browser support**
- **Cross-device support**
- **Performance**
- **Security**
- **Navigation**
- **Internationalization** (i18n)

# How to Contribute
Check out the [CONTRIBUTING.md](https://github.com/codyn329/Material/blob/master/CONTRIBUTING.md) file for more information. :)

# How to Install
## Traditional way
1. Download the files into <code>[$IP](https://www.mediawiki.org/wiki/Manual:$IP)/skins/Material</code>
2. In the file named <code>LocalSettings.php</code>, add one of the following lines, depending what version of MediaWiki you're running. 
 * ```include_once "$IP/skins/Material/Material.php";``` (for MW v1.24 or older) 
 * ```wfLoadSkin( 'Material' );``` (for MW v1.25 or newer)
3. You can now verify that the skin is installed by checking Special:Version!

## Composer
This section is a work in progress.

# Custom JS and CSS on the Wiki
This is a list for the pages so you can use custom CSS and/or JS for your site.
* Personal CSS is located at ```Special:Mypage/material.css``` / ```User:<username>/material.css```
* Personal JS is located at ```Special:Mypage/material.js``` / ```User:<username>/material.js```
* Wiki CSS is located at ```MediaWiki:Material.css```
* Wiki JS is located at ```MediaWiki:Material.js```

# Configuring
This section is a work in progress.

# Requirements
This section is a work in progress.

# Web browser support
This section is a work in progress.
