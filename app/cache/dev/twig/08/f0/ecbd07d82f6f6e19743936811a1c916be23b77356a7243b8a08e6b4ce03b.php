<?php

/* MopaBootstrapBundle:Form:buttons_formflow.html.twig */
class __TwigTemplate_08f0ecbd07d82f6f6e19743936811a1c916be23b77356a7243b8a08e6b4ce03b extends Twig_Template
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
        // line 1
        $context["renderBackButton"] = twig_in_filter($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method"), range(($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFirstStepNumber", array(), "method") + 1), $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getLastStepNumber", array(), "method")));
        // line 2
        echo "<div class=\"form-actions form-flow-actions\">
    ";
        // line 8
        echo "    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 9
        if (($this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getCurrentStepNumber", array(), "method") < $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getStepCount", array(), "method"))) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.next", array(), "CraueFormFlowBundle"), "html", null, true);
        } else {
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.finish", array(), "CraueFormFlowBundle"), "html", null, true);
        }
        // line 14
        echo "</button>

    <button type=\"submit\" name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"back\" class=\"btn btn-primary";
        if ((!(isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton")))) {
            echo " disabled";
        }
        echo "\" formnovalidate=\"formnovalidate\"";
        if ((!(isset($context["renderBackButton"]) ? $context["renderBackButton"] : $this->getContext($context, "renderBackButton")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.back", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 18
        echo "</button>

    <button type=\"submit\" name=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flow"]) ? $context["flow"] : $this->getContext($context, "flow")), "getFormTransitionKey", array(), "method"), "html", null, true);
        echo "\" value=\"reset\" class=\"btn btn-primary\" formnovalidate=\"formnovalidate\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("button.reset", array(), "CraueFormFlowBundle"), "html", null, true);
        // line 22
        echo "</button>
</div>";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Form:buttons_formflow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  34 => 14,  210 => 43,  207 => 42,  198 => 39,  148 => 28,  118 => 20,  100 => 15,  65 => 9,  506 => 187,  391 => 165,  388 => 163,  373 => 149,  370 => 148,  367 => 147,  358 => 138,  356 => 136,  346 => 132,  343 => 131,  333 => 127,  329 => 135,  326 => 134,  321 => 130,  318 => 127,  315 => 126,  303 => 118,  284 => 112,  281 => 111,  277 => 109,  274 => 108,  260 => 106,  255 => 102,  237 => 44,  216 => 21,  211 => 119,  206 => 110,  200 => 94,  197 => 90,  194 => 88,  186 => 36,  174 => 81,  165 => 78,  153 => 74,  150 => 73,  129 => 65,  126 => 63,  77 => 38,  70 => 36,  53 => 15,  408 => 121,  404 => 103,  401 => 102,  399 => 98,  396 => 185,  390 => 95,  385 => 158,  382 => 91,  376 => 89,  371 => 83,  363 => 78,  353 => 135,  349 => 80,  347 => 77,  344 => 76,  336 => 128,  334 => 75,  331 => 74,  328 => 73,  324 => 131,  317 => 67,  313 => 65,  310 => 123,  307 => 122,  295 => 59,  292 => 58,  289 => 116,  279 => 54,  276 => 53,  263 => 52,  259 => 96,  257 => 95,  249 => 90,  244 => 73,  239 => 63,  236 => 62,  233 => 25,  231 => 56,  228 => 55,  225 => 46,  222 => 52,  212 => 48,  202 => 51,  188 => 37,  180 => 34,  167 => 32,  161 => 29,  152 => 20,  127 => 14,  104 => 31,  97 => 25,  113 => 43,  81 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 82,  365 => 145,  362 => 110,  360 => 77,  355 => 85,  341 => 75,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 56,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 101,  247 => 78,  241 => 72,  229 => 73,  220 => 70,  214 => 69,  177 => 82,  169 => 60,  140 => 55,  132 => 66,  128 => 49,  107 => 16,  61 => 13,  273 => 96,  269 => 94,  254 => 94,  243 => 96,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 23,  221 => 77,  219 => 45,  217 => 75,  208 => 68,  204 => 41,  179 => 69,  159 => 76,  143 => 56,  135 => 53,  119 => 42,  102 => 52,  71 => 11,  67 => 43,  63 => 26,  59 => 7,  38 => 16,  94 => 28,  89 => 20,  85 => 41,  75 => 17,  68 => 14,  56 => 6,  87 => 25,  21 => 2,  26 => 9,  93 => 44,  88 => 9,  78 => 21,  46 => 7,  27 => 1,  44 => 12,  31 => 12,  28 => 10,  201 => 40,  196 => 47,  183 => 35,  171 => 80,  166 => 33,  163 => 30,  158 => 28,  156 => 75,  151 => 63,  142 => 26,  138 => 68,  136 => 56,  121 => 46,  117 => 60,  105 => 55,  91 => 10,  62 => 39,  49 => 17,  24 => 8,  25 => 3,  19 => 1,  79 => 18,  72 => 46,  69 => 45,  47 => 2,  40 => 8,  37 => 10,  22 => 32,  246 => 97,  157 => 56,  145 => 46,  139 => 25,  131 => 52,  123 => 47,  120 => 61,  115 => 19,  111 => 33,  108 => 56,  101 => 34,  98 => 33,  96 => 31,  83 => 14,  74 => 125,  66 => 32,  55 => 20,  52 => 4,  50 => 3,  43 => 2,  41 => 4,  35 => 5,  32 => 5,  29 => 4,  209 => 111,  203 => 96,  199 => 50,  193 => 38,  189 => 71,  187 => 84,  182 => 66,  176 => 35,  173 => 34,  168 => 79,  164 => 59,  162 => 77,  154 => 30,  149 => 51,  147 => 71,  144 => 49,  141 => 69,  133 => 23,  130 => 22,  125 => 13,  122 => 12,  116 => 41,  112 => 18,  109 => 17,  106 => 36,  103 => 32,  99 => 48,  95 => 12,  92 => 5,  86 => 44,  82 => 22,  80 => 5,  73 => 37,  64 => 42,  60 => 22,  57 => 9,  54 => 8,  51 => 18,  48 => 13,  45 => 1,  42 => 9,  39 => 8,  36 => 5,  33 => 4,  30 => 7,);
    }
}
