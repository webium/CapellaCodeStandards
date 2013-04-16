//// Table of Contents Written by Kurt Menne
$('section').tableOContents();
//$('.section_title').tocSubs();
$('.section_title').zeroPageLoad();
//// Table of Contents Written by Kurt Menne

//// Font Resizer Written by Kurt Menne
$(window).bind('resize', function(event){ $(window).zeroFontResize(); });
//// Font Resizer Written by Kurt Menne

//// Mobile Menu Written by Kurt Menne
$('#menuTrigger').zeroAppMenu();
//// Mobile Menu Written by Kurt Menne

//// Syntax Highlighter
SyntaxHighlighter.config.tagName = 'textarea';
SyntaxHighlighter.defaults['wrap-lines'] = false;
SyntaxHighlighter.defaults['auto-links'] = false;
SyntaxHighlighter.defaults['toolbar'] = false;
SyntaxHighlighter.defaults['tab-size'] = 4;
SyntaxHighlighter.all();
//// Syntax Highlighter

