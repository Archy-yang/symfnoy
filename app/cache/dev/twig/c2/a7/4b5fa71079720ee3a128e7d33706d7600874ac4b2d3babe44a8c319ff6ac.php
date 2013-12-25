<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_c2a74b5fa71079720ee3a128e7d33706d7600874ac4b2d3babe44a8c319ff6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 32
        echo "
";
    }

    // line 1
    public function getflash($_type = null, $_message = null, $_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "message" => $_message,
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo " alert-block\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), false)) : (false))) {
                // line 4
                echo "        <a class=\"close\" data-dismiss=\"alert\" href=\"#\">×</a>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadvanced_flash($_type = null, $_heading = null, $_message = null, $_close_tag = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $_type,
            "heading" => $_heading,
            "message" => $_message,
            "close_tag" => $_close_tag,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("")), "html", null, true);
            echo " alert-block fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), false)) : (false))) {
                // line 17
                echo "        ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")) == "a")) {
                    echo "href=\"#\"";
                }
                echo ">×</";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : $this->getContext($context, "close_tag")), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter((isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : $this->getContext($context, "heading")), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsession_flash($_close = null, $_use_raw = null, $_class = null, $_domain = null)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $_close,
            "use_raw" => $_use_raw,
            "class" => $_class,
            "domain" => $_domain,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["flash_messages"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "peekAll")) > 0)) {
                // line 37
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all"));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 38
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 39
                        echo "                ";
                        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "fos_user_success")) {
                            // line 40
                            echo "                    ";
                            $context["type"] = "success";
                            // line 41
                            echo "                    ";
                            $context["domain"] = "FOSUserBundle";
                            // line 42
                            echo "                ";
                        }
                        // line 43
                        echo "                ";
                        echo $context["flash_messages"]->getflash((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), (isset($context["close"]) ? $context["close"] : $this->getContext($context, "close")), (isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain")));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 43,  207 => 42,  198 => 39,  148 => 28,  118 => 20,  100 => 15,  65 => 9,  506 => 187,  391 => 165,  388 => 163,  373 => 149,  370 => 148,  367 => 147,  358 => 138,  356 => 136,  346 => 132,  343 => 131,  333 => 127,  329 => 135,  326 => 134,  321 => 130,  318 => 127,  315 => 126,  303 => 118,  284 => 112,  281 => 111,  277 => 109,  274 => 108,  260 => 106,  255 => 102,  237 => 44,  216 => 21,  211 => 119,  206 => 110,  200 => 94,  197 => 90,  194 => 88,  186 => 36,  174 => 81,  165 => 78,  153 => 74,  150 => 73,  129 => 65,  126 => 63,  77 => 38,  70 => 36,  53 => 15,  408 => 121,  404 => 103,  401 => 102,  399 => 98,  396 => 185,  390 => 95,  385 => 158,  382 => 91,  376 => 89,  371 => 83,  363 => 78,  353 => 135,  349 => 80,  347 => 77,  344 => 76,  336 => 128,  334 => 75,  331 => 74,  328 => 73,  324 => 131,  317 => 67,  313 => 65,  310 => 123,  307 => 122,  295 => 59,  292 => 58,  289 => 116,  279 => 54,  276 => 53,  263 => 52,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 25,  231 => 56,  228 => 55,  225 => 46,  222 => 52,  212 => 48,  202 => 51,  188 => 37,  180 => 34,  167 => 32,  161 => 29,  152 => 20,  127 => 14,  104 => 31,  97 => 25,  113 => 43,  81 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 82,  365 => 145,  362 => 110,  360 => 77,  355 => 85,  341 => 75,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 72,  229 => 73,  220 => 70,  214 => 69,  177 => 82,  169 => 60,  140 => 55,  132 => 66,  128 => 49,  107 => 16,  61 => 13,  273 => 96,  269 => 94,  254 => 94,  243 => 96,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 23,  221 => 77,  219 => 45,  217 => 75,  208 => 68,  204 => 41,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 52,  71 => 11,  67 => 43,  63 => 26,  59 => 7,  38 => 3,  94 => 28,  89 => 20,  85 => 41,  75 => 17,  68 => 14,  56 => 6,  87 => 25,  21 => 2,  26 => 6,  93 => 44,  88 => 9,  78 => 21,  46 => 7,  27 => 1,  44 => 12,  31 => 5,  28 => 4,  201 => 40,  196 => 47,  183 => 35,  171 => 80,  166 => 33,  163 => 30,  158 => 28,  156 => 75,  151 => 63,  142 => 26,  138 => 68,  136 => 56,  121 => 46,  117 => 60,  105 => 55,  91 => 10,  62 => 39,  49 => 19,  24 => 4,  25 => 3,  19 => 13,  79 => 18,  72 => 46,  69 => 45,  47 => 2,  40 => 8,  37 => 10,  22 => 32,  246 => 97,  157 => 56,  145 => 46,  139 => 25,  131 => 52,  123 => 47,  120 => 61,  115 => 19,  111 => 33,  108 => 56,  101 => 34,  98 => 33,  96 => 31,  83 => 14,  74 => 125,  66 => 32,  55 => 15,  52 => 4,  50 => 3,  43 => 2,  41 => 4,  35 => 5,  32 => 5,  29 => 4,  209 => 111,  203 => 96,  199 => 50,  193 => 38,  189 => 71,  187 => 84,  182 => 66,  176 => 35,  173 => 34,  168 => 79,  164 => 59,  162 => 77,  154 => 30,  149 => 51,  147 => 71,  144 => 49,  141 => 69,  133 => 23,  130 => 22,  125 => 13,  122 => 12,  116 => 41,  112 => 18,  109 => 17,  106 => 36,  103 => 32,  99 => 48,  95 => 12,  92 => 5,  86 => 44,  82 => 22,  80 => 5,  73 => 37,  64 => 42,  60 => 21,  57 => 9,  54 => 8,  51 => 14,  48 => 13,  45 => 1,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
