<section id="css">

    <div class="intro has-icon">
        <img class="icon" src="img/common/icon-curly.png" alt="{}" />
        <h1>CSS</h1>
        
        <p>The second component of a web page is the presentation information contained in the Cascading Style Sheet (<abbr title="Cascading Style Sheets">CSS</abbr>.) Web browsers successful implementation of CSS has given a whole generation of web authors site-wide control over the look and feel of their web sites.</p>
        
        <p>Just as the information on a web page is semantically described in the <a href="#markup">HTML Markup</a>, CSS describes all presentation aspects of the page via a description of its visual properties. CSS is powerful in that these properties are mixed and matched via identifiers to control the page's layout and visual characteristics through the layering of style rules (the "cascade").</p>
        
    </div>

		<!-- GENERAL SECTION -->
    <?php include('./elements/cssGeneral.php'); ?>
    
		<!-- BOX MODEL SECTION -->
    <?php include('./elements/cssBoxModel.php'); ?>

		<!-- NAMING CONVENTIONS SECTION -->
    <?php include('./elements/cssNaming.php'); ?>

		<!-- SELECTORS SECTION -->
    <?php include('./elements/cssSelectors.php'); ?>

		<!-- SPECIFICITY SECTION -->
    <?php include('./elements/cssSpecificity.php'); ?>
    
		<!-- MEASUREMENTS SECTION -->
    <?php include('./elements/cssMeasurements.php'); ?>

		<!-- IE BUGS SECTION -->
    <?php include('./elements/cssIEBugs.php'); ?>
    
		<!-- SHORTHAND SECTION -->
    <?php include('./elements/cssShorthand.php'); ?>

		<!-- IMAGES SECTION -->
    <?php include('./elements/cssImages.php'); ?>

		<!-- COLOR MANGEMENT SECTION -->
    <?php //include('./elements/cssColorManagement.php'); ?>
    
		<!-- TYPOLGRAPHY SECTION -->
    <?php include('./elements/cssTypography.php'); ?>
    
		<!-- CSS3 SECTION -->
    <?php //include('./elements/cssCSS3.php'); ?>
    
    
    
</section>
