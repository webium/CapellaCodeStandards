<article id="jsFiles">
    <h3>plugins.js and script.js</h3>
    
    <p>Starting with H5BP we're presented with two files, plugins.js and script.js. This section outlines basic usage of these two files.</p>
    
    <h4>plugins.js</h4>
    
    <p>Plugins.js is meant to hold all of a sites plugin code. Instead of linking to many different files, we can improve performance by including plugin code directly in this one file. There can and should be exceptions to this usage. An extremely large plugin only used on one rarely visited page, for example, might be better off in a separate download, only accessed on the target page. Most of the time, however, it's safe to just paste in minified versions of all your plugins here for easy access. </p>
    
    <p>Here's what an example file might looks like, including a small table of contents. This can serve as a handy guide for what plugins are in use, including URLs for documentation, rationale for use and the like.</p>
    
    <textarea class="brush:js">
    /* PLUGIN DIRECTORY
    What you can find in this file [listed in order they appear]
    
           1.) Animate Background Position - http://plugins.jquery.com/project/backgroundPosition-Effect
           2.) jQuery Easing Plugin - http://gsgd.co.uk/sandbox/jquery/easing/
           3.) jQuery Ajax Form plugin - http://jquery.malsup.com/form/#download            
           4.) jQuery validation plugin (form validation) - http://docs.jquery.com/Plugins/Validation
               -password strength
           5.) Styled Selects (lightweight) - http://code.google.com/p/lnet/wiki/jQueryStyledSelectOverview
    */
    
    /**
    * 1.) Animate Background Position - http://plugins.jquery.com/project/backgroundPosition-Effect
    * @author Alexander Farkas
    * v. 1.21
    */
    (function($) {
       if(!document.defaultView || !document.defaultView.getComputedStyle){ // IE6-IE8
       //SNIPPED
       };
    })(jQuery);
    
    
    /**
    * 2.) jQuery Easing Plugin (we're not using jQuery UI as of yet) - http://gsgd.co.uk/sandbox/jquery/easing/
    */
    
    // t: current time, b: begInnIng value, c: change In value, d: duration
    jQuery.easing['jswing'] = jQuery.easing['swing'];
    
    jQuery.extend( jQuery.easing,
    {
       //SNIPPED
       
    });
    ;(function($) {
       $.fn.ajaxSubmit = function(options) {
       //SNIPPED
       }
    })(jQuery);
    
    /*
    * jQuery Styled Select Boxes
    * version: 1.1 (2009/03/24)
    * @requires jQuery v1.2.6 or later
    *
    * Examples and documentation at: http://code.google.com/p/lnet/wiki/jQueryStyledSelectOverview
    *
    * Copyright (c) 2008 Lasar Liepins, liepins.org, liepins@gmail.com
    *
    * Permission is hereby granted, free of charge, to any person obtaining a copy
    * of this software and associated documentation files (the "Software"), to deal
    * in the Software without restriction, including without limitation the rights
    * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    * copies of the Software, and to permit persons to whom the Software is
    * furnished to do so, subject to the following conditions:
    *
    * The above copyright notice and this permission notice shall be included in
    * all copies or substantial portions of the Software.
    *
    * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    * THE SOFTWARE.
    *
    */
    
    jQuery.fn.styledSelect = function(settings) {
    //SNIPPED
           return this;
    };
    </textarea>


    <h4>Script.js</h4>

    <p>Script.js is meant to hold your site or application code. Again, this isn't always the best solution as larger teams and or larger, more feature rich projects can really benefit from breaking out application code into module or feature specific files. For smaller sites, simpler applications, and initial prototyping, however, dropping your work into scripts.js makes sense.</p>
    
    <p>A simplified example, using the <a href='http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/' target="_blank">Markup-based unobtrusive comprehensive DOM-ready execution</a> pattern, might look something like the following:</p>

    <textarea class="brush:js">     
    /* Name: Demo
    Author: Demo King */
    /*demo namespace*/
    demo = {
     common : {
       init     : function(){
           //initialize
       },
       finalize : function(){
           //finalize
       },
       config : {
           prop : "my value",
           constant : "42"
       }
     },
     mapping : {
       init     : function(){
           //create a map
       },
       geolocate    : function(){
           //geolocation is cool
       },
       geocode : function(){
           //look up an address or landmark
       },
       drawPolylines : function(){
           //draw some lines on a map
       },
       placeMarker : function(){
           //place markers on the map
       }
     }
    }
    </textarea>
</article>
