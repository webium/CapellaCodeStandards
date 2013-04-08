//// Table of Contents Written by Kurt Menne
$('section').tableOContents();
$('.section_title').tocSubs();
//// Table of Contents Written by Kurt Menne

//// Font Resizer Written by Kurt Menne
$(window).bind('resize', function(event){ $(window).zeroFontResize(); });

//// Font Resizer Written by Kurt Menne

//// Syntax Highlighter
SyntaxHighlighter.config.tagName = 'textarea';
SyntaxHighlighter.defaults['wrap-lines'] = false;
SyntaxHighlighter.defaults['auto-links'] = false;
SyntaxHighlighter.defaults['toolbar'] = false;
SyntaxHighlighter.defaults['tab-size'] = 4;
SyntaxHighlighter.all();
//// Syntax Highlighter

