<section id="markup">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        <h1>Markup</h1>
        
        <p>The first component of any web page is the tag-based markup language of <abbr title="HypterText Markup Language">HTML</abbr>. The Hyper Text Markup Language (HTML) has a sordid history but has come into its own in the last few years. After a lengthy experimentation with the XML-based  XHTML variant the industry has accepted that HTML is the future of the web.</p>
        
        <p>Markup defines the structure and outline of a document and offers a structured content. Markup is not intended to define the look and feel of the content on the page beyond rudimentary concepts such as headers, paragraphs, and lists. The presentation attributes of HTML have all been deprecated and style should be contained in <a href="#css">style sheets</a>. (Inline styling is strictly prohibited.)</p>
    </div>

		<!-- HTML5 SECTION -->
    <?php include('elements/markupHTML5.php'); ?>
    
		<!-- DOCTYPE SECTION -->
    <?php include('elements/markupDoctype.php'); ?>

		<!-- ENCODING SECTION -->
    <?php include('elements/markupEncoding.php'); ?>

		<!-- SEMANTICS SECTION -->
    <?php include('elements/markupSemantics.php'); ?>

		<!-- GENERAL SECTION -->
    <?php include('elements/markupGeneral.php'); ?>
    
		<!-- QUOTING SECTION -->
    <?php include('elements/markupQuoting.php'); ?>
    
    
</section>
