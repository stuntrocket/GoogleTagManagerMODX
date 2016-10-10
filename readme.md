#GoogleTagManager Extra for MODx Revolution

##Easy Install Google Tag Manager Tracking Code
GoogleTagManagerMODX passes control of Google Analytic's tagging operations to non technical MODX website moderators, SEOs and marketers, making it easy to experiment with a range of tags, events, error tracking and more.

##Installation
GoogleTagManagerMODX can be installed via your MODX Package Manager - Search for "GoogleTagManagerMODX" and click "Download" then "Install".

##Usage
Once GoogleTagManagerMODX is installed there are a few quick, easy things to do.

###Stage 1 - Settings

   ```
	1. Create a [GoogleTagManager Account](https://tagmanager.google.com/?hl=en#/home).
	2. Note down your **GTM-ID Container ID** (GTM-XXXXXX).
	3. Link your Google Tag Manager account to your Google Analytics account [Instructions](https://support.google.com/analytics/answer/6163791?hl=en).
	4. Go to your System Settings in MODX.
	5. Select "GoogleTagManager" namespace and look or search for setting google.gtmid.
	6. Save google.gtmid setting with your GTM-ID Container ID (GTM-XXXXXX).
	```

###Stage 2 - Snippet Calls
Now we need to add two Snippet calls to every template that we want the GoogleTagManager tags to feature. The reason there are two snippets is because Google Tag Manager offers a "no script" IFrame fallback - its optional if you want to use this second fallback tag but it is recommended.

	```
	1. Open/Edit your chosen template(s).
	2. Add [[GoogleTagManagerHead]] inside the head tag.
	3. Add [[GoogleTagManagerBody]] inside the body tag (No script fallback).
	```

There is much that can be done with Google Tag Manager - be sure to check out the documentation to get the most out of it.


**Author:** StuntRocket hello@stuntrocket.co [StuntRocket](https://stuntrocket.co)
**MODX Extra** [MODX Extra](https://modx.com/extras/package/googletagmanager)
**Project Home** [GitHub Pages](https://stuntrocket.github.io/GoogleTagManagerMODX/)
**Bug Report** [GitHub](https://github.com/stuntrocket/GoogleTagManagerMODX)




