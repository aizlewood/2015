<?php

// $kirby = kirby();
// $kirby->urls->index = 'http://ja.clft.io';

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');


/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('markdown.extra', true);

/* 

---------------------------------------
Content File Extension
---------------------------------------

Change the default file extension for your
content files here if you'd rather use something
else than txt. For example md or mdown. 

*/

c::set('content.file.extension', 'md');

/* 

---------------------------------------
Markdown Setup 
---------------------------------------

You can globally switch Markdown parsing 
on or off here. 

To disable automatic line breaks in markdown
set markdown.breaks to false. 

You can also switch between regular markdown
or markdown extra: http://michelf.com/projects/php-markdown/extra/

*/

c::set('markdown', true);
c::set('markdown.breaks', true);


/* 

---------------------------------------
Relative URLs
---------------------------------------


*/
c::set('rewrite', true);
c::set('timezone', 'GMT');
c::set('debug', true);