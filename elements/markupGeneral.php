<article id="markupGeneral">
    <h2>General Markup Guidelines</h2>

    <p>The following are general guidelines for structuring your HTML markup. Authors are reminded to always use markup which represents the semantics of the content in the document being created.</p>
    
    <ul>
        <li><i class="icon-minus"></i>Use actual P elements for paragraph delimiters as opposed to multiple BR tags.</li>
        <li><i class="icon-minus"></i>Make use of DL (definition lists) and BLOCKQUOTE, when appropriate.</li>
        <li><i class="icon-minus"></i>Items in list form should always be housed in a UL, OL, or DL, never a set of DIVs or Ps.</li>
        <li><i class="icon-minus"></i>Use <code>label</code> fields to label each form field, the <code>for</code> attribute should associate itself with the input field, so users can click the labels. 
            <code>cursor:pointer;</code> on the label is wise, as well. <sup><a href="http://www.accessifyforum.com/viewtopic.php?t=1926#14178" target="_blank">note 1</a> 
            <a href="http://www.accessifyforum.com/viewtopic.php?t=6738" target="_blank">note 2</a></sup>
        </li>
        <li><i class="icon-minus"></i>Do not use the size attribute on your input fields. The size attribute is relative to the font-size of the text inside the input. Instead use css width.</li>
        <li><i class="icon-minus"></i>Place an html comment on some closing div tags to indicate what element you're closing. It will help when there is lots of nesting and indentation.</li>
        <li><i class="icon-minus"></i>Tables shouldn't be used for page layout.</li>
        <li><i class="icon-minus"></i>Use <a href="http://en.wikipedia.org/wiki/Microformat" target="_blank">microformats</a> and/or Microdata where appropriate, specifically hCard and adr.</li>
        <li><i class="icon-minus"></i>Make use of THEAD, TBODY, and TH tags (and Scope attribute) when appropriate.

            <figure class="preCode">Table markup with proper syntax (THEAD,TBODY,TH [scope])</figure>
            <textarea class="brush:html">
                <table summary="This is a chart of year-end returns for 2005.">
                    <thead>
                        <tr>
                            <th scope="col">Table header 1</th>
                            <th scope="col">Table header 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Table data 1</td>
                            <td>Table data 2</td>
                        </tr>
                    </tbody>
                </table>
            </textarea>
        </li>
    
        <li><i class="icon-minus"></i>Always use title-case for headers and titles. Do not use all caps or all lowercase titles in markup, instead apply the CSS property <code>text-transform:uppercase/lowercase</code>.</li>
    </ul>   
</article>
