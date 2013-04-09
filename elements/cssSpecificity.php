<article id="cssSpecificity">
<h4>Specificity</h4>
    
    <p>Browsers <a href="http://www.w3.org/TR/2009/PR-css3-selectors-20091215/" target="_blank">calculate a selector's specificity</a> to determine which CSS rule should apply. If two selectors apply to the same element, the one with the <strong>higher specificity wins</strong>.</p>
    
    <p>IDs have a higher specificity than attribute selectors do, and class selectors have higher specificity than any number of element selectors. Always try to use IDs to increase the specificity. There are times when we may try to apply a CSS rule to an element and it does not work no matter what we try. This is likely because the specificity of the selector used is lower than another one and the properties of the higher one are taking precedence over those you want to apply. This is more common in working with larger more complex stylesheets. It isn't a big issue with smaller projects usually.</p>
    
    <h5>Calculating specificity</h5>
    
    <p>When working with a large and complex stylesheet it helps to know how to calculate the value of a selector's specificity, to save you time and to make your selectors more efficient.</p>
    
    <p>Specificity is calculated by counting various components of your CSS and expressing them in a form (a,b,c,d).</p>
    
    <ul>
        <li><i class="icon-minus"></i>Element, Pseudo Element: d = 1 – (0,0,0,1)</li>
        <li><i class="icon-minus"></i>Class, Pseudo class, Attribute: c = 1 – (0,0,1,0)</li>
        <li><i class="icon-minus"></i>Id: b = 1 – (0,1,0,0)</li>
        <li><i class="icon-minus"></i>Inline Style: a = 1 – (1,0,0,0)</li>
    </ul>
    
    <p>However, it may be better to use a specificity calculator.</p>
    
    <ul>
        <li><i class="icon-minus"></i><a href="">Specificity Calculator</a></li>
        <li><i class="icon-minus"></i><a href="http://www.smashingmagazine.com/2007/07/27/css-specificity-things-you-should-know/" target="_blank">Some things you should know about specificity</a></li>
        <li><i class="icon-minus"></i><a href="http://www.brunildo.org/test/IEASpec.html#a" target="_blank">IE Specificity bugs</a></li>
    </ul>
    
    <p>Using <code>!important</code> overrides all specificity no matter how high it is. We like to avoid using it for this reason. Most of the time it is not necessary. Even if you need to override a selector in a stylesheet you don't have access to, there are usually ways to override it without using !important. Avoid using it if possible.</p>
</article>