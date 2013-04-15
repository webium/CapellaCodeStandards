<article id="jsDelegation">
    <h3>Event Delegation</h3>
    
    <p>When assigning unobtrusive event listeners, it is typically acceptable to assign the event listener directly to the element(s) which will trigger some resulting action. However, occasionally there may be multiple elements which match the criteria for which you are checking, and attaching event listeners to each one might negatively impact performance. In such cases you should use event delegation instead.</p>
    
    <p>jQuery's <a href="http://api.jquery.com/delegate" target="_blank">delegate()</a> is preferred over <a href="http://api.jquery.com/live" target="_blank">live()</a> for performance reasons.</p>
</article>    
