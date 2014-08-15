<?php
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
//$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
$doc->addStylesheet($this->baseurl.'/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addScript($this->baseurl.'/templates/' . $this->template . '/js/bootstrap.min.js', 'text/javascript');

$sitename = $this->params->get('sitename');
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
    <head>
        <jdoc:include type="head"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-22946638-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>

    <body>
        <!-- main container -->
        <div class='container'>
            <!-- header -->
            <div class="row">
                <div class='col-sm-10'>
                    <jdoc:include type="modules" name="top" style="xhtml"/>
                </div>
                <div class='col-sm-2'>
                    <jdoc:include type="modules" name="language" style="xhtml"/>
                </div>
            </div>
            <div class='row'>
                <div class='col-sm-12'id="top">
                    <div id="logo">
                        <h1><a href="<?php echo $siteurl; ?>" title=""> <?php echo $sitename;?> </a></h1>
                        <h2><?php echo $this->params->get('tagline'); ?></h2>
                    </div>
                    <jdoc:include type="modules" name="header" style="xhtml"/>
                </div>
            </div>

            <div class='row'>
                <div class='col-sm-12'>
                    <jdoc:include type="modules" name="breadcrumb" style="xhtml"/>
                </div>
            </div>

            <!-- mid container - includes main content area and right sidebar -->
            <div class='row'>
                <!-- main content area -->
                <div class='col-xs-9'>
                    <jdoc:include type="modules" name="position-0" style="xhtml"/>
                    <jdoc:include type="message"/>
                    <jdoc:include type="component"/>
                    <jdoc:include type="modules" name="position-1" style="none"/>
                </div>

                <!-- right sidebar -->
                <div class='col-xs-3'>
                    <jdoc:include type="modules" name="right" style="well"/>
                </div>
            </div>
            <!-- footer -->
            <div class='row' id="footer">
                <div class='col-sm-12'>
                    <jdoc:include type="modules" name="footer" style="xhtml"/>
                </div>
            </div>
        </div>
    </body>
</html>
