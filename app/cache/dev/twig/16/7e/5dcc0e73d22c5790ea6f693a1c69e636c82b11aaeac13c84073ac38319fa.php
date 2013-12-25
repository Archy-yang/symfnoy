<?php

/* MopaBootstrapBundle::base_initializr.html.twig */
class __TwigTemplate_167e5dcc0e73d22c5790ea6f693a1c69e636c82b11aaeac13c84073ac38319fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MopaBootstrapBundle::base.html.twig");

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'dns_prefetch' => array($this, 'block_dns_prefetch'),
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_html_tag($context, array $blocks = array())
    {
        // line 4
        echo "<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->

";
    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "<head>
    ";
        // line 17
        echo "    <meta charset=\"utf-8\" />

    ";
        // line 21
        echo "    ";
        $this->displayBlock('dns_prefetch', $context, $blocks);
        // line 26
        echo "
    ";
        // line 32
        echo "    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" /><![endif]-->

    ";
        // line 36
        echo "    <meta name=\"viewport\" content=\"width=device-width\" />
    <meta name=\"description\" content=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array(), "array"), "html", null, true);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "keywords", array(), "array"), "html", null, true);
        echo "\" />
    <meta name=\"author\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_name", array(), "array"), "html", null, true);
        echo "\" />
    ";
        // line 41
        echo "    <link rel=\"author\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_url", array(), "array"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_name", array(), "array"), "html", null, true);
        echo "\" />

    ";
        // line 44
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 48
        echo "
    ";
        // line 52
        echo "
    ";
        // line 55
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"apple-touch-icon\" href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
        echo "\" />

    ";
        // line 60
        echo "    ";
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array", true, true)) {
            // line 61
            echo "    <link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "sitemap", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 63
        echo "
    ";
        // line 65
        echo "    ";
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array", true, true)) {
            // line 66
            echo "    <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Atom\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "feed_atom", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 68
        echo "    ";
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array", true, true)) {
            // line 69
            echo "    <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "feed_rss", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 71
        echo "
    ";
        // line 73
        echo "    ";
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "noindex", array(), "array")) {
            // line 74
            echo "        ";
            $context["meta_robots"] = "noindex,";
            // line 75
            echo "    ";
        } else {
            // line 76
            echo "        ";
            $context["meta_robots"] = "";
            // line 77
            echo "    ";
        }
        // line 78
        echo "    ";
        if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "nofollow", array(), "array")) {
            // line 79
            echo "        ";
            $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")) . "nofollow");
            // line 80
            echo "    ";
        } else {
            // line 81
            echo "        ";
            $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")) . "follow");
            // line 82
            echo "    ";
        }
        // line 83
        echo "    <meta name=\"robots\" content=\"";
        echo twig_escape_filter($this->env, (isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")), "html", null, true);
        echo "\" />

    ";
        // line 85
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array", true, true)) {
            // line 86
            echo "    <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "wt", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 88
        echo "
    ";
        // line 90
        echo "
    ";
        // line 94
        echo "
    ";
        // line 96
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 119
        echo "</head>
";
    }

    // line 21
    public function block_dns_prefetch($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dns_prefetch"]) ? $context["dns_prefetch"] : $this->getContext($context, "dns_prefetch")));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 23
            echo "        <link rel=\"dns-prefetch\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
    }

    // line 44
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array(), "array"), "html", null, true);
    }

    // line 96
    public function block_head_style($context, array $blocks = array())
    {
        // line 97
        echo "        ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "

        ";
        // line 101
        echo "        ";
        if ((isset($context["diagnostic_mode"]) ? $context["diagnostic_mode"] : $this->getContext($context, "diagnostic_mode"))) {
            // line 102
            echo "        ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "d75f95d_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d75f95d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/screen_diagnostic_diagnostic_1.css");
                // line 106
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
            } else {
                // asset "d75f95d"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d75f95d") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/screen_diagnostic.css");
                echo "            <link href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
            }
            unset($context["asset_url"]);
            // line 108
            echo "        ";
        }
        // line 109
        echo "    ";
    }

    // line 111
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 112
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ba30769_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba30769_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/head_compiled_modernizr-2.5.3-respond-1.1.0.min_1.js");
            // line 116
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "ba30769"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ba30769") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/head_compiled.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 118
        echo "    ";
    }

    // line 122
    public function block_body_start($context, array $blocks = array())
    {
        // line 123
        echo "<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
    }

    // line 126
    public function block_body($context, array $blocks = array())
    {
        // line 127
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 130
        echo "
    ";
        // line 131
        $this->displayBlock('container', $context, $blocks);
        // line 134
        echo "
    ";
        // line 135
        $this->displayBlock('foot_script', $context, $blocks);
    }

    // line 127
    public function block_navbar($context, array $blocks = array())
    {
        // line 128
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
    }

    // line 131
    public function block_container($context, array $blocks = array())
    {
        // line 132
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
    }

    // line 135
    public function block_foot_script($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        // line 138
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script>
        window.jQuery || document.write('<script src=\"../js/libs/jquery-1.7.2.min.js\"><\\/script>')
    </script>

    ";
        // line 145
        echo "    ";
        // line 147
        echo "    ";
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array", true, true)) {
            // line 148
            echo "    <script>
        var _gaq = [['_setAccount', '";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "analytics", array(), "array"), "html", null, true);
            echo "'], ['_trackPageview']];
        (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.async = g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
        }(document, 'script'));
    </script>
    ";
        }
        // line 158
        echo "
    ";
        // line 163
        echo "
    ";
        // line 165
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0222968_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-tooltip_1.js");
            // line 185
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-affix_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-alert_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-button_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-carousel_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-collapse_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-dropdown_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-modal_8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-popover_9.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-scrollspy_10.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-tab_11.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_bootstrap-transition_12.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_mopabootstrap-collection_13.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_13") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_mopabootstrap-subnav_14.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_14") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_html5bp_plugins_15.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_html5bp_script_16.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "0222968_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968_16") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled_eyecon-bootstrap-datepicker_17.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "0222968"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0222968") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/foot_compiled.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 187
        echo "\t";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_initializr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  506 => 187,  391 => 165,  388 => 163,  373 => 149,  370 => 148,  367 => 147,  358 => 138,  356 => 136,  346 => 132,  343 => 131,  333 => 127,  329 => 135,  326 => 134,  321 => 130,  318 => 127,  315 => 126,  303 => 118,  284 => 112,  281 => 111,  277 => 109,  274 => 108,  260 => 106,  255 => 102,  237 => 44,  216 => 21,  211 => 119,  206 => 110,  200 => 94,  197 => 90,  194 => 88,  186 => 85,  174 => 81,  165 => 78,  153 => 74,  150 => 73,  129 => 65,  126 => 63,  77 => 38,  70 => 36,  53 => 15,  408 => 121,  404 => 103,  401 => 102,  399 => 98,  396 => 185,  390 => 95,  385 => 158,  382 => 91,  376 => 89,  371 => 83,  363 => 78,  353 => 135,  349 => 80,  347 => 77,  344 => 76,  336 => 128,  334 => 75,  331 => 74,  328 => 73,  324 => 131,  317 => 67,  313 => 65,  310 => 123,  307 => 122,  295 => 59,  292 => 58,  289 => 116,  279 => 54,  276 => 53,  263 => 52,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 25,  231 => 56,  228 => 55,  225 => 53,  222 => 52,  212 => 48,  202 => 51,  188 => 86,  180 => 83,  167 => 32,  161 => 29,  152 => 20,  127 => 14,  104 => 31,  97 => 25,  113 => 43,  81 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 82,  365 => 145,  362 => 110,  360 => 77,  355 => 85,  341 => 75,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 72,  229 => 73,  220 => 70,  214 => 69,  177 => 82,  169 => 60,  140 => 55,  132 => 66,  128 => 49,  107 => 32,  61 => 13,  273 => 96,  269 => 94,  254 => 94,  243 => 96,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 23,  221 => 77,  219 => 22,  217 => 75,  208 => 68,  204 => 97,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 52,  71 => 19,  67 => 43,  63 => 26,  59 => 38,  38 => 3,  94 => 28,  89 => 20,  85 => 41,  75 => 17,  68 => 14,  56 => 17,  87 => 25,  21 => 2,  26 => 6,  93 => 44,  88 => 9,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 5,  28 => 4,  201 => 92,  196 => 47,  183 => 40,  171 => 80,  166 => 71,  163 => 30,  158 => 28,  156 => 75,  151 => 63,  142 => 59,  138 => 68,  136 => 56,  121 => 46,  117 => 60,  105 => 55,  91 => 10,  62 => 39,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 46,  69 => 45,  47 => 2,  40 => 8,  37 => 10,  22 => 1,  246 => 97,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 61,  115 => 34,  111 => 33,  108 => 56,  101 => 34,  98 => 33,  96 => 31,  83 => 6,  74 => 125,  66 => 32,  55 => 15,  52 => 5,  50 => 14,  43 => 8,  41 => 4,  35 => 5,  32 => 4,  29 => 3,  209 => 111,  203 => 96,  199 => 50,  193 => 46,  189 => 71,  187 => 84,  182 => 66,  176 => 35,  173 => 34,  168 => 79,  164 => 59,  162 => 77,  154 => 24,  149 => 51,  147 => 71,  144 => 49,  141 => 69,  133 => 55,  130 => 41,  125 => 13,  122 => 12,  116 => 41,  112 => 57,  109 => 34,  106 => 36,  103 => 32,  99 => 48,  95 => 12,  92 => 5,  86 => 44,  82 => 22,  80 => 5,  73 => 37,  64 => 42,  60 => 21,  57 => 9,  54 => 8,  51 => 14,  48 => 13,  45 => 1,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
