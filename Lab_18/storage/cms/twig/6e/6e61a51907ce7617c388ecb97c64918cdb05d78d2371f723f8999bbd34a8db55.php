<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OSPanel\domains\project.loc/themes/test/layouts/index.htm */
class __TwigTemplate_d7399c8eff4c5a19a073a7b4a1d79c524a7eb128cb4addccb1070912717f383f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- <link rel=\"stylesheet\" href=\"main.css\"> -->
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://getbootstrap.com/docs/5.3/assets/css/docs.css\" rel=\"stylesheet\">
  <!--link href=\"Reviews.html\">-->
  <title>Lab_4</title>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

</head>
<body>

    ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js\" integrity=\"sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    ";
        // line 18
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 19
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\project.loc/themes/test/layouts/index.htm";
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  61 => 18,  58 => 17,  56 => 16,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <!-- <link rel=\"stylesheet\" href=\"main.css\"> -->
  <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
  <link href=\"https://getbootstrap.com/docs/5.3/assets/css/docs.css\" rel=\"stylesheet\">
  <!--link href=\"Reviews.html\">-->
  <title>Lab_4</title>
  <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

</head>
<body>

    {% page %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js\" integrity=\"sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    {% framework extras %}
</body>
</html>", "C:\\OSPanel\\domains\\project.loc/themes/test/layouts/index.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 16, "framework" => 18);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page', 'framework'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
