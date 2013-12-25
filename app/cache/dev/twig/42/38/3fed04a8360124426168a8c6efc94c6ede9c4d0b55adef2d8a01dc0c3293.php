<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_42383fed04a8360124426168a8c6efc94c6ede9c4d0b55adef2d8a01dc0c3293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer' => array($this, 'block_footer'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_87886102fc3979b9f041d9a05e4195693c96284618736176e6c0d9562b6f4579"] = $this->env->loadTemplate("MopaBootstrapBundle::flash.html.twig");
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body_tag', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body_start', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "</body>
</html>
";
    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        // line 6
        echo "<html>
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "<head>
    <meta charset=\"UTF-8\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 25
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 28
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 34
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 36
        echo "</head>
";
    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5a72185_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a72185_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5a72185_mopabootstrapbundle_1.css");
            // line 18
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
            // asset "5a72185_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a72185_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5a72185_eyecon-bootstrap-datepicker_2.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "5a72185"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5a72185") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/5a72185.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "    ";
        // line 24
        echo "    ";
    }

    // line 28
    public function block_head_script($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        // line 30
        echo "    ";
    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 34
    public function block_head_bottom($context, array $blocks = array())
    {
        // line 35
        echo "    ";
    }

    // line 39
    public function block_body_tag($context, array $blocks = array())
    {
        // line 40
        echo "<body data-spy=\"scroll\">
";
    }

    // line 43
    public function block_body_start($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 97
        echo "    ";
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        echo $this->env->getExtension('mopa_bootstrap_navbar')->render("frontendNavbar");
        echo "
    ";
    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 57
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('flashes', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('content_row', $context, $blocks);
        // line 89
        echo "        ";
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 90
        echo "        <footer>
            ";
        // line 91
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "        </footer>
    ";
        // line 95
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 96
        echo "    ";
    }

    // line 52
    public function block_container_div_start($context, array $blocks = array())
    {
        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
    }

    public function block_container_class($context, array $blocks = array())
    {
        echo "container";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "        ";
    }

    // line 56
    public function block_content_div_start($context, array $blocks = array())
    {
        echo "<div class=\"content\">";
    }

    // line 57
    public function block_page_header($context, array $blocks = array())
    {
        // line 58
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 59
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
    }

    public function block_headline($context, array $blocks = array())
    {
        echo "Mopa Bootstrap Bundle";
    }

    // line 63
    public function block_flashes($context, array $blocks = array())
    {
        // line 64
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
            // line 65
            echo "            <div class=\"row\">
                <div class=\"span12\">
                ";
            // line 67
            echo $context["__internal_87886102fc3979b9f041d9a05e4195693c96284618736176e6c0d9562b6f4579"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 71
        echo "            ";
    }

    // line 73
    public function block_content_row($context, array $blocks = array())
    {
        // line 74
        echo "            <div class=\"row\">
                ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "                <div class=\"span9\">
                    ";
        // line 77
        $this->displayBlock('content_content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"span3\">
                    ";
        // line 82
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 85
        echo "                </div>
                ";
    }

    // line 77
    public function block_content_content($context, array $blocks = array())
    {
        // line 78
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
    }

    // line 82
    public function block_content_sidebar($context, array $blocks = array())
    {
        // line 83
        echo "                    <h2>Sidebar</h2>
                    ";
    }

    // line 89
    public function block_content_div_end($context, array $blocks = array())
    {
        echo "</div>";
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "            <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2013</p>
            ";
    }

    // line 95
    public function block_container_div_end($context, array $blocks = array())
    {
        echo "</div><!-- /container -->";
    }

    // line 97
    public function block_foot_script($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        // line 102
        echo "     
    ";
        // line 103
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c1a8bcd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_jquery.min_1.js");
            // line 121
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-tooltip_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-affix_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-alert_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-button_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-carousel_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-collapse_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-dropdown_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-modal_9.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-popover_10.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-scrollspy_11.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-tab_12.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_bootstrap-transition_13.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_mopabootstrap-collection_14.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_mopabootstrap-subnav_15.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "c1a8bcd_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd_eyecon-bootstrap-datepicker_16.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "c1a8bcd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c1a8bcd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c1a8bcd.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 121,  404 => 103,  401 => 102,  399 => 98,  396 => 97,  390 => 95,  385 => 92,  382 => 91,  376 => 89,  371 => 83,  363 => 78,  353 => 82,  349 => 80,  347 => 77,  344 => 76,  336 => 87,  334 => 75,  331 => 74,  328 => 73,  324 => 71,  317 => 67,  313 => 65,  310 => 64,  307 => 63,  295 => 59,  292 => 58,  289 => 57,  279 => 54,  276 => 53,  263 => 52,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 57,  231 => 56,  228 => 55,  225 => 53,  222 => 52,  212 => 48,  202 => 51,  188 => 43,  180 => 39,  167 => 32,  161 => 29,  152 => 20,  127 => 14,  104 => 31,  97 => 25,  113 => 43,  81 => 33,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 82,  365 => 111,  362 => 110,  360 => 77,  355 => 85,  341 => 75,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 91,  247 => 78,  241 => 72,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 18,  128 => 49,  107 => 32,  61 => 13,  273 => 96,  269 => 94,  254 => 94,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 51,  217 => 75,  208 => 68,  204 => 97,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 28,  71 => 19,  67 => 43,  63 => 15,  59 => 38,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 9,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 5,  201 => 92,  196 => 47,  183 => 40,  171 => 61,  166 => 71,  163 => 30,  158 => 28,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 36,  105 => 40,  91 => 10,  62 => 39,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 46,  69 => 45,  47 => 2,  40 => 8,  37 => 10,  22 => 1,  246 => 89,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 34,  111 => 33,  108 => 36,  101 => 34,  98 => 33,  96 => 31,  83 => 6,  74 => 125,  66 => 15,  55 => 15,  52 => 5,  50 => 24,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 47,  203 => 78,  199 => 50,  193 => 46,  189 => 71,  187 => 84,  182 => 66,  176 => 35,  173 => 34,  168 => 72,  164 => 59,  162 => 57,  154 => 24,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 13,  122 => 12,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 12,  92 => 5,  86 => 44,  82 => 22,  80 => 5,  73 => 19,  64 => 42,  60 => 6,  57 => 9,  54 => 8,  51 => 14,  48 => 13,  45 => 1,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
